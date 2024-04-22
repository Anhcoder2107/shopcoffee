<?php

require_once('config/config.php');
require_once('models/Model.php');

class StaffModel extends Model {
    private $staff;

    public function __construct()
    {
        //Create new object DB
        $this->staff = new DB;
    }
    
    //Difine Columns
    private $Columns = [
        'staff_id',
        'first_name',
        'phone_number',
        'address',
        'gender',
        'email',
        'birthday',
        'role'
    ];
    
    // $first_name, $last_name, $phone_number, $address, $gender, $email, $birthday, $role
    public function addStaff($data){

        if($this->validateDataKeys($data, $this->Columns)){
            $query = "INSERT INTO staff (". implode(", ", $this->Columns) .") VALUES (:". implode(", :", $this->Columns) .")";
            $addStaff = $this->staff->prepare($query);
    
            foreach ($data as $key => $value) {
                $addStaff->bindValue(":$key", $value);
            }
            $addStaff->execute();
            return $addStaff;
        }else{
            return "Dữ liệu không hợp lệ";
        }
    }

    // $first_name, $last_name, $phone_number, $address, $gender, $email, $birthday, $role
    public function updateStaff($id, $data) {

        if($this->validateDataKeys($data, $this->Columns)){
            $updateColumns = [];
            foreach ($data as $key => $value) {
                $updateColumns[] = "$key=:$key";
            }
            $query = "UPDATE staff SET " . implode(", ", $updateColumns) . " WHERE staff_id = $id";
            $updateStaff =  $this->staff->prepare($query);
            foreach ($data as $key => $value) {
                $updateStaff->bindValue(":$key", $value);
            }
            $updateStaff->execute();
            return $updateStaff;
        }else{
            return "Dữ liệu không hợp lệ";
        }
    }
}


