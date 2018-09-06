<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee's Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../views/css/main.css" />
    

</head>
<body>
    <div class = "view">
    <?php
        include 'controllers/userController.php';
        //echo get_include_path();
        $id = $_GET['id'];
        $uC = new userController();
        $r = $uC->viewEmployee($id);
        echo'<p>Name: '.$r->$fname.' '.$r->$lname.'<br>Email: '.$r->$email.'<br>Mobile: '.$r->$mobile.'<br>Hire Date: '.$r->$hireDate;


    ?>
    </div>
</body>
</html>