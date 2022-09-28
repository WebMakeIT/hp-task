<?php

namespace App;

use Medoo\Medoo;
use PDO;

class DatabaseController
{
    private $database;
    public $query;

    public function __construct()
    {
        $this->database = new Medoo([
            'type' => 'mysql',
            'host' => 'task_db',
            'database_name' => env('MYSQL_DATABASE'),
            'username' => env('MYSQL_USER'),
            'password' => env('MYSQL_PASSWORD'),
            'option' => [PDO::FETCH_ASSOC],
        ]);
    }

    public function query($query)
    {
        return $this->database->query($query)->fetchAll();
    }
}