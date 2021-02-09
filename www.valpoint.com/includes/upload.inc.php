<?php
/*Import DB connection file*/
include('dconn.php');

/*User input which includes the file and filename*/
$vid = $_FILES["file"];
$tname = $_FILES["file"]["tmp_name"];
$gname = $_POST['givenName'];

/*Actual file name including extention*/
$fname = basename($_FILES["file"]["name"]);


/*Getting file extension in lowercase*/
$ext = explode(".", $fname);
$file_ext = strtolower(end($ext));

/*Permitted file formats*/
$allowed = array("png", "jpg", "jpeg", "mp4", "mp3", "m4a");

/*Check if file format is permitted*/
if (!in_array($file_ext, $allowed)) {
    echo "file type not allowed".$file_ext."" .$fname;
    exit();
    /*Check if file is audio*/
} else if (($file_ext == "mp3") || ($file_ext == "m4a")) {
    #set file type to music
    $file_type = "music";
    #set upload directory
    $dir = "../uploads/musics/";

    #Check if file is video
} else if ($file_ext == "mp4") {
    #Set file type
    $file_type = "video";
    #set file directory
    $dir = "../uploads/videos/";

    #else file is music
} else {
    $file_type = "image";
    $dir = "../uploads/images/";
}

/*Set upload path or target file based on the predetermined file type*/
$target_file = $dir . basename($_FILES["file"]["name"]);





/*MYSQLI query for inserting into DB. Based on file type, file parameters will be sorted into different databases and files into directories*/
if ($file_type == "image") {
    $sql = "INSERT INTO images (filename, givenName)
VALUES ('$fname', '$gname')";
} else if ($file_type == "video") {

    $sql = "INSERT INTO videos (filename, givenName)
VALUES ('$fname', '$gname')";
    $dir = "../uploads/videos/";
} else if ($file_type == "music") {

    $sql = "INSERT INTO musics (filename, givenName)
VALUES ('$fname', '$gname')";

}

#Check if file parameters were inserted in DB successfully
if ($conn->query($sql) === TRUE) {

    /*Upload file to directory*/
    move_uploaded_file($tname, $target_file);

    echo ($target_file);
    echo "New record created successfully";
    echo ($file_ext);
    echo ($file_type);
    echo "<br>";
    echo "file type is ".$file_ext."" .$fname;

    #If failed, give an error
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
#close connection
$conn->close();


?>