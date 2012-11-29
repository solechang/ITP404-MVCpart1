<?php


class User {
	public static function add($username, $realname) {

		$results = DB::table('users')
			->insert(array('username' => $username,
							'realname' => $realname
			));
		return $results;
	}
	public static function allUsers() {
		$results = DB::table('users')->get();
		return $results;
	}

}