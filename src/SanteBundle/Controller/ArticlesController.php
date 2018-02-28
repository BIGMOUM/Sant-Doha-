<?php

namespace SanteBundle\Controller;

use SanteBundle\Entity\Evenement;
use SanteBundle\Entity\Article;




use SanteBundle\Form\ArticleType;

use SanteBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;



class ArticlesController extends Controller
{

    public function ArticlesAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        if ($request->isMethod("post"))
        {
            $lib=$request->get('titre');
            $modeles=$em->getRepository(Article::class)->findByTitre($lib);
            return $this->render('rechercher.html.twig', array(
                'modeles'=>$modeles));
        }


        $articles = $em->getRepository(Article::class)->findAll() ;
        /**
         *  @var $paginator \knp\Component\Pager\Paginator
         */

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $articles,
            $request->query->getInt('page', 1),
            $request->query->getInt('page', 3)

        );
        return $this->render('SanteBundle:Default:articles.html.twig', array(
            'articles'=>$pagination,

        ));    }

    public function ArticlesAdminAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $articles = $em->getRepository(Article::class)->findAll();
        $evenement = $em->getRepository(Evenement::class)->findAll();
        /**
         *  @var $paginator \knp\Component\Pager\Paginator
         */

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $articles,
            $request->query->getInt('page', 1),
            $request->query->getInt('page', 4)

        );
        /**
         *  @var $paginator \knp\Component\Pager\Paginator
         */

        $paginator1  = $this->get('knp_paginator');
        $pagination1 = $paginator1->paginate(
            $evenement,
            $request->query->getInt('page', 1),
            $request->query->getInt('page', 3)

        );
        return $this->render('SanteBundle:Administration:gestionarticle.html.twig', array(
            'articles'=>$pagination,
            'evenement'=>$pagination1
        ));
    }




    public function ajoutAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            return $this->redirectToRoute("sante_GestionArticles");
        }

        return $this->render('SanteBundle:Article:ajoutArticle.html.twig', array('form' => $form->createView()));}


    public function updateAction(Request $request){
        $id=$request->get('id');
        $em=$this->getDoctrine();
        $article = $em->getRepository(Article::class)->find($id);

        $form=$this->createForm(ArticleType::class,$article);
        $form->handleRequest($request);

        if ($form->isValid()){
            $em=$this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute("sante_GestionArticles");
        }
        return $this->render('SanteBundle:Article:ajoutArticle.html.twig', array('form'=>$form->createView()));

    }





    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $article=$em->getRepository(Article::class)->find($id);
        $em->remove($article);
        $em->flush();

        return $this->redirectToRoute('sante_GestionArticles');
    }


    public function afficheAction()
    {
        $em=$this->getDoctrine()->getManager();
        $articles = $em->getRepository(Article::class)->findAll();
        return $this->render('SanteBundle:Article:affiche.html.twig', array(
            'articles'=>$articles
        ));
    }

    public function SearchajaxAction(Request $request)
    {

        if($request->isXmlHttpRequest()){
            $titre=$request->get('titre');
            $em=$this->getDoctrine()->getManager();
            $articles = $em->getRepository(Article::class)
                ->findDqlSerieParametre($titre);
            //initialize serializer
            $ser=new Serializer(array(new ObjectNormalizer()));
            //normalisation of objects
            $data=$ser->normalize($articles);
            //return the normlized object in a json format
            return new JsonResponse($data);

        }
        return $this->render('SanteBundle:Default:articles.html.twig');
    }
    public  function  recherchePAction()
    {
        return $this->render('SanteBundle:Default:rechercherparcategorie.html.twig');

    }










}