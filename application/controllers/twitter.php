<?php

class Twitter_Controller extends Base_Controller {

	public function action_index() {
		return View::make('home.search');
	}

	public function action_results() {
		$search_term = Input::get('search-term');
		$search_term = urlencode($search_term);
		
		$twitter = new Twitter();
		$twitter_search = $twitter->searchTweetsByTerm($search_term);

		//dd($twitter_search);
		$data = array(
			'search_term' => $search_term,
			'results' => $twitter_search->status
		);
		return View:: make('home.results', $data);
	}
	// MVC Part 2 HW (Models)
	public function action_add() {
		return View::make('addPerson');
	}
	public function action_add_Person() {
		$username = Input::get('username');
		$username = urlencode($username);

		$realname = Input::get('realname');
		$realname = urlencode($realname);

		$user = new User();
		$twitter = $user->add($username, $realname);

		$user->allUsers();

		$data = array (
			'username' => $user

		);

		return View::make('home.search', $data);
		//return View::make('addPersonSuccess');
	}
}

?>