<?php
$sql = "INSERT INTO users(user_name,user_password,user_department,user_role) Values('{$username}','{$userpassword}','{$departments}','{$roles}')";

$result = mysqli_query($con,$sql) or die("query unsuuccesful");

header("Location:userread.php");

mysqli_close($con);

?>