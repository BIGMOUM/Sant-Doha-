<?php

namespace SanteBundle\Controller;

use MailBundle\Entity\Mail;
use MailBundle\Form\MailType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MailController extends Controller
{
    public function indexAction(Request $request)
    {
        $mail = new Mail();
        $form= $this->createForm(MailType::class, $mail);
        $form->handleRequest($request) ;

        if ($form->isValid()) {

            $message = \Swift_Message::newInstance()
                ->setSubject('Accusé de réception')
                ->setFrom('hamzagolovkin@gmail.com')
                ->setTo($mail->getEmail())
                ->setBody(
                    $this->renderView(
                        'SanteBundle:Mail:email.html.twig',
                        array('nom' => $mail->getNom(), 'prenom'=>$mail->getPrenom())
                    ),
                    'text/html'
                );
            $this->get('mailer')->send($message);
            return $this->redirect($this->generateUrl('success_mail'));

        }
        return $this->render('SanteBundle:Mail:index.html.twig', array('form'=>$form->createView()));
    }

    public function successMailAction()
    {
        //return new Response("email envoyé avec succès, Merci de vérifier votre adresse mail.");
        return $this->render('SanteBundle:Mail:success_mail.html.twig');
    }

}
