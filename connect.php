<?php

$servername = "localhost";
$user = "root";
$password = "";
$dbname = "crudoperations";

$con = new mysqli($servername, $user, $password, $dbname);

// if ($con) {
//   echo "Connection successful";
// } else {
//   die(mysqli_error($con));
// }

if (!$con) {
  die(mysqli_error($con));
}

?>
