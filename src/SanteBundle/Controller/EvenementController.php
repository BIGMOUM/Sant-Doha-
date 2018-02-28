<?php

namespace SanteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use SanteBundle\Entity\Evenement;
use SanteBundle\Entity\Article;




use SanteBundle\Form\ArticleType;

use SanteBundle\Form\EvenementType;

use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class EvenementController extends Controller
{
    public function ajoutEAction(Request $request)
    {
        $evenment = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenment);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evenment);
            $em->flush();
            return $this->redirectToRoute("sante_GestionArticles");
        }

        return $this->render('SanteBundle:Article:ajoutEvenement.html.twig', array('form' => $form->createView()));


    }
    public function updateEAction(Request $request){
        $id=$request->get('id');
        $em=$this->getDoctrine();
        $evenement = $em->getRepository(Evenement::class)->find($id);

        $form=$this->createForm(EvenementType::class,$evenement);
        $form->handleRequest($request);

        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute("sante_GestionArticles");
        }
        return $this->render('SanteBundle:Article:ajoutEvenement.html.twig', array('form'=>$form->createView()));

    }
    public function deleteEAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $article=$em->getRepository(Evenement::class)->find($id);
        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute('sante_GestionArticles');
    }
    public function afficheEAction()
    {
        $em=$this->getDoctrine()->getManager();
        $Evenements = $em->getRepository(Evenement::class)->findAll();
        return $this->render('SanteBundle:Default:evenements.html.twig', array(
            'Evenements'=>$Evenements
        ));
    }

}
