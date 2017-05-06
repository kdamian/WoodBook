<?php

namespace ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ForumBundle\Form\Type\ForumType;
use ForumBundle\Entity\Forum;
use ForumBundle\Form\Type\AnswerType;
use ForumBundle\Entity\Answer;
use Symfony\Component\HttpFoundation\Request;

class SubjectController extends Controller {

	public function indexAction(Request $request, $id) {

		$sub = $this->getDoctrine()->getRepository('ForumBundle:Forum')->find($id);
		$items = $this->getDoctrine()->getRepository('ForumBundle:Answer')->findBySubject($id);
		$user = $this->get('security.token_storage')->getToken()->getUser()->getId();


		return $this->render('ForumBundle:Forum:subject.html.twig', array(
				'items' => $items,
				'sub' => $sub,
				'user' => $user,
		));
	}

}
