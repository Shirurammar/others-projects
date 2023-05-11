<?php 

$con = mysqli_connect('localhost','root');
if ($con) {
    echo "connected";
}
else {
    echo "not connected";
}
 $email = $_POST['email'];
 $password = $_POST['password'];

$query ="INSERT INTO `insta`.`infos`(`email`, `password`) VALUES ('$email','$password');";
mysqli_query($con ,$query);

?>