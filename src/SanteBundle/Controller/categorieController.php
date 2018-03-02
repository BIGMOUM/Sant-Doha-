<?php

namespace SanteBundle\Controller;

use SanteBundle\Entity\categorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class categorieController extends Controller
{
    public function editAction()
    {
        return $this->render('SanteBundle:categorie:edit.html.twig', array(
            // ...
        ));
    }

    public function newAction(Request $request)
    {
        $categorie = new categorie();
        $form = $this->createForm('SanteBundle\Form\categorieType', $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorie->setDateC(new \DateTime('now'));

            $em = $this->getDoctrine()->getManager();
            $em->persist($categorie);
            $em->flush();

          //  return $this->redirectToRoute('Sa', array('id' => $categorie->getId()));
        }
        return $this->render('SanteBundle:categorie:new.html.twig', array(
        'categorie' => $categorie,
        'form' => $form->createView(),

        // ...
        ));
    }


    public function SupprimerCategorieAction($id){
        $em=$this->getDoctrine()->getManager();
        $categorie = $em->getRepository("SanteBundle:categorie")->find($id);
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('sante_ProfileMembres');}
    public function catAdminAction()
    {
        $em=$this->getDoctrine()->getManager();
        $categorie = $em->getRepository('SanteBundle:categorie')->findAll();


        return $this->render('SanteBundle:Administration:profilemembres.html.twig', array(
            'categorie'=>$categorie,
        ));
    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('SanteBundle:categorie')->findAll();

        return $this->render('SanteBundle:categorie:index.html.twig', array(
            'categories' => $categories,
            // ...
        ));
    }
    public function sidebarAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('SanteBundle:categorie')->countActiveJobs();


        return $this->render('SanteBundle:categorie:sidebar.html.twig', array('categories' => $categories));
    }
}
