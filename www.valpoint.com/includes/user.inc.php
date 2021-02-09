<?php
include('dconn.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="gframer">
        <?php
        #Check for connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $username = $_POST['username'];
            $sql = $conn -> query("SELECT * FROM users ORDER BY id");

            /*Get query result as associative array*/
            $result = mysqli_fetch_assoc($sql);

            /*If username matches with database*/
            if ($result['username'] = $username) {
                echo ' <div class = "gframe"> ';

                echo "<p>id: ".$result["id"]."</p>";
                echo "<p>name: ".$result["name"]."</p>";
                echo "<p>surname: ".$result["surname"]."</p>";
                echo "<p>username: ".$result["username"]."</p>";
                echo ' </div> ';
            }
        }
        ?>



    </div>
</body>
</html>