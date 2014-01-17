<?php

namespace Travail\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TravailJobeetBundle:Default:index.html.twig', array('name' => $name));
    }
}
