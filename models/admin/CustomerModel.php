<?php

require_once('config/config.php');
require_once('models/Model.php');

class CustomerModel extends Model{

    private $customer;

    public function __construct(){
        $this->customer = new DB;
    }

    private $Columns = [
        'frist_name',
        'last_name',
        'phone_number',
        'address',
        'gender',
        'email'
    ];
    
}