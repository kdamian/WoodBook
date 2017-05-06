<?php

namespace Blinkin\BiBundle\Entity;

use Blinkin\BiBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tab
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Blinkin\BiBundle\Entity\TabRepository")
 */
class Tab {

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
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;

	/**
	 * @ORM\ManyToOne(targetEntity="Blinkin\BiBundle\Entity\User", inversedBy="tabs")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	private $user;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="src", type="string", length=255)
	 */
	private $src;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="created", type="integer")
	 */
	private $created;

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="updated", type="integer")
	 */
	private $updated;

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set name
	 *
	 * @param string $name
	 *
	 * @return Tab
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set body
	 *
	 * @param string $body
	 *
	 * @return Tab
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
	 * Set src
	 *
	 * @param string $src
	 *
	 * @return Tab
	 */
	public function setSrc($src) {
		$this->src = $src;

		return $this;
	}

	/**
	 * Get src
	 *
	 * @return string
	 */
	public function getSrc() {
		return $this->src;
	}

	/**
	 * Set created
	 *
	 * @param integer $created
	 *
	 * @return Tab
	 */
	public function setCreated($created) {
		$this->created = $created;

		return $this;
	}

	/**
	 * Get created
	 *
	 * @return integer
	 */
	public function getCreated() {
		return $this->created;
	}

	/**
	 * Set updated
	 *
	 * @param integer $updated
	 *
	 * @return Tab
	 */
	public function setUpdated($updated) {
		$this->updated = $updated;

		return $this;
	}

	/**
	 * Get updated
	 *
	 * @return integer
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Set user
	 *
	 * @param \Blinkin\BiBundle\Entity\User $user
	 *
	 * @return Tab
	 */
	public function setUser(\Blinkin\BiBundle\Entity\User $user = null) {
		$this->user = $user;

		return $this;
	}

	/**
	 * Get user
	 *
	 * @return \Blinkin\BiBundle\Entity\User
	 */
	public function getUser() {
		return $this->user;
	}

}
