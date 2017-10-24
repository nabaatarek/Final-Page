<?php
require '../cont.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO blog (username, password) VALUES ('$username','$password')";
if (mysqli_query($con,$sql))
    header('location:../index.php');
else
    echo 'ERROR!!';
















