<?php

namespace Blinkin\BiBundle\Utils\User;

use Blinkin\BiBundle\Entity\User;


class Hasher {

	static public function get(User $user) {
		return md5($user->getId() . $user->getEmail() . '%^&%&GHJG');
	}
	
	static public function check(User $user, $hash) {
		return $hash == self::get($user);
	}
}