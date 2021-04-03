<!--
*    Title: IN1010 Lab 08 Sample Solution (logput.php)
*    Author: City University Of London
*    Date: 2021
*    Availability: https://moodle.city.ac.uk/mod/resource/view.php?id=1846832
*    Usage: Used for logout 
*    Changes: minor to no changes made
-->

<?php
    session_start();
    unset($_SESSION['username']); // disable the username session

    // end the session
    session_destroy();
    header("Location: index.php"); // redirect back to the form
?>