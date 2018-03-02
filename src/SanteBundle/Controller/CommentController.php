<?php

namespace SanteBundle\Controller;

use SanteBundle\Entity\blog;
use SanteBundle\Entity\Comment;
use SanteBundle\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends Controller
{

    public function newAction($blog_id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $comment = new Comment();
        $blog=$em->getRepository(blog::class)->find($blog_id);
       // $comment->getBlogId($blog_id);

        $form=$this->createForm('SanteBundle\Form\CommentType', $comment);
        $form->handleRequest($request);


        if ($form->isValid()) {
            $comment->setBlogId($blog);
            $comment->setCreatedAt(new \DateTime('now'));
           $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

        }
        return $this->render('SanteBundle:Comment:form.html.twig', array(
            'comment' => $comment,
            'blog_id'=>$blog,
            'form'   => $form->createView(),


        ));
    }

    public function commentAdminAction()
    {
        $em=$this->getDoctrine()->getManager();
        $comment = $em->getRepository('SanteBundle:Comment')->findAll();


        return $this->render('SanteBundle:Administration:listemembre.html.twig', array(
            'comments'=>$comment,
        ));
    }
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $comment=$em->getRepository('SanteBundle:Comment')->find($id);
        $em->remove($comment);
        $em->flush();
        return $this->redirectToRoute('sante_ListeMembres');
    }
    
    protected function getBlog($blog_id)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $blog = $em->getRepository('SanteBundle:blog')->find($blog_id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $blog;
    }


}
