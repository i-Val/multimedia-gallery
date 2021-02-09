<?php
#Import DB connection file
include('dconn.php');
#Get user input data
$name = $_GET['name'];
$surname = $_GET['surname'];
$username = $_GET['username'];
$password = $_GET['password'];


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

#MYSQLI query for username and password
$user_check = $conn -> query("SELECT * FROM users WHERE username = '$username' ");

$pass_check = $conn -> query("SELECT * FROM users WHERE password = '$password' ");
// Free result set
// $result -> free_result();

#Check if username or password is taken
if (($user_check-> num_rows) > 0) {
    echo "username taken!";
} else if (($pass_check->num_rows) > 0) {
    echo "password taken!";
} else {

    #insert new user into DB
    $sql = "INSERT INTO users (name, surname, username, password)
VALUES ('$name', '$surname', '$username','$password')";

    #Check for any error in query
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    #Close connection
    $conn->close();
}
?>