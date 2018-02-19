<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServicesController extends Controller
{
    public function ServicesAction()
    {
        return $this->render('SanteBundle:Default:services.html.twig');
    }
}
