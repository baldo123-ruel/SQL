<?php  
include_once("connect/connection.php");
$con = connection();

if(isset($_POST['signin'])){
    $user = $_POST['user'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "INSERT INTO `user`(`username`, `email`, `password`) 
    VALUES ('$user','$email','$pass')";
    $con->query($sql) or die($con->error);

    echo "submitted";

}
?>