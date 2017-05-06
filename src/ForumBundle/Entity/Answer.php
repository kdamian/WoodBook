<?php

namespace ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Answer {

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="body", type="text")
	 */
	private $body;

	/**
	 * @ORM\ManyToOne(targetEntity="Blinkin\BiBundle\Entity\User", inversedBy="answers")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	private $user;

	/**
	 * @ORM\ManyToOne(targetEntity="Forum", inversedBy="answers")
	 * @ORM\JoinColumn(name="subject_id", referencedColumnName="id")
	 */
	private $subject;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set body
	 *
	 * @param string $body
	 *
	 * @return Answer
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

	/**
	 * Set user
	 *
	 * @param User $user
	 *
	 * @return Answer
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

	/**
	 * Set subject
	 *
	 * @param Forum $subject
	 *
	 * @return Answer
	 */
	public function setSubject($subject) {
		$this->subject = $subject;

		return $this;
	}

	/**
	 * Get subject
	 *
	 * @return Forum
	 */
	public function getSubject() {
		return $this->subject;
	}

}
