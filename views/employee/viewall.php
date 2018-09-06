<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>All Employees</title>
    <script src="main.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <table>
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Hire Date</th>
        
        </tr>
        <?php 
            include '../../models/Employee.php';
            $emp = new Employee();
            $result = $emp->findallEmp();
            foreach($result as $r)
            {
                echo '<tr>';
                echo'<td><a href="../employee/viewemp.php?id='.$r['id'].'">'. $r['id'].'</a></td>';
                echo'<td>'. $r['fname'].'</td>';
                echo'<td>'. $r['lname'].'</td>';
                echo'<td>'. $r['email'].'</td>';
                echo'<td>'. $r['mobile'].'</td>';
                echo'<td>'. $r['hireDate'].'</td>';
                echo '</tr>';
            }
        ?>
        </table>
</body>
</html>