<?php

namespace App\models;

use App\DatabaseController;

class Customer
{
    private $database;
    private $table = 'customers';
    public $customer;

    public function __construct()
    {
        $this->database = new DatabaseController();
    }

    public function find($id)
    {
        $query = "SELECT * FROM ".$this->table." WHERE customer_id = ".$id;
        $result = $this->database->query($query);
        return $result;
    }

    public function all()
    {
        $query = "SELECT * FROM ".$this->table;
        $result = $this->database->query($query);
        return $result;
    }
}