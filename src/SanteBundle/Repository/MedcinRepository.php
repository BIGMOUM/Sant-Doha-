<?php
/**
 * Created by PhpStorm.
 * User: MBM info
 * Date: 27/02/2018
 * Time: 18:34
 */

namespace SanteBundle\Repository;
use Doctrine\ORM\EntityRepository;


class MedcinRepository extends EntityRepository
{
    public function findMedcinsQB(){
        $query=$this->createQueryBuilder('s');
        $query->where("s.roles=:role")->setParameter('role','a:1:{i:0;s:11:"ROLE_DOCTOR";}');

        return $query->getQuery()->getResult();
    }
}