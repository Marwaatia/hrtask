<?php
include_once  "../controllers/singletonDB.php";

class Employee
{
    public $id;
    public $fname;
    public $lname;
    public $email;
    public $mobile;
    public $hireDate;
    
    public function addEmp()
    {
        $sql = "INSERT INTO `employee`(`id`, `fname`, `lname`, `email`, `mobile`, `hireDate`) VALUES ($this->$id,$this->$fname,$this->$lname,$this->$email,$this->$mobile,$this->$hireDate)";
        $result = SingletonDB::execute($sql);
        return $result;
    }
    public function deleteEmp($emp)
    {
        $sql = "DELETE FROM `employee` WHERE id=$emp";
        $result = SingletonDB::execute($sql);
        return $result;
    }
    public function updateEmp($emp)
    {
        $sql = "UPDATE `employee` SET ,`fname`=$emp->$fname,`lname`=$emp->$lname,`email`=$emp->$email,`mobile`=$emp->$mobile,`hireDate`=$emp->$hireDate WHERE id = $emp->id";
        $result = SingletonDB::execute($sql);
        return $result;
    }
    public function findEmp($column,$emp)
    {
        $sql = "SELECT * FROM `employee` WHERE `$column` = $emp";
        $result = SingletonDB::execute($sql);
        return $result;
    }
    public function findLastEmp()
    {
        $sql = "SELECT * FROM `employee` WHERE id = (SELECT MAX(id) FROM `employee`)";
        $result = SingletonDB::execute($sql);
        return $result;
    }
    public function findallEmp()
    {
        $sql = "SELECT * FROM `employee`";
        $result = SingletonDB::execute($sql);
        return $result;
    }
}



?>