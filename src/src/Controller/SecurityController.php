<?php

namespace App\Controller;

use App\Model\PostManager;

class SecurityController extends BaseController
{
  public function login(int $number = 5)
  {
    return $this->render('Login', 'Frontend/login', []);
  }

  public function logout(int $number = 5)
  {
    return $this->render('Logout', 'Frontend/logout', []);
  }

  public function authentification(int $number = 5)
  {
    return $this->render('Login', 'Frontend/authentification', []);
  }

  public function signUp(int $number = 5)
  {
    return $this->render('Signup', 'Frontend/signup', []);
  }

  public function createUser(int $number = 5)
  {
    return $this->render('CreateUser', 'Frontend/create-user', []);
  }
}