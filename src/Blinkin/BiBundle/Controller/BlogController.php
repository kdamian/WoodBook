<?php

namespace Blinkin\BiBundle\Controller;

use Blinkin\BiBundle\Entity\Blog;
use Blinkin\BiBundle\Form\Type\BlogType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;


class BlogController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getEntityManager();

		$user = $this->get('security.token_storage')->getToken()->getUser();
        $blogs = $em->getRepository('BiBundle:Blog')->findByUser($user);

        return $this->render('BiBundle:Blog:index.html.twig', array(
                    'blogs' => $blogs,
        ));
    }
    
    public function editAction(Request $request, Blog $blog = null) {
		//dump($blog); die;
        if (null === $blog) {
            $blog = new Blog();
        }
		
        $form = $this->createForm(new BlogType(), $blog);
        
        $form->handleRequest($request);
        if ($form->isValid()) {
            //dump($item); die;
            /* @var $saver \Blinkin\BiBundle\Utils\Blog\Saver */
            $saver = $this->get('bi.blog.saver');
            $saver->setUser($this->get('security.token_storage')->getToken()->getUser());
            $saver->save($blog);
			return $this->redirectToRoute('bi_user_blog');
        }
        
        return $this->render('BiBundle:Blog:edit.html.twig', array(
              'form' => $form->createView()
        ));
    }

		public function deleteAction(Request $request, Blog $item) {

		$em = $this->getDoctrine()->getManager();
		$em->remove($item);
		$em->flush();

		$referer = $request->headers->get('referer');
		$this->get('session')->getFlashBag()->set('msgs', 'Usunięto');

		return new RedirectResponse($referer);
	}
}
