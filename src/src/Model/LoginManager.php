<?php 
namespace App\Model;

use App\Model\BaseManager;
use App\Model\PostManager;

class LoginManager extends BaseManager
{
public function login(){
    $con = new \PDO('mysql:host=db;dbname=mvc', 'root', 'example', [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    ]);

    $query = $con->prepare("SELECT * FROM registers WHERE username = ?");
        $query->execute([$_POST['username']]);
        $user = $query->fetch();
        if ($user && $user['password'] == $_POST['password'])
        {
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: /?p=');
        } else {
            echo "Identifiant invalid!";
        }
    }
    public function logout() {
        session_start();
        session_destroy();
        header('Location: /?p=');
    }

    public function signUp() {
        $con = new \PDO('mysql:host=db;dbname=mvc', 'root', 'example', [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        ]);
    
        $query = $con->prepare("INSERT INTO registers (username, email, password) VALUES (:username, :email, :password)");
        $query->bindParam(':username', $_POST['username']);
        $query->bindParam(':email', $_POST['email']);
        $query->bindParam(':password', $_POST['password']);
        $query->execute();
        if ($query->execute()) {
            header('Location: /?p=login');
        }
    }
}