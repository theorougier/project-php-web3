<?php

namespace App\Controller;

use App\Model\PostManager;

class FrontController extends BaseController
{
  public function index(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Page d'accueil", "Frontend/home", []);
  }
}