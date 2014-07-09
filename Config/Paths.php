<?php


	$url = isset($_GET['url']) ? $_GET['url'] : null;
	define('HOME', '//' . $_SERVER['HTTP_HOST'] . substr($_SERVER['REQUEST_URI'], 0, strlen($_SERVER['REQUEST_URI']) - strlen($url) - 1 - strlen(strstr($_SERVER['REQUEST_URI'], '?'))));
	define('BOOTSTRAP', HOME . '/Bootstrap');
	define('STYLES', HOME . '/Views/css');
	define('USERS', HOME . '/users');
	define('PRODUCT', HOME . '/product');
	define('PROVIDER', HOME . '/provider');
	define('CUSTOMER', HOME . '/customer');
	define('SALEORDER', HOME . '/saleOrder');
	define('SUPPLYORDER', HOME . '/supplyOrder');

	define('BACK', '..');