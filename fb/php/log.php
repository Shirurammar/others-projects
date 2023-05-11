<?php 
$con = mysqli_connect('localhost','root');
if ($con) {
    echo  "hi";
   
}
else {
  echo "<h1>hello</h1>";
}


 $name = $_POST['name'];
 $password = $_POST['password'];

 $sql = "INSERT INTO `fb`.`login`( `name`, `password`) VALUES ('$name','$password');";

 mysqli_query($con , $sql);
?>