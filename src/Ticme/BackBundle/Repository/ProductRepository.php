<?php

namespace Ticme\BackBundle\Repository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{
    public function byCategory($category){
        $qb = $this->createQueryBuilder('p')
            ->select('p')
            ->where('p.category = :category')
            ->orderBy('p.id')
            ->setParameter('category', $category);
        return $qb->getQuery()->getResult();
    }

}
