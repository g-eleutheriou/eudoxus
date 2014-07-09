<?php

require_once 'Views/View.php';

class Controller {

	function __construct() {
		if (session_id() == '') {
			session_start();
		}
		
		$this->view = new View();
	}

}