<?php

namespace SanteBundle\Controller;

use SanteBundle\Entity\Demande;
use SanteBundle\Entity\User;
use SanteBundle\Form\DemandeForm;
use SanteBundle\Repository\DemandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;



class DemandeController extends Controller
{
    public function ajoutAction(Request $request)
    {



        $demande = new Demande();

        $form = $this->createForm(DemandeForm::class,$demande);
        $form->handleRequest($request);

        if  (($form->isValid()) )
        {
            if ($demande->getEtat() === null) {
                $demande->setEtat('En attente ,Merci');
            }


            $e_manager=$this->getDoctrine()->getManager();
            $e_manager->persist($demande);
            $e_manager->flush();

           return $this->redirectToRoute('successDemande');
       }
        return $this->render('SanteBundle:Demande:ajout.html.twig', array(
            'form'=>$form->createView(),

        ));

    }
    public function successDemandeAction(){
        return $this->render('SanteBundle:Demande:successDemande.html.twig', array(

        ));
    }

    public function lireAction($idm)
    {

        $em=$this->getDoctrine()->getManager();
        $demande = $em->getRepository('SanteBundle:Demande')->findDemandeQB($idm);
        return $this->render('SanteBundle:Demande:lire.html.twig', array(
                 'idm'=>$idm,

                 'demande'=>$demande
        ));
    }

    public function modifierAction(Request $request,$idm,$id)
    {
        $e_manager=$this->getDoctrine()->getManager();
        $demande = $e_manager->getRepository(Demande::class)->find($id);

        $form=$this->createForm(DemandeForm::class,$demande);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $e_manager = $this->getDoctrine()->getManager();

            $e_manager->flush();

            return $this->redirectToRoute('lireDemande',array('idm'=>$idm ));
        }

        return $this->render('SanteBundle:Demande:modifier.html.twig', array(

            'form'=>$form->createView()

        ));
    }

    public function supprimerAction($idm,$id)
    {
        $e_manager = $this->getDoctrine()->getManager();
        $demande=$e_manager->getRepository("SanteBundle:Demande")->find($id);
        $e_manager->remove($demande);
        $e_manager->flush();

        return $this->redirectToRoute('lireDemande',array('idm'=>$idm)
        );
    }

}
