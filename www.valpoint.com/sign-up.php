<?php
include_once('includes/dconn.php');
include('includes/nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/skeleton.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/normalize.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <title>Document</title>
</head>
<body>
    <h2>Sign up!</h2>
    <form class="signup" action="includes/sign-up.inc.php" method="get" accept-charset="utf-8">
        <input type="text" name="name" id="name" placeholder="name..." />
        <input type="text" name="surname" id="surname" placeholder="surname..." />
        <input type="text" name="username" id="username" placeholder="username..." />
        <input type="password" name="password" id="password" placeholder="password..." />
        <br>
        <input type="submit" name="submit" id="submit" value="submit" />
    </form>

    <h3>Already signed up?</h3>

    <p>
        Go to <a class="button" href="login.php">Login</a> page
    </p>
</body>
</html>