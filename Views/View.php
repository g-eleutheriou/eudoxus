<?php

class View {

	function __construct() {
	}

	public function render($dirname = '', $filename = '', $data = '', $noInclude = false)
	{
		if (empty($filename)) {
			$filename = 'index';
		}

		if (is_array($data)) {
			extract($data);
		}

		if ($noInclude == true) {
			require 'Views/' . $dirname. '/' . $filename . '.php';	
		}
		else {
			require 'Views/header.php';
			require 'Views/' . $dirname. '/' . $filename . '.php';
			require 'Views/footer.php';	
		}
	}

}