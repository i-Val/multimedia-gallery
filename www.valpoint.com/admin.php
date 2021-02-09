<?php
include('includes/dconn.php');
include('includes/nav.php');
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
    <div class="dashboard">
        <!--Upload form-->
        <div class="panel upload">
            <form class="upload" enctype="multipart/form-data" action="includes/upload.inc.php" method="post" accept-charset="utf-8">
                <input type="file" name="file" id="video" placeholder="select file..." />

                <input type="text" name="givenName" id="givenName" placeholder="name your file..." />

                <input type="submit" name="submit" id="submit" value="upload" />
            </form>
        </div>

        <!--Delete form-->
        <div class="panel delete">

            <form action="includes/delete.inc.php" method="post" class="delete">
                <input type="text" name="file" placeholder="filename...">
                <input type="submit" name="delete" value="delete video">
                <input type="submit" name="delete-pic" value="delete image">
                <input type="submit" name="delete-audio" value="delete audio">
                <input type="submit" name="clear-videos" value="clear videos">
                <input type="submit" name="clear-audio" value="clear audio">
                <input type="submit" name="clear-images" value="clear images">
            </form>
        </div>

        <!--Users form-->
        <div class="panel view">
            <form action="includes/users.inc.php" method="post" class="viewUsers">

                <input type="submit" name="view_users" value="view users">
            </form>

            <form action="includes/user.inc.php" method="post" class="viewUsers">
                <input type="text" name="username" placeholder="username">
                <input type="submit" name="view_user" value="view user">
            </form>
        </div>
        <div class="panel "></div>
    </div>

</body>
</html>