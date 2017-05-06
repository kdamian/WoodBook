<?php

namespace Blinkin\BiBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository implements UserProviderInterface {
	
	public function loadUserByUsername($username) {
		
		$user = $this->createQueryBuilder('u')
				->where('u.username = :username OR u.email = :email')
				->setParameter('username', $username)
				->setParameter('email', $username)
				->getQuery()
				->getOneOrNullResult();
		//dump($user);
		if (null === $user) {
			$message = sprintf(
					'Unable to find an active admin AppBundle:User object identified by "%s".', $username
			);
			throw new UsernameNotFoundException($message);
		}
		//echo '<pre>';	debug_print_backtrace (); die;
		//d($user); die;
		return $user;
	}

	public function refreshUser(UserInterface $user) {
		//dump($user); die();
		/*$class = get_class($user);
		if (!$this->supportsClass($class)) {
			throw new UnsupportedUserException(sprintf(
					'Instances of "%s" are not supported.', $class
			));
		}

		return $this->find($user->getId());*/
		return $this->loadUserByUsername($user->getUsername());
	}

	public function supportsClass($class) {
		return $this->getEntityName() === $class || is_subclass_of($class, $this->getEntityName());
	}
	
	protected function setOrder($field, $dir = false) {
		$dir = $dir ? $dir : 'asc';
		$sort = "{$this->alias}.{$field}";
		$this->qb->addOrderBy($sort, $dir);
	}

}
