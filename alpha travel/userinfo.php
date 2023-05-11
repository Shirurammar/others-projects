<?php
$con = mysqli_connect('localhost','root');

if ($con) {
    echo "connection sucessful";
    
}
else {
  echo "no connection";
}

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Comments = $_POST['Comments'];

$sql ="INSERT INTO `allwebsite`.`userinfodata`( Name , Email ,  Phone, Comments) VALUES ('$Name','$Email','$Phone','$Comments');";

mysqli_query($con ,$sql);
header('location:home.php');
?>