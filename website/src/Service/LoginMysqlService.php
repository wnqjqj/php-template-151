<?php

namespace ihrname\Service;

class LoginMysqlService implements LoginService
{
	/**
	 * @param ihrname\SimpleTemplateEngine
	 */
	private $pdo;
	public function __construct(SimpleTemplateEngine $template, \PDO $pdo)
	{
		$this->template = $template;
		$this->pdo = $pdo;
	}
	public function authenticate($username, $password)
	{
		$stmt = $this->pdo ->prepare("SELECT *FROM user WHERE email=? AND password=?");
		$stmt ->bindValue(1, $data["email"]);
		$stmt ->bindValue(2, $data["password"]);
		$stmt ->execute();
		
		return $stmt->rowCount() == 1;
	}
}