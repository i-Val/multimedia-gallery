<?php
include('includes/dconn.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        html {
            background-color: #222;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="gframer">
        <?php
        $sql = $conn -> query("SELECT * FROM videos");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else if (mysqli_num_rows($sql) == 0) {
            echo "Gallery is empty!";
        } else {

            while ($result = mysqli_fetch_assoc($sql)) {
                echo '<div class="vid-frame">';
                echo '<video src="uploads/videos/'.$result["filename"].'" width="80%" height="80%"
        poster="highlight_still.jpg" controls >
    </video>';

                echo "<p>".$result["givenName"]."</p>";
                echo '</div>';
                echo '<br>';
                echo '<br>';
            }
        }
        ?>



    </div>
</body>
</html>