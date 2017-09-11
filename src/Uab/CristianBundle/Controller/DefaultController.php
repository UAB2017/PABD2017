<?php

namespace Uab\CristianBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CristianBundle:Default:index.html.twig', array(
          'title' => 'Cristian Onisor',
        ));
    }
}
