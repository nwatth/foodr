<?php

class Order_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data = self::$db->select('SELECT * FROM `foods`');
        shuffle($data);
    
        return array_slice($data, 0, 3);
    }
}