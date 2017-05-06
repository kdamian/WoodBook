<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\Answer;
use ForumBundle\Entity\Forum;
use ForumBundle\Form\Type\AnswerType;
use ForumBundle\Form\Type\ForumType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AddController extends Controller {

	public function indexAction(Request $request) {

		$forum = new Forum();
		$form = $this->createForm(new ForumType(), $forum);
		
		$form->handleRequest($request);
		if ($form->isValid()) {
			$user = $this->get('security.token_storage')->getToken()->getUser();
			$forum->setUser($user);
			$em = $this->getDoctrine()->getManager();
			$em->persist($forum);
			$em->flush();
			return $this->redirectToRoute('forum_homepage');
		}

		return $this->render('ForumBundle:Forum:add.html.twig', array(
					'form' => $form->createView()
		));

		
	}

	public function answerAction(Request $request, Forum $subId, $ansId = null) {
		
		$answer = null;
		if (null === $ansId) {
			$answer = new Answer();
		} else {
			$answer = $this->getDoctrine()->getRepository('ForumBundle:Answer')->find($ansId);
		}
		
		
		$form = $this->createForm(new AnswerType(), $answer);
		
		$form->handleRequest($request);
		if ($form->isValid()) {
			$user = $this->get('security.token_storage')->getToken()->getUser();
			if (!$answer->getId()) {
				$answer->setUser($user);
			}
			
			$answer->setSubject($subId);
			$em = $this->getDoctrine()->getManager();
			$em->persist($answer);
			$em->flush();
			return $this->redirectToRoute('forum_subject', array('id' => $subId->getId()));
		}

		return $this->render('ForumBundle:Forum:add_answer.html.twig', array(
					'form' => $form->createView()
		));

		
	}

// --------------------kopia funkcji answerAction ---------- działająca bez przycisku edycja---------
//	public function answerAction(Request $request, Forum $subId, $ansId = null) {
//		
//		$answer = new Answer();
//		$form = $this->createForm(new AnswerType(), $answer);
//		
//		$form->handleRequest($request);
//		if ($form->isValid()) {
//			$user = $this->get('security.token_storage')->getToken()->getUser();
//			$answer->setUser($user);
//			$answer->setSubject($subId);
//			$em = $this->getDoctrine()->getManager();
//			$em->persist($answer);
//			$em->flush();
//			return $this->redirectToRoute('forum_homepage');
//		}
//
//		return $this->render('ForumBundle:Forum:add_answer.html.twig', array(
//					'form' => $form->createView()
//		));
//
//		
//	}
	
}
