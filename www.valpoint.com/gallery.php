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
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <h2>Image Gallery</h2>
    <p>
        Welcome to our image gallery. Check out our <a href="video-gallery.php">videos</a> and <a href="music-gallery.php">audios</a>
    </p>
    <div class="gframer">
        <?php
        $sql = $conn -> query("SELECT * FROM images");
        #Check connection error
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else if (mysqli_num_rows($sql) == 0) {
            echo "Gallery is empty!";
        } else {
            #Assign sql query

            while ($result = mysqli_fetch_assoc($sql)) {
                echo '<div class="gframe">';
                echo '<img class = "gimage" src ="uploads/images/'.$result['filename'].'">';

                echo "<p>".$result["givenName"]."</p>";
                echo '</div>';
            }
        }
        ?>



    </div>
</body>
</html>