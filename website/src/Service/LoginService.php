<?php

namespace wnqjqj\Service;

interface LoginService{
	public function authenticate($username, $password);
}