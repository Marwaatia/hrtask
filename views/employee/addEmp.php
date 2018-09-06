<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add New Employee</title>
    <script src="main.js"></script>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="./views/css/main.css" rel="stylesheet">
</head>
<body>
    <h2>Add New Employee</h2>
    <div class= "form-group frm" action="../controllers/userController.php" method="POST">
        <label for="exampleFormControlInput1">First Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="First Name" name ="fname">
        <label for="exampleFormControlInput1">Last Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Last Name"name ="lname">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name ="email">
        <label for="exampleFormControlInput1">Mobile</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex:011.." name ="mobile">
        <label for="exampleFormControlInput1">Hire Date</label>
        <div class="form-row">
            <div class="col">
                <input type="text" class="form-control" placeholder="day" name="day">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="month" name="month">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="year" name = "year">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </div>


</body>
</html>