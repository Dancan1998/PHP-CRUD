<?php
require "connect.php";

$id = $_GET["updateid"];
$sql = "SELECT * FROM crud WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row["name"];
$email = $row["email"];
$mobile = $row["mobile"];
$password = $row["password"];

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $password = $_POST["password"];

  $sql = "UPDATE crud SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
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
            <input type="text" class="form-control" id="exampleInputEmail1" value=<?php echo $name; ?> name="name" placeholder="Enter name" autocomplete="off">     
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" value=<?php echo $email; ?> name="email" autocomplete="off" aria-describedby="emailHelp" placeholder="Enter email">
            
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Enter your mobile</label>
            <input type="text" class="form-control" id="exampleInputEmail1" value=<?php echo $mobile; ?> name="mobile" autocomplete="off" placeholder="Enter name">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value=<?php echo $password; ?> autocomplete="off" name="password" placeholder="Password">
        </div>
       
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

 
  </body>
</html>