<?php

namespace SanteBundle\Controller;

use Doctrine\ORM\Query;
use SanteBundle\Entity\ArticlePanier;
use SanteBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


if (session_status() == PHP_SESSION_NONE) {
    // si la session n'est pas active , on la démarre
    // une session active ne peut pas être démarrée un autre fois
    session_start();
}

class PanierController extends Controller
{


    public function renderAction()
    {

        $ret = array();

        $em = $this->get('doctrine.orm.default_entity_manager');
        if (isset($_SESSION['produits'])) {
            $p = $_SESSION['produits'];
            $sum = 0;
            foreach ($p as $id => $quantite) {
                //key => id du produit
                //value => quantité
                $produit = $em->getRepository('SanteBundle:produit')->find($id);
                //incrémenter la somme
                if ($produit != null) {
                    $sum += $produit->getPrix() * $quantite;


                    $articlePanier = new ArticlePanier();
                    $articlePanier->setNom($produit->getNom());
                    $articlePanier->setQteCommande($quantite);
                    $articlePanier->setId($produit->getId());

                    array_push($ret, $articlePanier);
                }

            }
        }


        return $this->render('@Sante/panier/afficher.html.twig', array('products' => $ret, 'sum' => $sum ) );
    }

    public function addAction(Request $request)
    {




        $id = $request->get('id');

        $qte = $request->get('qte');
        //tableau qui contient les IDs des produits
        $p = array();


        if (!isset($_SESSION['produits'/*clé */])) {
            //si la session ne possède pas la valeur correspondante à la clé produits
            // on doit l'initaliser à un tableau vide
            $_SESSION['produits'] = $p;
        } else {
            //récupérer la valeur de la variable produits de la session dans le tableau p
            $p = $_SESSION['produits'];

        }


        $produit = $this->get('doctrine.orm.default_entity_manager')->getRepository('SanteBundle:produit')->find(intval($id));
        if ($produit != null) {

            if (array_key_exists($id, $p)) {
                //vérifier si le produit est commandé précédemment
                $oldQte = $p[$id];
                $newQte = $oldQte + intval($qte);
                $p[$id] = $newQte;
            } else {
                $p[$id] = intval($qte);
            }

            $_SESSION['produits'] = $p;

            /*   $mail = $this->container->get('security.context')->getToken()->getUser();


               $message = \Swift_Message::newInstance()
                   ->setSubject('Validation de votre commande')
                   ->setFrom(array('chakib.fathallah@gmail.com'=>'votre commande'))
                   ->setTo($mail->getEmail())
                   ->setBody(
                       $this->renderView(
                           '@SanteInt/panier/afficher.html.twig',

                           array()

                       ),
                       'text/html'

                   );
               $this->get('mailer')->send($message);*/
            //return $this->redirect($this->generateUrl('generer_facture'));
            return new Response();

        }
    }

    public function countAction()
    {
        if (isset($_SESSION['produits'])) {
            return new Response(count($_SESSION['produits']));
        }

        return new Response("0");


    }

    public function deleteAction(Request $request)
    {
        if (isset($_SESSION['produits'])) {
            $id = $request->get('id');
            unset($_SESSION['produits'][$id]);

        }

        return new Response();
    }

    public function clearAction()
    {

        $_SESSION['produits'] = array();

        return new Response();

    }

    public function factureAction()
    {


        $ret = array();

        $em = $this->get('doctrine.orm.default_entity_manager');
        if (isset($_SESSION['produits'])) {
            $p = $_SESSION['produits'];
            $sum = 0;
            foreach ($p as $id => $quantite) {
                //key => id du produit
                //value => quantité
                $produit = $em->getRepository('SanteBundle:produit')->find($id);
                if ($produit != null) {
                    //incrémenter la somme
                    $sum += $produit->getPrix() * $quantite;


                    $articlePanier = new ArticlePanier();
                    $articlePanier->setPrix($produit->getPrix());
                    $articlePanier->setNom($produit->getNom());
                    $articlePanier->setQteCommande($quantite);
                    $articlePanier->setId($produit->getId());

                    array_push($ret, $articlePanier);
                }

            }
        }

        $html = $this->renderView('@Sante/panier/facture.html.twig', array(
            'sum' => $sum,
            'produits' => $ret
        ));

        $filename = "facture " . date("Y/m/d") . ".pdf";

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename)
            )
        );
    }


}

