<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use http\Exception\UnexpectedValueException;
use PHPUnit\Util\Exception;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Symfony\Component\Validator\Constraints\DateTime;
use function PHPUnit\Framework\throwException;
use function Symfony\Component\Translation\t;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    public function __construct(
        ManagerRegistry $registry,
        private UserPasswordHasherInterface $passwordHasher
    )
    {
        parent::__construct($registry, User::class);
    }

    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newHashedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    public function create($data): ?User
    {
        try {

            $now = time(); //current time stamp
            $date = new \DateTime();
            $date->setTimeStamp($now);

            $user = new User();
            $user->setEmail($data->email);
            if (isset($data->role)) {
                $user->setRoles($data->role);
            } else { $user->setRoles('user');}

            $password = $this->passwordHasher->hashPassword($user, $data->password);

            $user->setPassword($password);
            $user->setName($data->name);
            $user->setUpdatedAt($date);
            $user->setCreatedAt($date);
            $user->setSettings(['']);

            $emailInNotUse = 0 === $this->_em->getRepository('App\Entity\User')->count(['email' => $data->email]);
            if ($emailInNotUse){
                $this->_em->persist($user);
                $this->_em->flush();
                return $user;
            } else {
                return null;
            }
        }catch (\Exception){
            throw new Exception('Something went wrong');
        }


    }

    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}