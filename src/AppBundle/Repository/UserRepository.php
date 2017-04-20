<?php

namespace AppBundle\Repository;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    /**
     * @return User[]
     */
    public function findAllUsers(){
        return $this->createQueryBuilder('u')
            ->getQuery()
            ->getArrayResult();
    }

    public function findOneUser($id){
        return $this->createQueryBuilder('u')
            ->andWhere('u.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getArrayResult();
    }
}