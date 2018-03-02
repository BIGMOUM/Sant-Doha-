<?php

namespace SanteBundle\Controller;
use SanteBundle\Entity\Estabmishment;
use SanteBundle\Form\EstabmishmentForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;


class LocateController extends Controller
{
    function LocateAction(Request $request){
        $estab= new Estabmishment();

        $Form = $this->createForm(EstabmishmentForm::class, $estab);
        $Form->handleRequest($request);
        if ($Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $estab->UploadProfilePicture();
            $em->persist($estab);
            $em->flush();
            return $this->redirectToRoute('sante_locate');
        }
        return $this->render("SanteBundle:Default:locateInsert.html.twig",
            array('form'=>$Form->createView()));
    }

    function ListAction()
    {
        $em =$this->getDoctrine()->getManager();
        $estabmishment= $em->getRepository("SanteBundle:Estabmishment")->findAll();
        return $this->render('SanteBundle:Default:locate.html.twig', array("estabmishments"=>$estabmishment));
    }
    function RouteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $estab=$em->getRepository("SanteBundle:Estabmishment")->find($id);
        return $this->render("SanteBundle:Default:Route.html.twig",
            array("estab"=>$estab));
    }
    function LocateAdminAction()
    {
        $em =$this->getDoctrine()->getManager();
        $estabmishment= $em->getRepository("SanteBundle:Estabmishment")->findAll();
        return $this->render('SanteBundle:Administration:locate.html.twig', array("estabmishments"=>$estabmishment));
    }
    function AddLocateAdminAction(Request $request){
        $estab= new Estabmishment();

        $Form = $this->createForm(EstabmishmentForm::class, $estab);
        $Form->handleRequest($request);
        if ($Form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $estab->UploadProfilePicture();
            $em->persist($estab);
            $em->flush();
            return $this->redirectToRoute('sante_AdminLocate');
        }
        return $this->render("SanteBundle:Administration:Addlocate.html.twig",
            array('form'=>$Form->createView()));
    }
    function UpdateLocateAdminAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $estab=$em->getRepository("SanteBundle:Estabmishment")->find($id);
        $Form = $this->createForm(EstabmishmentForm::class, $estab);

        $Form->handleRequest($request);
        if ($Form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $estab->UploadProfilePicture();
            $em->persist($estab);
            $em->flush();
            return $this->redirectToRoute('sante_AdminLocate');
        }
        return $this->render("SanteBundle:Administration:Updatelocate.html.twig",
            array('form'=>$Form->createView(),"estab"=>$estab));
    }
    function LocateDetailAction($id)
    {

        $em=$this->getDoctrine()->getManager();
        $estab=$em->getRepository("SanteBundle:Estabmishment")->find($id);

        return $this->render("SanteBundle:Default:locateDetail.html.twig",
            array("estab"=>$estab ));
    }
    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function DeleteLocateAdminAction($id)
    {
        $em=$this->getDoctrine()->getManager();

        $estab=$em->getRepository("SanteBundle:Estabmishment")->find($id);
        $manager = $this->get('mgilet.notification');

        $guest= $estab->getUser()->getUsername();
        $nom= $estab->getNom();
        $address= $estab->getAdress();

        $notif = $manager->generateNotification('Problem with the establishment ' .$guest);
        $notif->setMessage('The establishment that you added named '.$nom.' and locate at '.$address.' was deleted by our admins.');
        $manager->addNotification($estab->getUser(), $notif);

        $em->remove($estab);
        $em->flush();

        return $this->redirectToRoute('sante_AdminLocate');
    }
    public function RechercheLocateAction(Request $request)
    {

        $nom = $request->get('NameSearch');
        $em = $this->get('doctrine.orm.default_entity_manager');
        $searchResult = $em->getRepository('SanteBundle:Estabmishment')->searchByNom($nom);

        return $this->render('@Sante/Default/rechercheLocate.html.twig', array('estabmishment' =>$searchResult

        ));

    }
}
