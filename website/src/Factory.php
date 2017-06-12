<?php

namespace ihrname;

class Factory
{
	public  function  getIndexController()
	{
		return new Controller\IndexController($tmpl);
	}
	
	public function getLoginController ()
	{
		return new Controller\LoginController($this->getTemplateEngine(), $this->getLoginService());   
	}
 public function getTemplateEngine()
 {
 return new SimpleTemplateEngine(__DIR__ . "/../templates/");
 }
 
 public function getPdo()
 {
 	return new \PDO (
 	
 	"mysql:host=mariadb;dbname=app;charset=utf8",
 	"root",
 	"my-secret-pw",
 	[\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
 	);
 }
 
 public function getLoginService ()
 {
 	$loginServer = new service\LoginMysqlService($this->getPdo());
 }
}
