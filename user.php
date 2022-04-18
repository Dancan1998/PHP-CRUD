<?php
require "connect.php";

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $password = $_POST["password"];

  $sql = "INSERT INTO crud (name, email,mobile,password) VALUES ('$name','$email','$mobile','$password')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    header("location:display.php");
  } else {
    die(mysqli_error($con));
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud Operations</title>
  </head>
  <body>
    <div class="container my-5">

    <form method="post">
         <div class="form-group">
            <label for="exampleInputEmail1">Enter your name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter name" autocomplete="off">
            
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" autocomplete="off" aria-describedby="emailHelp" placeholder="Enter email">
            
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Enter your mobile</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="mobile" autocomplete="off" placeholder="Enter name">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" name="password" placeholder="Password">
        </div>
       
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

 
  </body>
</html>