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
            #assign sql statement to select from DB
            $sql = $conn -> query("SELECT * FROM users ORDER BY id");




            /*Get query result as associative array and execute the following code for every row in DB*/
            while ($result = mysqli_fetch_assoc($sql)) {
                echo ' <div class = "gframe"> ';

                echo "<p>id: ".$result["id"]."</p>";
                echo "<p>name: ".$result["name"]."</p>";
                echo "<p>surname: ".$result["surname"]."</p>";
                echo "<p>username: ".$result["username"]."</p>";
                echo ' </div> ';
                echo ' <br> ';
                echo ' <br> ';

            }
        }
        ?>



    </div>
</body>
</html>