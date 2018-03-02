<?php

namespace SanteBundle\Controller;

use SanteBundle\Entity\blog;
use SanteBundle\Entity\Comment;
use SanteBundle\Form\CommentType;
use SanteBundle\Repository\blogRepository;
use SanteBundle\SanteBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Twig\Template;

class blogController extends Controller
{


    public function indexAction($blog_id)
    {
        $em = $this->getDoctrine()->getManager();

        $blog = $em->getRepository('SanteBundle:blog')->find($blog_id);
        $comments = $em->getRepository('SanteBundle:Comment')
            ->getCommentsForBlog($blog_id);


        return $this->render('SanteBundle:blog:sho.html.twig', array(
            'blog' => $blog,
            'comments' => $comments,
        ));
    }

    public function voirAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('SanteBundle:blog')->findAll();
        /**
         * @var $paginator \knp\Component\Pager\Paginator
         */

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $blog,
            $request->query->getInt('page', 1),
            $request->query->getInt('page', 3));


        return $this->render('SanteBundle:blog:voir.html.twig', array(
            'blog' => $pagination,
        ));
    }


    public function newAction(Request $request)
    {
        $blog = new blog();
        $form = $this->createForm('SanteBundle\Form\blogType', $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $blog->uploadImage();
            $em->persist($blog);
            $em->flush();

        }

        return $this->render('SanteBundle:blog:new.html.twig', array(
            'blog' => $blog,
            'form' => $form->createView(),
            // ...
        ));
    }

    public function blogAdminAction()
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('SanteBundle:blog')->findAll();


        return $this->render('SanteBundle:Administration:filter.html.twig', array(
            'blog' => $blog,
        ));
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $blog = $em->getRepository('SanteBundle:blog')->find($id);
        $em->remove($blog);
        $em->flush();
        return $this->redirectToRoute('sante_Filter');
    }

    public function SearchcategorieAction(Request $request)
    {

        if ($request->isXmlHttpRequest()) {
        $nom=$request->get('titre');
        $em=$this->getDoctrine()->getManager();
        $voitures = $em->getRepository('SanteBundle:blog')
            ->findcategorie($nom);
        //initialize serializer
        $ser=new Serializer(array(new ObjectNormalizer()));
        //normalisation of objects
        $data=$ser->normalize($voitures);
        //return the normlized object in a json format
        return new JsonResponse($data);


        }
        return $this->render('SanteBundle:blog:recherche.html.twig', array(
        ));

    }
}
