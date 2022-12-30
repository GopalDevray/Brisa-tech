<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        // $username = stripslashes($_REQUEST['username']);
        // //escapes special characters in a string
        // $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phone    = stripslashes($_REQUEST['phone()']);
        $phone    = mysqli_real_escape_string($con, $phone);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $password = stripslashes($_REQUEST['cpassword']);
        $password = mysqli_real_escape_string($con, $cpassword);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (email, phone, password, cpassword, create_datetime)
                     VALUES ('$phone', '" . md5($password) . "','".md5($cpassword)."', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <!-- <input type="text" class="login-input" name="username" placeholder="Username" required /> -->

        <input type="text" class="login-input" name="email" placeholder="Email Address">
        <input type="number" class="login-input" name="phone" placeholder="Phone Number">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="password" class="login-input" name="cpassword" placeholder="Confirm Password">
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>