<?php
include_once("config.php");
$department_name = $_POST["department_name"];

$sql = "INSERT INTO departments(department_name) Values('{$department_name}')";

$result = mysqli_query($con,$sql);

header("Location: http:departmentread.php");

// mysqli_close($con);

?>