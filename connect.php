<?php 
  $email = $_POST['email'];
  $conn = new mysqli('localhost:3306','root','root','sample_backend');
  if($conn -> connect_error){
    echo "conn -> connect_error";
    die("Connection Failed");
  }
  else{
    $stmt = $conn -> prepare("insert into `login`(`email`)values(?)");
    $execval = $stmt -> execute();
    echo = $execval;
    echo "submitted";
    $stmt -> close();
    $conn -> close();
  }
?>