<?php

namespace Blinkin\BiBundle\Entity;

use Blinkin\BiBundle\Entity\Role;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Serializable;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * BiBundle\Entity\User
 *
 * @ORM\Entity(repositoryClass="UserRepository")
 * @ORM\Table(name="user")
 */
class User implements AdvancedUserInterface, Serializable {

	public function __construct() {
		$this->roles = new ArrayCollection();
		$this->friendsWithMe = new ArrayCollection();
		$this->myFriends = new ArrayCollection();
	}

	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="bigint")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

	/**
	 * @var string $username
	 *
	 * @ORM\Column(name="username", type="string", length=255, nullable=false)
	 */
	private $username;

	/**
	 * @var string $password
	 *
	 * @ORM\Column(name="password", type="string", length=255, nullable=false)
	 */
	private $password;

	/**
	 * @var string $email
	 *
	 * @ORM\Column(name="email", type="string", length=255, nullable=false)
	 */
	private $email;

	/**
	 * @var boolean $isActive
	 *
	 * @ORM\Column(name="is_active", type="boolean")
	 */
	private $isActive = false;

	/**
	 * @var string $name
	 *
	 * @ORM\Column(name="name", type="string", length=255, nullable=true)
	 */
	private $name;

	/**
	 * @var string $lname
	 *
	 * @ORM\Column(name="lname", type="string", length=255, nullable=true)
	 */
	private $lname;

	/**
	 * @var string $img
	 *
	 * @ORM\Column(name="img", type="string", length=255, nullable=true)
	 */
	private $img;

	/**
	 * @var string $tel
	 *
	 * @ORM\Column(name="tel", type="string", length=255, nullable=true)
	 */
	private $tel;

	/**
	 * @ORM\OneToMany(targetEntity="History", mappedBy="user")
	 */
	private $histories;

	/**
	 * @ORM\OneToMany(targetEntity="Blog", mappedBy="user")
	 */
	private $blogs;

	/**
	 * @ORM\OneToMany(targetEntity="Tab", mappedBy="user")
	 */
	private $tabs;

	/**
	 * @ORM\ManyToMany(targetEntity="Role", inversedBy="users")
	 * @ORM\JoinTable(name="role_user")
	 */
	private $roles;

	/**
	 * @ManyToMany(targetEntity="User", mappedBy="myFriends")
	 */
	private $friendsWithMe;

	/**
	 * @ManyToMany(targetEntity="User", inversedBy="friendsWithMe")
	 * @JoinTable(name="friends",
	 *      joinColumns={@JoinColumn(name="user_id", referencedColumnName="id")},
	 *      inverseJoinColumns={@JoinColumn(name="friend_user_id", referencedColumnName="id")}
	 *      )
	 * */
	private $myFriends;

	public function getUsername() {
		return $this->username;
	}

	public function eraseCredentials() {
		
	}

	public function getSalt() {
		return '';
	}

	public function addRole($role) {
		$this->roles->add($role);

		return $this;
	}

	public function getRoles() {
		$result = array();
		foreach ($this->roles as $role) {
			$result[] = $role->getName();
		}
		return $result;
	}

	public function getPassword() {
		return $this->password;
	}

	public function getEmail() {
		return $this->email;
	}

	public function isAccountNonExpired() {
		return true;
	}

	public function isAccountNonLocked() {
		return true;
	}

	public function isCredentialsNonExpired() {
		return true;
	}

	public function isEnabled() {
		return $this->isActive;
	}

	// serialize and unserialize must be updated - see below
	public function serialize() {
		return serialize(array(
			$this->id,
			$this->username,
			$this->password,
			$this->isActive
		));
	}

	public function unserialize($serialized) {
		list (
				$this->id,
				$this->username,
				$this->password,
				$this->isActive
				) = unserialize($serialized);
	}

	/**
	 * Get id
	 * 
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set id
	 * 
	 * @param integer $id
	 * @return User
	 */
	public function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Set username
	 * 
	 * @param string $username
	 * @return User
	 */
	public function setUsername($username) {
		$this->username = $username;

		return $this;
	}

	/**
	 * Get isActive
	 * 
	 * @return boolean
	 */
	public function getIsActive() {
		return $this->isActive;
	}

	/**
	 * Set isActive
	 * 
	 * @param boolean $isActive
	 * @return User
	 */
	public function setIsActive($isActive) {
		$this->isActive = $isActive;

		return $this;
	}

	/**
	 * Set email
	 * 
	 * @param string $email
	 * @return User
	 */
	public function setEmail($email) {
		$this->email = $email;

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
	 * Set name
	 * 
	 * @param string $name
	 * @return User
	 */
	public function setName($name) {
		$this->name = $name;

		return $this;
	}

	/**
	 * Get lname
	 * 
	 * @return string
	 */
	public function getLname() {
		return $this->lname;
	}

	/**
	 * Set lname
	 * 
	 * @param string $lname
	 * @return User
	 */
	public function setLname($lname) {
		$this->lname = $lname;

		return $this;
	}

	/**
	 * Get tel
	 * 
	 * @return string
	 */
	public function getTel() {
		return $this->tel;
	}

	/**
	 * Set tel
	 * 
	 * @param string $tel
	 * @return User
	 */
	public function setTel($tel) {
		$this->tel = $tel;

		return $this;
	}

	/**
	 * Get roles
	 * 
	 * @return Role
	 */
	public function getPermissions() {
		return $this->roles;
	}

	/**
	 * Set roles
	 * 
	 * @param ArrayCollection $premissions
	 * @return User
	 */
	public function setPermissions(ArrayCollection $premissions) {
		$this->roles = $premissions;

		return $this;
	}

	/**
	 * Set password
	 * 
	 * @var string $password
	 * @return User
	 */
	public function setPassword($password) {
		$this->password = $password;

		return $this;
	}

	/**
	 * Add history
	 *
	 * @param History $history
	 *
	 * @return User
	 */
	public function addHistory(History $history) {
		$this->histories[] = $history;

		return $this;
	}

	/**
	 * Remove history
	 *
	 * @param History $history
	 */
	public function removeHistory(History $history) {
		$this->histories->removeElement($history);
	}

	/**
	 * Get histories
	 *
	 * @return Collection
	 */
	public function getHistories() {
		return $this->histories;
	}

	/**
	 * Remove role
	 *
	 * @param Role $role
	 */
	public function removeRole(Role $role) {
		$this->roles->removeElement($role);
	}

	/**
	 * Add blog
	 *
	 * @param Blog $blog
	 *
	 * @return User
	 */
	public function addBlog(Blog $blog) {
		$this->blogs[] = $blog;

		return $this;
	}

	/**
	 * Remove blog
	 *
	 * @param Blog $blog
	 */
	public function removeBlog(Blog $blog) {
		$this->blogs->removeElement($blog);
	}

	/**
	 * Get blogs
	 *
	 * @return Collection
	 */
	public function getBlogs() {
		return $this->blogs;
	}

	/**
	 * Set img
	 *
	 * @param string $img
	 *
	 * @return User
	 */
	public function setImg($img) {
		$this->img = $img;

		return $this;
	}

	/**
	 * Get img
	 *
	 * @return string
	 */
	public function getImg() {
		return $this->img;
	}

	/**
	 * Add tab
	 *
	 * @param Tab $tab
	 *
	 * @return User
	 */
	public function addTab(Tab $tab) {
		$this->tabs[] = $tab;

		return $this;
	}

	/**
	 * Remove tab
	 *
	 * @param Tab $tab
	 */
	public function removeTab(Tab $tab) {
		$this->tabs->removeElement($tab);
	}

	/**
	 * Get tabs
	 *
	 * @return Collection
	 */
	public function getTabs() {
		return $this->tabs;
	}


    /**
     * Add friendWithMe
     *
     * @param \Blinkin\BiBundle\Entity\User $friendWithMe
     *
     * @return User
     */
    public function addFriendWithMe(\Blinkin\BiBundle\Entity\User $friendWithMe)
    {
        $this->friendsWithMe[] = $friendWithMe;

        return $this;
    }

    /**
     * Remove friendsWithMe
     *
     * @param \Blinkin\BiBundle\Entity\User $friendsWithMe
     */
    public function removeFriendsWithMe(\Blinkin\BiBundle\Entity\User $friendsWithMe)
    {
        $this->friendsWithMe->removeElement($friendsWithMe);
    }

    /**
     * Get friendsWithMe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFriendsWithMe()
    {
        return $this->friendsWithMe;
    }

    /**
     * Add myFriend
     *
     * @param \Blinkin\BiBundle\Entity\User $myFriend
     *
     * @return User
     */
    public function addMyFriend(\Blinkin\BiBundle\Entity\User $myFriend)
    {
        $this->myFriends[] = $myFriend;

        return $this;
    }

    /**
     * Remove myFriend
     *
     * @param \Blinkin\BiBundle\Entity\User $myFriend
     */
    public function removeMyFriend(\Blinkin\BiBundle\Entity\User $myFriend)
    {
        $this->myFriends->removeElement($myFriend);
    }

    /**
     * Get myFriends
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMyFriends()
    {
        return $this->myFriends;
    }
}
