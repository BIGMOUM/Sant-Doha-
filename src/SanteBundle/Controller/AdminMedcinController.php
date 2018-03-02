<?php

namespace SanteBundle\Controller;
use SanteBundle\Entity\User;


use SanteBundle\Repository\MedcinRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminMedcinController extends Controller
{
    public function lireAction()
    {
        $em=$this->getDoctrine()->getManager();
        //$medcins = $em->getRepository('SanteBundle:User')->findAll();

        $medcinsQB = $em->getRepository(User::class)->findMedcinsQB();


        return $this->render('SanteBundle:AdminMedcin:lire.html.twig', array(
            //'medcins'=>$medcins,
            'medcinsqb'=>$medcinsQB
        ));
    }

    public function supprimerAction($id)
    {

        $e_manager = $this->getDoctrine()->getManager();
        $medcin=$e_manager->getRepository("SanteBundle:User")->find($id);
        $e_manager->remove($medcin);
        $e_manager->flush();
        return $this->redirectToRoute('lireAdminMedcin',array(

        ));
    }

}
