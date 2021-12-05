<?php

namespace App\Model;

use PDOException;

abstract class BaseManager
{
    protected $db;

    public function __construct()
    {
        try {
            $this->db = new \PDO('mysql:host=db;dbname=mvc', 'root', 'example', [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
           throw new Exception('errorrrrrrr');
        }
    }
} 