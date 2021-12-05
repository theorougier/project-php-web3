<?php

namespace App\Controller;

use App\Model\PostManager;

class AdminController extends BaseController
{
  public function executeAdmin(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Admin",[], "Frontend/admin");
  }
  
  public function executePostComments(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Post comments",[], "Frontend/post-comments");
  }

  public function executeDeleteComments(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Delete comments",[], "Frontend/delete-comments");
  }

  public function executeWriteArticle(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Write Article",[], "Frontend/write-article");
  }

  public function executeDeleteArticle(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Delete Article",[], "Frontend/delete-article");
  }

  public function executeUserList(int $number = 5)
  {
    $manager = new PostManager();
    $index = $manager->getPosts($number);

    return $this->render("Userlist",[], "Frontend/userlist");
  }
}