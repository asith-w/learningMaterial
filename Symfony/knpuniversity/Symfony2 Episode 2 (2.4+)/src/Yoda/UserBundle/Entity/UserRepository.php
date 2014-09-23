<?php

namespace Yoda\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
    /**
     * Find User by Username or Email
     *
     * @param  string $username Username or Email
     * @return User|null
     */
    public function findOneByUsernameOrEmail($username)
    {
        // $dql = 'SELECT u FROM UserBundle:User u'
        return $this->createQueryBuilder('u')
            ->andWhere('u.username = :username OR u.email = :email')
            ->setParameter('username', $username)
            ->setParameter('email', $username)
            ->getQuery()
            ->getOneOrNullResult();
    }
}