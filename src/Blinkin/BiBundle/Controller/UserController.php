<?php

namespace Blinkin\BiBundle\Controller;

use Blinkin\BiBundle\Entity\User;
use Blinkin\BiBundle\Form\Type\User_register;
use Blinkin\BiBundle\Form\Type\UserType;
use Blinkin\BiBundle\Utils\User\Hasher;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class UserController extends Controller {

	public function loginAction() {

		$user = $this->get('security.token_storage')->getToken()->getUser();
		if ($user instanceof User) {
			return $this->redirectToRoute('bi_user_home');
		}

		$authenticationUtils = $this->get('security.authentication_utils');
		$error = $authenticationUtils->getLastAuthenticationError();

		return $this->render('BiBundle:User:login.html.twig', array(
					//'form' => $form->createView(),
					'error' => $error
		));
	}

//    public function logoutAction() {
//
//       $this->container->get('security.context')->setToken(null);
//       return $this->redirect('bi_user_login');
//    }

	public function homeAction(Request $request) {

		$id = $this->get('security.token_storage')->getToken()->getUser()->getId();
		$user = $this->getDoctrine()->getRepository('BiBundle:User')->find($id);
		$form = $this->createForm(new UserType(), $user);
		$form->handleRequest($request);
		if ($form->isValid()) {
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
		}
		return $this->render('BiBundle:User:home.html.twig', array(
					'user_form' => $form->createView()
		));
	}

	public function loginCheckAction() {
		// this controller will not be executed,
		// as the route is handled by the Security system
	}

	public function registerAction(Request $request) {
		$user = new User();
		$form = $this->createForm(new User_register(), $user);
		$form->handleRequest($request);
		if ($form->isValid() && $form->isSubmitted()) {
			$password = $this->get('security.password_encoder')
					->encodePassword($user, $user->getPassword());
			$user->setPassword($password);
			$roleUser = $this->getDoctrine()->getRepository('BiBundle:Role')->findOneByName('ROLE_USER');
			$user->addRole($roleUser);
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();


			$link = $this->get('router')->generate('bi_user_activate', array(), UrlGeneratorInterface::ABSOLUTE_URL) . '?id=' . $user->getId() . '&hash=' . Hasher::get($user);
			$message = Swift_Message::newInstance()
					->setSubject('Zapytanie z portalu WoodBook')
					->setFrom('woodbook@o2.pl')
					->setTo($user->getEmail())
					->setBody($this->renderView('BiBundle:Default:activateEmail.html.twig', array(
						'link' => $link
					)))
					->setContentType('text/html');
			//dump($message); die;
			$this->get('mailer')->send($message);
			return $this->redirectToRoute('bi_home');
		}
		return $this->render('BiBundle:User:register.html.twig', array('form' => $form->createView()));
	}

	public function activateAction(Request $request) {
		/* @var $user User */
		$user = $this->getDoctrine()->getRepository('BiBundle:User')->find($request->query->get('id'));
		
		if ($user && Hasher::check($user, $request->query->get('hash'))) {
			$user->setIsActive(true);
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			$this->get('session')->getFlashBag()->set('msgs', 'Dziękujemy za aktywację konta. Zaloguj się');
			return $this->redirectToRoute('bi_user_login');
		}
		
	}
	
	public function deleteAction() {
		/* @var $user User */
		$id = $this->get('security.token_storage')->getToken()->getUser()->getId();
		$user = $this->getDoctrine()->getRepository('BiBundle:User')->find($id);
		
		if ($user) {
			$user->setIsActive(false);
			$em = $this->getDoctrine()->getManager();
			$em->persist($user);
			$em->flush();
			$this->get('security.token_storage')->setToken(null);
			$this->get('request')->getSession()->invalidate();
			$this->get('session')->getFlashBag()->set('msgs', 'Konto zostało usunięte');
			return $this->redirectToRoute('bi_user_login');
		}
		
	}

}
