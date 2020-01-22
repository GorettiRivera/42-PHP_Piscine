<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
      <title>Rush shop</title>
      <link rel="stylesheet" type="text/css" href="css/main.css"/>
</head>
<body>
<nav>
    <p>Rush shop</p>
    <ul>
        <li><a href="header.php">Home</a></li>
        <li><a href="#">Menu</a>
            <ul>
                <li><a href="items.php">Shop</a></li>
            </ul>
        </li>
        <li><a href="#">Contact</a></li>
    </ul>
    <div class="loginform" >
        <form action="includes/login.php" method="post">
            <input type="text" name="uid" placeholder="Username/E-mail..">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php" id="signup_b">Signup</a>
        <form action="includes/logout.php" method="post">
            <button type="submit" name="logout-submit" id="logout_b">Logout</button>
        </form>
    </div>
</nav>
</body>
</html>