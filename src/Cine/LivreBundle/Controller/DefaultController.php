<?php

namespace Cine\LivreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CineLivreBundle:Default:index.html.twig', array('name' => $name));
    }
}
