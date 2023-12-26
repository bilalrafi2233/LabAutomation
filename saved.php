<?php
session_start();

include_once("config.php");
$user = $_POST['user'];
$password = $_POST['password'];

$query  = "SELECT * FROM users where user_name='".$user."' and user_password='".$password."'";

$result = mysqli_query($con,$query);

$row = mysqli_fetch_assoc($result);
if(isset($row)){    
    $_SESSION['user'] = $row;
    header('Location: index.php');  
}else{
    header('Location:login.php');
    $_SESSION['error'] = "Invalid User Name or password";
};

?>