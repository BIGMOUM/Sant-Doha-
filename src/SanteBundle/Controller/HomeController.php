<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction()
    {
        return $this->render('SanteBundle:Default:index.html.twig');
    }
    public function indexAction()
    {
        return $this->render('SanteBundle:Administration:index.html.twig');
    }
    public function index2Action()
    {
        return $this->render('SanteBundle:Administration:index2.html.twig');
    }
    public function index3Action()
    {
        return $this->render('SanteBundle:Administration:index3.html.twig');
    }

}
