<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticlesController extends Controller
{
    public function ArticlesAction()
    {
        return $this->render('SanteBundle:Default:articles.html.twig');
    }
    public function ArticlesAdminAction()
    {
        return $this->render('SanteBundle:Administration:gestionarticle.html.twig');
    }
}
