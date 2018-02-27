<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TimetableController extends Controller
{
    public function TimetableAction()
    {
        return $this->render('SanteBundle:Default:timetable.html.twig');
    }
}
