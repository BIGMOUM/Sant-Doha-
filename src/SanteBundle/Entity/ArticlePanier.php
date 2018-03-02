<?php

namespace SanteBundle\Entity;




class ArticlePanier extends produit
{

    private $qteCommande;



    public function getQteCommande(){
        return $this->qteCommande;
    }

    /**
     * @param mixed $qteCommande
     */
    public function setQteCommande($qteCommande)
    {
        $this->qteCommande = $qteCommande;
    }




}

