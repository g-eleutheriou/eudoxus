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
	
	public function about()
 	{
 		$this->view->render('page','about');
 	}
	
	public function contact()
 	{
 		$this->view->render('page','contact');
 	}
	
	public function register()
 	{
 		$this->view->render('page','register');
 	}
	
	public function login()
 	{
 		$this->view->render('page','login');
 	}
	
	public function search()
 	{
 		$this->view->render('page','search');
 	}
	
	public function aSearch()
 	{
 		$this->view->render('page','aSearch');
 	}
	
	public function searchResults()
 	{
 		$this->view->render('page','searchResults');
 	}
	
	public function user()
 	{
 		$this->view->render('page','user');
 	}
	
	public function userEdit()
 	{
 		$this->view->render('page','userEdit');
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
