<?php

namespace Cine\LivreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CategController extends Controller
{
    public function indexAction()
    {
        return $this->render('CineLivreBundle:Categ:index.html.twig',
        array('nom' => 'Laurent'));
    }
    public function index2Action()
    {
        return $this->render('CineLivreBundle:Categ:index.html.twig',
        array('nom' => 'Catégories'));
    }
}
