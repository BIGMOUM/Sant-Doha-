<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ShopController extends Controller
{
    public function ShopAction()
    {
        return $this->render('SanteBundle:Default:shop.html.twig');
    }
    public function ShopAdminAction()
    {
        return $this->render('SanteBundle:Administration:gestionproduit.html.twig');
    }
}
