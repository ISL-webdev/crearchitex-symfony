<?php
namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class NewsRepository extends EntityRepository
{
    public function findAllSortedByDate()
    {
        return $this->createQueryBuilder('news')
            ->addOrderBy('news.date_news', 'DESC')
            ->getQuery()
            ->execute();
    }
}
