<?php
include("includes/nav.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Login to view our gallery</h4>
    <form class="login" action="includes/login.inc.php" method="get" accept-charset="utf-8">
        <input type="text" name="username" placeholder="username...">
        <input type="password" name="password" id="password" placeholder="password..." />
        <input type="submit" name="submit" id="submit" value="login" />
    </form>
</body>
</html>