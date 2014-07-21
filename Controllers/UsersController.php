<?php

require_once 'Controller.php';
require_once 'Models/UserModel.php';
require_once 'Models/entities/User.php';

/**
 * Controller for users
 */
class UsersController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function login($username = '', $password = '') {
		require_once 'PageController.php';
		$page = new PageController;

		if (empty($username) && empty($password)) {
			$page -> redirect(HOME);
		}

		try {
			$user = UserModel::getUserByUsername($username);
			if (!is_null($user)) {
				if ($user -> password == $password) {
					$_SESSION['success_logged_in'] = true;
					$_SESSION['username'] = $user -> username;
					$_SESSION['id'] = $user -> id;
					$_SESSION['type'] = $user -> type;
					$page -> redirect(HOME);
				} else//wrong password
				{
					require_once 'PageController.php';
					$page = new PageController;
					$page -> error("Ο χρήστης που ζητήσατε δεν βρέθηκε ή δόθηκε λάθος password");
				}
			} else//display error: no such user exists
			{
				require_once 'PageController.php';
				$page = new PageController;
				$page -> error("Ο χρήστης που ζητήσατε δεν βρέθηκε ή δόθηκε λάθος password");
			}
		} catch(Exception $ex) {
			$page -> error($ex -> getMessage());
		}
	}

	public function logout($username = '') {
		$_SESSION['type'] = null;
		$_SESSION['username'] = null;
		$_SESSION['success_logged_in'] = null;

		require_once 'PageController.php';
		$page = new PageController;
		$page -> redirect(HOME);
	}

	public function index() {
		if (isset($_SESSION['role'])) {
			if ($_SESSION['role'] == 'MANAGER') {
				try {
					$this -> view -> render('users', 'index', UserModel::getUsers());
				} catch(Exception $ex) {
					require_once 'PageController.php';
					$page = new PageController;
					$page -> error($ex -> getMessage());
				}
			} else {
				require_once 'PageController.php';
				$page = new PageController;
				$page -> error();
			}
		}
	}

	public function adduser() {
		if (isset($_SESSION['role'])) {
			if ($_SESSION['role'] == 'MANAGER') {
				try {
					$this -> view -> render('users', 'adduser', UserModel::getUsers());
				} catch(Exception $ex) {
					require_once 'PageController.php';
					$page = new PageController;
					$page -> error($ex -> getMessage());
				}
			} else {
				require_once 'PageController.php';
				$page = new PageController;
				$page -> error();
			}
		}
	}

	public function edituser() {
		if (isset($_SESSION['role'])) {
			if ($_SESSION['role'] == 'MANAGER') {
				try {
					$this -> view -> render('users', 'edituser', UserModel::getUserById($_GET['id']));
				} catch(Exception $ex) {
					require_once 'PageController.php';
					$page = new PageController;
					$page -> error($ex -> getMessage());
				}
			} else {
				require_once 'PageController.php';
				$page = new PageController;
				$page -> error();
			}
		}
	}

	public function deleteuser() {
		if (isset($_SESSION['role'])) {
			if ($_SESSION['role'] == 'MANAGER') {
				try {
					$this -> view -> render('users', 'deleteuser', UserModel::getUserById($_GET['id']));
				} catch(Exception $ex) {
					require_once 'PageController.php';
					$page = new PageController;
					$page -> error($ex -> getMessage());
				}
			} else {
				require_once 'PageController.php';
				$page = new PageController;
				$page -> error();
			}
		}
	}

	public function create() {
		require_once 'PageController.php';
			$page = new PageController;
		try {
			$user = new User($_POST['name'], $_POST['surname'], $_POST['username'], $_POST['password'], $_POST['phone'], $_POST['type'], $_POST['email'], null);
			UserModel::create($user);
			$page->index();
			return false;
		} catch(Exception $ex) {
			$page -> error($ex -> getMessage());
			return false;
		}
	}

	public function update() {
		if (isset($_SESSION['role'])) {
			if ($_SESSION['role'] == 'MANAGER') {
				try {
					UserModel::update($user);
					UsersController::index();
				} catch(Exception $ex) {
					require_once 'PageController.php';
					$page = new PageController;
					$page -> error($ex -> getMessage());
				}
			} else {
				require_once 'PageController.php';
				$page = new PageController;
				$page -> error();
			}
		}
	}

	public function delete() {
		if (isset($_SESSION['role'])) {
			if ($_SESSION['role'] == 'MANAGER') {
				try {
					UserModel::delete($_POST['idUser']);
					UsersController::index();
				} catch(Exception $ex) {
					require_once 'PageController.php';
					$page = new PageController;
					$page -> error($ex -> getMessage());
				}
			} else {
				require_once 'PageController.php';
				$page = new PageController;
				$page -> error();
			}
		}
	}

}
