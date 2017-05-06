<?php

namespace Blinkin\BiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    public function indexAction($name) {
        $repo = $this->getDoctrine()->getRepository('BiBundle:User');
        $admin = $repo->find(1);

        $encoder = $this->get('security.encoder_factory')->getEncoder($admin);
        dump($admin->getSalt());
        $encodedPass = $encoder->encodePassword('admin', $admin->getSalt());
        dump($encodedPass);


        return $this->render('BiBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function uploadAction(Request $request) {
		/* @var $file UploadedFile */
		$file = $request->files->get('Filedata');
		if ($file) {
			$ext = $file->getClientOriginalExtension();
			if (!in_array($ext, array('jpg', 'png', 'jpeg', 'gif', 'txt'))) {
				return new JsonResponse(array(
					'error' => 'Zły format pliku',
					'file' => array(
						'name' => ''
					)
				));
			}
			//dump($uploadedFile->getPathname()); die;
			$this->getParameter('upload_dir');
			$uploadDir = $this->getParameter('upload_dir');
			$fileName = md5(uniqid()).'.'.$file->getClientOriginalExtension();
			//move() - funkcja obiektu Symfony2; przenosi plik z tmp serwera do katalogu o nazwie
			$file->move($uploadDir, $fileName);
			return new JsonResponse(array(
				'error' => $file->getError() ? $file->getErrorMessage() : '',
				'file' => array(
					'name' => $fileName
				)
			));
		}
		return new JsonResponse(array(
				'error' => 'No file was sent',
				'file' => ''
			));
	}

}
