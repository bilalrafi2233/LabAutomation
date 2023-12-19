<?php
include_once("config.php");
$role = $_POST["role"];

$sql = "INSERT INTO roles(roles_name) Values('{$role}')";

$result = mysqli_query($con,$sql);

header("Location: http://localhost/project/index.php");

// mysqli_close($con);

?>