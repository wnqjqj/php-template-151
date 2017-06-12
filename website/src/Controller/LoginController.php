<?php

namespace wnqjqj\Controller;

use wnqjqj\SimpleTemplateEngine;
use mineichen\Service\LoginService;

class LoginController 
{
  /**
   * @var ihrname\SimpleTemplateEngine Template engines to render output
   */
  private $template;
  
  /**
   * @var LoginService
   */
  private $LoginService;
  
  /**
   * @param ihrname\SimpleTemplateEngine
   * @param
   */
  
  public function __construct(SimpleTemplateEngine $template, LoginService $pdo)
  {
     $this->template = $template;
     $this->LoginService = $LoginService;
  }

  public function showLogin() {
    echo $this->template->render("login.html.php");
  }
public function login (array $data)
{
	if (!array_key_exists("email", $data) OR !array_key_exists("password", $data)){
	$this->showLogin();
	return;
	}
	

if($this->loginService->authenticate($data["email"], $data["password"])){
	$_SESSION["email"] = $data["email"];
	header("Location: /");
} else {
	echo $this ->template ->render("login.html.php", ["email" => $data["email"]]);
}
}
}