<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DoctorsController extends Controller
{
    public function DoctorsAction()
    {
        return $this->render('SanteBundle:Default:doctors.html.twig');
    }
    public function ListemembresAction()
    {
        return $this->render('SanteBundle:Administration:listemembre.html.twig');
    }
    public function ProfilemembresAction()
    {
        return $this->render('SanteBundle:Administration:profilemembres.html.twig');
    }
}
