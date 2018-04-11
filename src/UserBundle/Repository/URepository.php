<?php

namespace UserBundle\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class URepository extends EntityRepository
{
    public function findR($p){
        $query=$this->getEntityManager()->createQuery(
            "select m from MyAppUserBundle:User m WHERE m.roles like :p"
        )->setParameter('p','%'.$p.'%');
        return $query->getResult();
    }
}