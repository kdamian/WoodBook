<?php

namespace ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

	public function indexAction() {

		//$user = $this->get('security.token_storage')->getToken()->getUser();
		//$items = $this->getDoctrine()->getRepository('ForumBundle:Forum')->findByUser($user);

		$items = $this->getDoctrine()->getRepository('ForumBundle:Forum')->findAll();

		return $this->render('ForumBundle:Forum:index.html.twig', array(
					'items' => $items
		));
	}

}
