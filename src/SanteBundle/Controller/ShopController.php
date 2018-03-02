<?php

namespace SanteBundle\Controller;

use Doctrine\ORM\Query;
use SanteBundle\Entity\produit;
use SanteBundle\Form\produitType;
use SanteBundle\Form\rechercheProduitForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Ob\HighchartsBundle\Highcharts\Highchart;

class ShopController extends Controller
{

    public function clientShopAction(Request $request)
    {

        $em = $this->getDoctrine();//->getManager();

        $produit = $em->getRepository("SanteBundle:produit")->findAll();
        if($request->getMethod() == 'POST'){


            //filter
            if ($request->get('filter')  == "Filter"){
                $min = intval($request->get('min'));
                $max = intval($request->get('max'));

                $produit = $em->getRepository('SanteBundle:produit')->getByRange($min,$max);
            }



            if ($request->get('search') == "search"){

                $q = $request->get('query');

                $produit = $em->getRepository('SanteBundle:produit')->searchByNameOrDescription($q);

            }
        }




        $minPrice = $em->getRepository('SanteBundle:produit')->getMinPrice();
        $maxPrice = $em->getRepository('SanteBundle:produit')->getMaxPrice();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $produit, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            $request->query->getInt('limit', 6)/*page number*/
        /*limit per page*/
        );

        return $this->render('@Sante/Default/shop.html.twig', array('produit' => $pagination,
            'pagination' => $pagination,
            'label_next'=>"Suivant",
            'label_previous'=>"Précédent",
            'max'=>$maxPrice,
            'min'=>$minPrice
        ));

    }


    public function clientShopDetailAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository("SanteBundle:produit")->find($id);
        return $this->render('@Sante/Default/shopDetail.html.twig', array('produit' => $produit));

    }


    public function listAdminAction(Request $request)
    {

        $em = $this->getDoctrine();//->getManager();
        $produit = $em->getRepository("SanteBundle:produit")->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $produit, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            $request->query->getInt('limit', 6)/*page number*/
        /*limit per page*/
        );

        return $this->render('@Sante/Administration/Produit/afficherTout.twig', array('produit' => $pagination,
            'pagination' => $pagination));

    }


    public function createAdminAction(Request $request)
    {
        $produit = new produit();
        $Form = $this->createForm(produitType::class, $produit);
        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {

            $file = $Form['file']->getData();

            if (!is_dir("images1")) {
                mkdir("images1");

            }
            move_uploaded_file($file, "images1/" . $file->getFileName());


            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            rename("images1/" . $file->getFileName(), "images1/" . $produit->getNom() . ".jpg");
            return $this->redirectToRoute('gestion_produit');

        }
        return $this->render('@Sante/Administration/Produit/ajout.twig',
            array('form' => $Form->createView()));

    }

    public function supprimerAdminAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository("SanteBundle:produit")->find($id);
       // unlink('images1/'.$produit->getNom().".jpg");
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute('gestion_produit');
    }


    function updateAdminAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository("SanteBundle:produit")->find($id);
        $Form = $this->createForm(produitType::class, $produit);

        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {
            $file = $Form['file']->getData();
            if ($file) {
                $file = $Form['file']->getData();
                if (!is_dir("images1")) {
                    mkdir("images1");

                }
                move_uploaded_file($file, "images1/" . $file->getFileName());
                rename("images1/" . $file->getFileName(), "images1/" . $produit->getNom() . ".jpg");

            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);//update sans persist parce que lorm deja connait lobjet
            $em->flush();
            return $this->redirectToRoute('gestion_produit');
        }

        return $this->render("SanteBundle:Administration:editProduit.html.twig",
            array('form' => $Form->createView()));
    }

    public function viewAdminAction($id)
    {
        $em = $this->get('doctrine.orm.default_entity_manager');
        $produit = $em->getRepository('SanteBundle:produit')->find($id);
        if ($produit != null){
            return $this->render('@Sante/Administration/viewProduit.html.twig',array('produit'=>$produit));
        }
        //TODO redirect to 404
        return new Response('not found');
    }

    public function RechercheAction(Request $request)
    {

        $nom = $request->get('nom');
        $em = $this->get('doctrine.orm.default_entity_manager');
        $searchResult = $em->getRepository('SanteBundle:produit')->searchByNom($nom);

        return $this->render('@Sante/Administration/Produit/recherche.html.twig', array('produits' =>$searchResult

        ));

    }

    public function findByCategorieAction($categorie, Request $request)
    {


        $cat = str_replace("%20", " ", $categorie);
        $em = $this->getDoctrine()->getManager();


        //filter
           if ($request->get('filter')  == "Filter"){
               $min = intval($request->get('min'));
               $max = intval($request->get('max'));

               $produit = $em->getRepository('SanteBundle:produit')->getByRangeAndCategory($min,$max,$cat);
           }


        //pagination
        else{
            $produit = $em->getRepository("SanteBundle:produit")->findByCategorie($cat);
        }
        $paginator = $this->get('knp_paginator');



        $minPrice = $em->getRepository('SanteBundle:produit')->getMinPriceParCategorie($cat);
        $maxPrice = $em->getRepository('SanteBundle:produit')->getMaxPriceParCategorie($cat);


        $pagination = $paginator->paginate(
            $produit, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            $request->query->getInt('limit', 6)/*page number*/
        );
        //pagination


        return $this->render('@Sante/Default/shop.html.twig', array('produit' => $pagination,
            'pagination' => $pagination,
            'min'=>$minPrice,
            'max'=>$maxPrice
        ));

    }

    public function findByCategorieAdminAction($categorie, Request $request)
    {
        $cat = str_replace("%20", " ", $categorie);
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository("SanteBundle:produit")->findByCategorie($cat);

        $produit = $em->getRepository("SanteBundle:produit")->findByCategorie($cat);
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $produit, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            $request->query->getInt('limit', 6)/*page number*/
        );


        return $this->render('@Sante/Administration/Produit/afficherTout.twig', array('produit' => $pagination,
            'pagination' => $pagination));
    }


    public function chartLineAction()
    {
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');
        $ob->title->text('Browser market shares at a specific website in 2010');
        $ob->plotOptions->pie(array(
            'allowPointSelect'  => true,
            'cursor'    => 'pointer',
            'dataLabels'    => array('enabled' => false),
            'showInLegend'  => true
        ));




        $liste = $this->getDoctrine()->getManager()->getRepository('SanteBundle:produit')->getProduitByCategorie();

        $data = array();



        foreach ($liste as $l){
            $a = array($l['categorie'],intval($l['NB']));
            array_push($data,$a);

        }




        $ob->series(array(array('type' => 'pie','name' => 'Répartition des produits selon la catégorie', 'data' => $data)));


        return $this->render('@Sante/Administration/stat.html.twig', array(
            'chart' => $ob,


        ));
    }


}
