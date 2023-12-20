<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="dist/css/f-style.css">
    
</head>
<body>   
<header>
</header>
    
    <form action="saved.php" method="POST">
        <h1 style="color:#45f3ff; margin-left:-60px; margin-bottom:20px; font-style:italic; font-weight: 900px;">Lab Automation Inventory system</h1>
    <div class="box">
        <div class="form">
            <h2>Log In</h2>
            <?php
                // if(isset($_SESSION['user'])){
                //     echo $_SESSION['user'] ;
                // };
            ?>
            <div class="inputBox">
                <input type="text" required="required" name="user">
                <span>User Name</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" required="required" name="password">
                <span>password</span>
                <i></i>
            </div>
            <div class="links">
                
                <a href="#">Forget password</a>
                <a href="#">signup</a>
            </div>
            <input type="submit" value="login" id="" name="submit">
        </div>
    </div>
</form>
</body>
</html>