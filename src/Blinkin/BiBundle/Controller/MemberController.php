<?php

namespace Blinkin\BiBundle\Controller;

use Blinkin\BiBundle\Entity\Tab;
use Blinkin\BiBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class MemberController extends Controller {

	private $params = array();

	// funkcja tworząca tablicę wysyłaną do Twiga; zwraca parametr params, który dodaje do tablicy kolejne dane
	private function assignMember(User $user) {
		$this->params['member'] = $user;
	}

	public function indexAction() {
		//wyszukuje wszystkich obecnych użytkowników w bazie
		$users = $this->getDoctrine()->getRepository('BiBundle:User')->findAll();
		return $this->render('BiBundle:Member:index.html.twig', array(
					'items' => $users
		));
	}

	public function itemAction(User $user) {
		
		$this->assignMember($user);
		/* @var $loggedUser User */
		$loggedUser = $this->get('security.token_storage')->getToken()->getUser();
		
		//$this->getDoctrine()->getManager()->createQuery('select m from dds');
		$friends = $loggedUser->getMyFriends();
		$isMyFriend = false;
		foreach ($friends as $friend) {
			if ($friend->getId() == $user->getId()) {
				$isMyFriend = true;
			}
		}
		$this->params['isMyFriend'] = $isMyFriend;
		
		return $this->render('BiBundle:Member:item.html.twig', $this->params);
	}

	public function blogAction(User $user) {
		$this->assignMember($user);
		$this->params['blogs'] = $this->getDoctrine()->getRepository('BiBundle:Blog')->findByUser($user);
		return $this->render('BiBundle:Member:blog.html.twig', $this->params);
	}

	public function historyAction(User $user) {
		$this->assignMember($user);
		$this->params['histories'] = $this->getDoctrine()->getRepository('BiBundle:History')->findByUser($user);
		return $this->render('BiBundle:Member:history.html.twig', $this->params);
	}

	public function historyBodyAction(User $user, $id) {
		$this->assignMember($user);
		$this->params['histories_body'] = $this->getDoctrine()->getRepository('BiBundle:History')->findById($id);
		return $this->render('BiBundle:Member:historyBody.html.twig', $this->params);
	}

	public function tabAction(User $user) {
		$this->assignMember($user);
		$this->params['tabs'] = $this->getDoctrine()->getRepository('BiBundle:Tab')->findByUser($user);
		return $this->render('BiBundle:Member:tab.html.twig', $this->params);
	}

	public function tabItemAction(Tab $tab) {
		$this->assignMember($tab->getUser());
		//$this->getDoctrine()->getRepository('BiBundle:Tab')->find($tab)
		$rootDir = $this->getParameter('kernel.root_dir');
		$publicDir = $this->getParameter('public_dir');
		$uploadDir = $this->getParameter('upload_dir');

		$dir = "{$rootDir}/../{$publicDir}{$uploadDir}";
		$filename = "{$dir}{$tab->getSrc()}";
		$contetns = file_get_contents($filename);
		$this->params['tab'] = $tab;
		$this->params['contents'] = $contetns;
		return $this->render('BiBundle:Member:tab_item_member.html.twig', $this->params);
	}

	public function addFriendAction(Request $request, User $friend) {

		//$friend_id = new Friend();
		//$friend_id->setFriend($friend);
		//$user = new User();
		$user = $this->get('security.token_storage')->getToken()->getUser();
		/* @var $user User */
		$user->addMyFriend($friend);
		//$id = $user->getId($user);
		//$friend_id->setUser($id);

		$em = $this->getDoctrine()->getEntityManager();
		$em->persist($user);
		$em->flush();


		//return $this->redirectToRoute('bi_member_index');
		$referer = $request->headers->get('referer');
		$this->get('session')->getFlashBag()->set('msgs', 'Dodano znajomego');

		return new RedirectResponse($referer);
	}
	
	public function removeFriendAction(Request $request, User $friend) {

		$user = $this->get('security.token_storage')->getToken()->getUser();
		/* @var $user User */
		$user->getMyFriends();
		$user->removeMyFriend($friend);
		$em = $this->getDoctrine()->getEntityManager();
		$em->persist($user);
		$em->flush();

		//return $this->redirectToRoute('bi_member_index');
		$referer = $request->headers->get('referer');
		$this->get('session')->getFlashBag()->set('msgs', 'Usunięto znajomego');

		return new RedirectResponse($referer);
	}

	public function friendsAction() {

		$user = $this->get('security.token_storage')->getToken()->getUser();
		$friends = $user->getMyFriends();
		return $this->render('BiBundle:Member:friends.html.twig', array(
			'friends' => $friends,
		));
	}

}
