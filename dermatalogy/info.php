<?php
$co = mysqli_connect('localhost','root');

if ($co) {
    echo "connection sucessful";
    
}
else {
  echo "no connection";
}
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Comments = $_POST['Comments'];

$sqli ="INSERT INTO `darmo`.`skin`( `Name`, `Email`, `Phone`, `Comments` ) VALUES ('$Name','$Email','$Phone','$Comments')";

mysqli_query($con ,$sqli);
header('location:info.php ');
?>