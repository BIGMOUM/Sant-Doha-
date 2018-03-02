<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{

    public function profilesAdminAction(Request $request)
    {
        $em = $this->getDoctrine();//->getManager();
        $user = $em->getRepository("SanteBundle:User")->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $user, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            $request->query->getInt('limit', 6)/*page number*/
        /*limit per page*/
        );

        return $this->render('@Sante/Administration/profiles.twig', array('users' => $pagination,
            'pagination' => $pagination));


    }

    public function supprimerAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("SanteBundle:User")->find($id);
        //unlink('images1/'.$produit->getNom().".jpg");
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('admin_profiles_affiche');
    }

    public function DetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("SanteBundle:User")->find($id);
        return $this->render('@Sante/Administration/detailMembrel.html.twig', array('user' => $user));

    }


    public function detailAdminAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("SanteBundle:User")->find($id);
        return $this->render('@Sante/Administration/detailMembrel.html.twig', array('user' => $user));

    }
    public function RechercheAction(Request $request)
    {

        $nom = $request->get('username');
        $em = $this->get('doctrine.orm.default_entity_manager');
        $searchResult = $em->getRepository('SanteBundle:User')->searchByNomMembre($nom);

        return $this->render('@Sante/Administration/rechercheMembree.html.twig.html.twig', array('membres' =>$searchResult

        ));

    }




}


