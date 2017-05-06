<?php

namespace Blinkin\BiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blinkin\BiBundle\Form\Type\TabType;
use Blinkin\BiBundle\Entity\Tab;
use Symfony\Component\HttpFoundation\Request;

class TabController extends Controller {

	public function indexAction() {

		$user = $this->get('security.token_storage')->getToken()->getUser();
		$items = $this->getDoctrine()->getRepository('BiBundle:Tab')->findByUser($user);

		return $this->render('BiBundle:Tab:index.html.twig', array(
					'items' => $items
		));
	}

	public function editAction(Request $request, $itemId = null) {

		$item = null;
		if (null === $itemId) {
			$item = new Tab();
		} else {
			$item = $this->getDoctrine()->getRepository('BiBundle:Tab')->find($itemId);
		}

		$form = $this->createForm(new TabType(), $item);
		//dump($item); die;
		$form->handleRequest($request);
		if ($form->isValid()) {
			//dump($item); die;
			$user = $this->get('security.token_storage')->getToken()->getUser();
			if (!$item->getId()) {
				$item->setUser($user);
				$item->setCreated(time());
			}
			$item->setUpdated(time());
			$em = $this->getDoctrine()->getManager();
			$em->persist($item);
			$em->flush();
		}

		return $this->render('BiBundle:Tab:edit.html.twig', array(
					'form' => $form->createView()
		));
	}

	public function deleteAction(Tab $item) {
		$em = $this->getDoctrine()->getManager();
		$em->remove($item);
		$em->flush();

		return $this->redirectToRoute('bi_tab_index');
	}

	public function tabItemAction(Tab $tab) {
		//$this->getDoctrine()->getRepository('BiBundle:Tab')->find($tab)
		$rootDir = $this->getParameter('kernel.root_dir');
		$publicDir = $this->getParameter('public_dir');
		$uploadDir = $this->getParameter('upload_dir');

		$dir = "{$rootDir}/../{$publicDir}{$uploadDir}";
		$filename = "{$dir}{$tab->getSrc()}";
		$contetns = file_get_contents($filename);
		return $this->render('BiBundle:Tab:tab_item.html.twig', array(
					'tab' => $tab,
					'contents' => $contetns
		));
	}

}
