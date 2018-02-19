<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LocateController extends Controller
{
    public function LocateAction()
    {
        return $this->render('SanteBundle:Default:locate.html.twig');
    }
}
