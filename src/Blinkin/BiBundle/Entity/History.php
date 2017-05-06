<?php

namespace Blinkin\BiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Blinkin\BiBundle\Entity\HistoryRepository")
 */
class History {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="histories")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_from", type="integer", nullable=true)
     */
    private $dateFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_to", type="integer", nullable=true)
     */
    private $dateTo;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="body", type="text")
     */
    private $body;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

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

    /**
     * Set image
     *
     * @param string $image
     *
     * @return History
     */
    public function setImage($image) {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage() {
        return $this->image;
    }

    /**
     * Set dateFrom
     *
     * @param integer $dateFrom
     *
     * @return History
     */
    public function setDateFrom($dateFrom) {
        if (!is_numeric($dateFrom)) {
            $dateFrom = strtotime($dateFrom);
        }
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return integer
     */
    public function getDateFrom() {
        return date('d/m/Y', $this->dateFrom);
    }

    /**
     * Set dateTo
     *
     * @param integer $dateTo
     *
     * @return History
     */
    public function setDateTo($dateTo) {
        if (!is_numeric($dateTo)) {
            $dateTo = strtotime($dateTo);
        }
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return integer
     */
    public function getDateTo() {
        return date('d/m/Y', $this->dateTo);
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return History
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
     * @return History
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

}
