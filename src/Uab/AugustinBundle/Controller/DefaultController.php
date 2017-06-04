<?php

namespace Uab\AugustinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UabAugustinBundle:Default:index.html.twig', array(
          'Title' => 'Groza',
         
         ));
    }
}
