<?php
#Include DB connection file
include('dconn.php');

#Get user input
$username = $_GET['username'];
$password = $_GET['password'];

#Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

#Query DB and asign the result to $result
if ($result = $conn -> query("SELECT * FROM users WHERE username = '$username' AND password = '$password' ")) {
    echo "Returned rows are: " . $result -> num_rows;
}

#If result returned empty alert!
if (($result-> num_rows) == 0) {
    echo "INTRUDER ALERT!";
} else {

    #Assign the value of session name to username
    $_SESSION['name'] = $username;
    echo("Welcome ".$_SESSION['name']."!");
}

#Close connection
$conn->close();



?>