<?php

$url = isset($_GET['url']) ? $_GET['url'] : null;
define('HOME', '//' . $_SERVER['HTTP_HOST'] . substr($_SERVER['REQUEST_URI'], 0, strlen($_SERVER['REQUEST_URI']) - strlen($url) - 1 - strlen(strstr($_SERVER['REQUEST_URI'], '?'))));
define('STYLES', HOME . '/Views/css');
define('JS', HOME . '/Views/js');
define('USERS', HOME . '/users');
define('PAGES', HOME . '/page');
define('BACK', '..');
?>