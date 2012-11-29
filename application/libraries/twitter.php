<?php

require 'RemoteConnector.php';
class Twitter extends RemoteConnector {

	// private $_api_key;

	public function __construct() {
		// $this->_api_key = $api_key;
	}

	public function searchTweetsByTerm($searchTerm) {

		$searchTerm = urlencode($searchTerm);
		$url = "http://api.twitter.com/1/statuses/user_timeline.xml?screen_name=$searchTerm";
		$xmlString = file_get_contents($url);
		$simpleXML = simplexml_load_string($xmlString);
		return $simpleXML;
	}


}