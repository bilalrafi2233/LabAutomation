<?php
include_once("config.php");
$username = $_POST["username"];
$userpassword = $_POST["userpassword"];
$departments = $_POST["departments"];
$roles = $_POST["roles"];

$sql = "INSERT INTO users(user_name,user_password,user_department,user_role) Values('{$username}','{$userpassword}','{$departments}','{$roles}')";

$result = mysqli_query($con,$sql) or die("query unsuuccesful");

header("Location: http://localhost/project/index.php");

mysqli_close($con);

?>