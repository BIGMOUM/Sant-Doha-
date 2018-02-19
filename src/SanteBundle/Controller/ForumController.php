<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ForumController extends Controller
{
    public function ForumAction()
    {
        return $this->render('SanteBundle:Default:forum.html.twig');
    }
    public function FilterAction()
    {
        return $this->render('SanteBundle:Administration:filter.html.twig');
    }
}
