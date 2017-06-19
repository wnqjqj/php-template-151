<?php

namespace wnqjqj\Service;

class LoginMysqlService implements LoginService
{
	/**
	 * @param ihrname\SimpleTemplateEngine
	 */
	private $pdo;
	public function __construct(\PDO $pdo)
	{
		$this->pdo = $pdo;
	}
	public function authenticate($username, $password)
	{
		$stmt = $this->pdo ->prepare("SELECT *FROM User WHERE email=? AND password=?");
		$stmt ->bindValue(1, $username);
		$stmt ->bindValue(2, $password);
		$stmt ->execute();
		
		return $stmt->rowCount() == 1;
	}
}