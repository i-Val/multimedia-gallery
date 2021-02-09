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

    <h2>Welcome Admin!</h2>
    <p>
        If you're seeing this, you have been granted admin permissions.
    </p>
    <form class="upload" enctype="multipart/form-data" action="includes/upload.inc.php" method="post" accept-charset="utf-8">
        <input type="file" name="file" id="video" placeholder="select file..." />

        <input type="text" name="givenName" id="givenName" placeholder="name your file..." />

        <input type="submit" name="submit" id="submit" value="upload" />
    </form>
</body>
</html>