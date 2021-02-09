<?php
#Check if submit button was clicked
if (isset($_POST["submit"])) {

    #Set session to an empty array thus clearing it
    session_start();
    $_SESSION = array();

    #redirect the user to the home page
    header("Location: ../index.php");

    #logout message
    $welcome = "You are now logged out!";

}
?>