<?php
#Import DB connection
include("dconn.php");

#If "clear" button is clicked
if (isset($_POST['clear-videos'])) {
    $filename = "";
    $sql = "DELETE FROM videos WHERE givenName='$filename' OR 1=1";

    if ($conn -> query($sql)) {
        echo "database cleared!";
        exit();
    } else {
        echo $conn -> error;
    }
}
if (isset($_POST['clear-audio'])) {
    $filename = "";
    $sql = "DELETE FROM musics WHERE givenName='$filename' OR 1=1";

    if ($conn -> query($sql)) {
        echo "database cleared!";
    } else {
        echo $conn -> error;
    }
    exit();
}
if (isset($_POST['clear-images'])) {
    $filename = "";
    $sql = "DELETE FROM images WHERE givenName='$filename' OR 1=1";

    if ($conn -> query($sql)) {
        echo "database cleared!";
    } else {
        echo $conn -> error;
    }
    exit();
}


/*There are three buttons in the delete form. These buttons have names, delete-pic, delete-audio and delete-video*/

/*Set the filename & sql based on button clicked*/
if (isset($_POST['delete-pic'])) {
    $filename = $_POST['file'];

    $sql = "DELETE  FROM images WHERE givenName ='$filename'";
} else if (isset($_POST['delete-audio'])) {
    $filename = $_POST['file'];

    $sql = "DELETE  FROM musics WHERE givenName ='$filename'";
} else if (isset($_POST['delete'])) {
    $filename = $_POST['file'];

    $sql = "DELETE  FROM videos WHERE givenName ='$filename'";
}

#Execute query
if ($conn->query($sql)) {
    echo "record deleted!";
} else {
    echo "didn't work! <br>";
    echo $conn->error;
}


?>