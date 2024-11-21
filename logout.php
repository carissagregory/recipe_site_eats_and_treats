<?php
    //when the user clicks the logOut button the session is unset and destroyed then they are sent to the home page
    //disconnect from the database 
    //update the copyright year to display using php not js

    //destroy the session
    session_unset();    //remove session variables
    session_destroy();  //remove the session

    //disconnect from the database
    $conn = null;
    $stmt = null;

    //redirect to the home page/login page
    header("Location: ../login.php");
?>