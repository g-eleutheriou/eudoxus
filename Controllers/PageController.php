<?php

require_once 'Controller.php';

/**
 * Controller for users to redirect to the proper page.
 * Functions login and logout may probably be moved as
 * functions of the UserController class
 */
 class PageController extends Controller
 {
 	function __construct()
 	{
 		parent::__construct();
 	}

 	public function index()
 	{
 		$this->view->render('page');
 	}

 	//generic error
 	public function error($value='')
 	{
 		$this->view->msg = $value;
		$this->view->render('page', 'error', null, true);
 	}

 	public function error404($value='')
 	{
 		$this->view->msg = $value;
		$this->view->render('page', 'error404', null, true);
 	}

 	public function error501($value='')
 	{
 		$this->view->msg = $value;
		$this->view->render('page', 'error501', null, true);
 	}

 	public function errordb($value='')
 	{
 		$this->view->msg = $value;
		$this->view->render('page', 'errordb', null, true);
 	}

	public function error_accdenied()
	{
		$this->view->render('page', 'accdenied', null, true);
	}

 	public function redirect($url) //aka view
 	{
 		session_write_close();
 		header("Location:" . $url);
 		exit();
 	}
 }
