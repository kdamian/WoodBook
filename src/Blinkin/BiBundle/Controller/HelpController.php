<?php

namespace Blinkin\BiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blinkin\BiBundle\Form\Type\HelpType;
use Blinkin\BiBundle\Entity\Help;

class HelpController extends Controller {

    public function indexAction() {

        $enquiry = new Help();
        $form = $this->createForm(new HelpType(), $enquiry);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                        ->setSubject('Zapytanie z portalu WoodBook')
                        ->setFrom('woodbook@o2.pl')
                        ->setTo($this->container->getParameter('woodbook.emails.contact_email'))
                        ->setBody($this->renderView('BiBundle:Default:contactEmail.txt.twig', array('enquiry' => $enquiry)));
                $this->get('mailer')->send($message);


                //tworzenie flasha na ekranie po wysłaniu maila
                // $this->get('session')->setFlash('help-notice', 'Twoje zapytanie zostalo wyslane, dziękuję.');
                //przekieraowanie po zrobieniu flasha
                return $this->redirect($this->generateUrl('bi_help'));
            }
        }

        return $this->render('BiBundle:Default:help.html.twig', array(
                    'form' => $form->createView()
        ));

        //return $this->render('BiBundle:Default:help.html.twig');
    }

}
