<?php
/**
 * Created by PhpStorm.
 * User: SKANDER
 * Date: 3/1/2018
 * Time: 1:19 PM
 */

namespace SanteBundle\Repository;


class userReposetery extends \Doctrine\ORM\EntityRepository
{
    public function searchByNomMembre($s)
    {
        $q = $this->getEntityManager()
            ->createQuery("SELECT p FROM SanteBundle:User m WHERE m.nom LIKE :n")->setParameter('n', '%' . $s . '%');

        return $q->getResult();

    }

}