<?php
include '../models/Employee.php';
include '../models/User.php';

class userController{
    public function addEmployee()
    {
        $emp = new Employee();
        $emp->$fname = $_POST['fname'];
        $emp->$lname = $_POST['lname'];
        $emp->$email = $_POST['email'];
        $emp->$mobile = $_POST['mobile'];
        $d = $_POST['year'] . '-'. $_POST['month'].'-'.$_POST['day'];
        $emp->hireDate = $d;

        $r = $emp->addEmp();
        if($r)
        {
            $e = $emp->findLastEmp();
            header('../viewemp.php?id='.$e->$id);
        }
        else
        echo '<script> window.alert("Error Password Or Username!"); </script>';

    }
    public function viewEmployee($id)
    {
        $emp = new Employee();
        $re = $emp->findEmp('id',$id);
        return $re;

        
    }
}
?>
