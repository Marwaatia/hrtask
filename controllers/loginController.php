<?php 
include '../models/User.php';
        //login
    $username =$_POST['username'];
    $password =$_POST['password'];
    
    try{      
        $user = new User();
        $result=$user->login($username, $password);
        $count=0;
        if ($result){
            session_start();
            $count = 1;
            while($row= mysqli_fetch_array($result))
            {
                $id=$row['id'];
                $username=$row['name']; 
                $password=$row['password'];
                $email=$row['email'];

                $_SESSION['id']=$id;
                $_SESSION['name']=$username;
                $_SESSION['password']=$password;
                $_SESSION['email']=$email;
            }
                header("Location: ../views/employee/viewall.php");
                }
                if($count==0)
                    {
                    echo '<script> window.alert("Erorr Password Or Username!"); </script>';
                    }
            }
            catch(Exception $exc){
            
            echo $exc->getMessage();
            }




