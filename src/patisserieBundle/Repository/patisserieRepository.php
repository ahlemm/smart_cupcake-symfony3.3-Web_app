<?php

namespace patisserieBundle\Repository;

/**
 * patisserieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class patisserieRepository extends \Doctrine\ORM\EntityRepository
{
    function findnomDQL($nomPatisserie)
    {
        $query=$this->getEntityManager()->createQuery
        ("select v from patisserieBundle:patisserie v WHERE v.nomPatisserie LIKE :nomPatisserie")->setParameter('nomPatisserie','%'.$nomPatisserie.'%');

        return $query->getResult();


    }
}