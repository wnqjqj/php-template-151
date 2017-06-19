<?php

use wnqjqj\Service\LoginMysqlService;

error_reporting(E_ALL);
session_start();

require_once("../vendor/autoload.php");
$Factory = new wnqjqj\Factory();


switch($_SERVER["REQUEST_URI"]) {
	case "/":
		($Factory->getIndexController())->homepage();
		break;
	case "/login":
		$ctr = $Factory ->getLoginController();
		if($_SERVER['REQUEST_METHOD'] == "GET") {
			$ctr->showLogin();
		} else{
			$ctr->login($_POST);
		}
		break;
    case "/download":
			$ctr = new wnqjqj\Controller\DownloadController;
			if($_SERVER['REQUEST_METHOD'] == "") {
				$ctr->downloadFile($_POST);
			}
			break;
	default:	
		$matches = [];
		if(preg_match("|^/hello/(.+)$|", $_SERVER["REQUEST_URI"], $matches)) {
			(new wnqjqj\Controller\IndexController($tmpl))->greet($matches[1]);
			break;
		}
		echo "Not Found";
}

