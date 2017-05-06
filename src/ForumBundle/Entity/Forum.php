<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="forum")
 */
class Forum {

	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string", length=250)
	 */
	protected $subject;

	/**
	 * @ORM\Column(type="text")
	 */
	protected $body;

//	/**
//	 * @ORM\Column(type="integer", nullable=true)
//	 */
//	protected $date;

	/**
	 * @ORM\ManyToOne(targetEntity="Blinkin\BiBundle\Entity\User", inversedBy="post")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	private $user;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set subject
	 *
	 * @param string $subject
	 *
	 * @return Forum
	 */
	public function setSubject($subject) {
		$this->subject = $subject;

		return $this;
	}

	/**
	 * Get subject
	 *
	 * @return string
	 */
	public function getSubject() {
		return $this->subject;
	}

	/**
	 * Set body
	 *
	 * @param string $body
	 *
	 * @return Forum
	 */
	public function setBody($body) {
		$this->body = $body;

		return $this;
	}

	/**
	 * Get body
	 *
	 * @return string
	 */
	public function getBody() {
		return $this->body;
	}

//	/**
//	 * Set date
//	 *
//	 * @param \integer $date
//	 *
//	 * @return Forum
//	 */
//	public function setDate(\integer $date) {
//		$this->date = $date;
//
//		return $this;
//	}
//
//	/**
//	 * Get date
//	 *
//	 * @return \integer
//	 */
//	public function getDate() {
//		return $this->date;
//	}

	/**
	 * Set user
	 *
	 * @param User $user
	 *
	 * @return History
	 */
	public function setUser($user) {
		$this->user = $user;
		return $this;
	}

	/**
	 * Get user
	 *
	 * @return User
	 */
	public function getUser() {
		return $this->user;
	}

}
