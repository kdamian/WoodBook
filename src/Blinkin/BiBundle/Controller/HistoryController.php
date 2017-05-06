<?php

namespace Blinkin\BiBundle\Controller;

use Blinkin\BiBundle\Entity\History;
use Blinkin\BiBundle\Form\Type\HistoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class HistoryController extends Controller {

	public function indexAction() {

		$user = $this->get('security.token_storage')->getToken()->getUser();

		$items = $this->getDoctrine()->getRepository('BiBundle:History')->findByUser($user);

		return $this->render('BiBundle:History:index.html.twig', array(
					'items' => $items
		));
	}

	public function editAction(Request $request, $itemId = null) {

		$item = null;
		if (null === $itemId) {
			$item = new History();
		} else {
			$item = $this->getDoctrine()->getRepository('BiBundle:History')->find($itemId);
		}

		$form = $this->createForm(new HistoryType(), $item);
		//dump($item); die;
		$form->handleRequest($request);
		if ($form->isValid()) {
			$user = $this->get('security.token_storage')->getToken()->getUser();
			$item->setUser($user);
			$em = $this->getDoctrine()->getManager();
			$em->persist($item);
			$em->flush();
		}

		return $this->render('BiBundle:History:edit.html.twig', array(
					'form' => $form->createView()
		));
	}

	public function deleteAction(Request $request, History $item) {

		$em = $this->getDoctrine()->getManager();
		$em->remove($item);
		$em->flush();

		$referer = $request->headers->get('referer');
		$this->get('session')->getFlashBag()->set('msgs', 'Usunięto');

		return new RedirectResponse($referer);
	}

}
