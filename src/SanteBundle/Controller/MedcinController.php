<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SanteBundle\Entity\User;
use SanteBundle\Repository\MedcinRepository;
class MedcinController extends Controller
{
    public function medcinAction()
    {

        $em=$this->getDoctrine()->getManager();
        //$medcins = $em->getRepository('SanteBundle:User')->findAll();

        $medcinsQB = $em->getRepository(User::class)->findMedcinsQB();

        return $this->render('SanteBundle:Medcin:medcin.html.twig', array(
              //  'medcins'=>$medcins,
                'medcinsqb'=>$medcinsQB
        ));
    }



    public function ajoutAction()
    {
        return $this->render('SanteBundle:Medcin:ajout.html.twig', array(

        ));
    }



    public function modifierAction()
    {
        $em=$this->getDoctrine()->getManager();
        return $this->render('SanteBundle:Medcin:modifier.html.twig', array(

        ));
    }

    public function supprimerAction()
    {
        return $this->render('SanteBundle:Medcin:supprimer.html.twig', array(

        ));
    }

    public function listeMembresAction()
    {
        return $this->render('SanteBundle:Administration:Medcin:listemembre.html.twig', array(

        ));
    }

}
