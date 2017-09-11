<?php
// src/AppBundle/Controller/CristianController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CristianController extends Controller

{
    /**
     * @Route("/Cristian/numberOld")
     */
    public function numberActionOld()
    {
        $number = mt_rand(0, 100);

        return new Response(
         //   return $this->render('florin/number.html.twig', array(
         //   'number' => $number,
        //));
            '<html><body>Cristian\'s number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/Cristian/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('cristian/cristianNumber.html.twig', array(
            'number' => $number,
        ));
    }
}

?>