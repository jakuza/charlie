<?php

namespace Charlie\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class BachecaController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $offerte = $this->getDoctrine()
            ->getRepository('CharlieWebsiteBundle:Offerta')
            ->findAll();
        
        return array('offerte' => $offerte);
    }
}
