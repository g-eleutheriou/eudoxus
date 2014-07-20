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
	
	public function links()
 	{
 		$this->view->render('page','links');
 	}

	public function historyForm1()
 	{
 		$this->view->render('page','historyForm1');
 	}
	
	public function historyForm2()
 	{
 		$this->view->render('page','historyForm2');
 	}
	
	public function bookSelect()
 	{
 		$this->view->render('page','bookSelect');
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
		$this->view->render('page', 'error', null, true);
 	}

 	public function error501($value='')
 	{
 		$this->view->msg = $value;
		$this->view->render('page', 'error', null, true);
 	}

 	public function errordb($value='')
 	{
 		$this->view->msg = $value;
		$this->view->render('page', 'error', null, true);
 	}

	public function error_accdenied()
	{
		$this->view->render('page', 'error', null, true);
	}

 	public function redirect($url) //aka view
 	{
 		session_write_close();
 		header("Location:" . $url);
 		exit();
 	}
 }
