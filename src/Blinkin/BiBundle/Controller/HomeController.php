<?php

namespace Blinkin\BiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function historyAction() {
        return $this->render('BiBundle:Home:history.html.twig');
    }

    

}
