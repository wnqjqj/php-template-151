<?php

namespace ihrname\Service;

interface LoginService{
	public function authenticate($username, $password);
}