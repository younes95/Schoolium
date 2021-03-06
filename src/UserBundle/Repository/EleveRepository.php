<?php
namespace UserBundle\Repository;

/**
 * EleveRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EleveRepository extends \Doctrine\ORM\EntityRepository
{
	 public function findById($idClasse)
    {
        $qb = $this->createQueryBuilder('m');
      
        $qb->where('m.classe = :id')
              ->setParameter('id', $idClasse);
        return $qb;
    } 
}
