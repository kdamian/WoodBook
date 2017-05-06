<?php

namespace Blinkin\BiBundle\Utils\Blog;

use Blinkin\BiBundle\Entity\Blog;
use Blinkin\BiBundle\Entity\User;
use Doctrine\ORM\EntityManager;

/**
 * Description of Saver
 *
 * @author blinkin
 */
class Saver {

	/**
	 *
	 * @var EntityManager 
	 */
	private $em;

	/**
	 *
	 * @var User
	 */
	private $user;

	public function __construct(EntityManager $em) {
		$this->em = $em;
	}

	public function setUser(User $user) {
		$this->user = $user;
	}

	public function save(Blog $blog) {
		$blog->setUser($this->user);

		if ($blog->getId() === null) {
			$blog->setCreated(time());
		}
		$blog->setUpdated(time());
		$this->em->persist($blog);
		$this->em->flush();
	}

}
