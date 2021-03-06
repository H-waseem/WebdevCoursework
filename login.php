<!--
*    Title: IN1010 Lab 08 Sample Solution (login.php)
*    Author: City University Of London
*    Date: 2021
*    Availability: https://moodle.city.ac.uk/mod/resource/view.php?id=1846832
*    Usage: Used for login 
*    Changes: several minor changes to conform standards such as md5 hashing and making it fail safe (If statements were wrong in template)
-->

<?php

    if(!isset($_SESSION)) {
        session_start(); // start the session if it still does not exist
    }

   // connect to the database
	$conn = new mysqli('smcse-stuproj00.city.ac.uk', 'adbs860', '200008213', 'adbs860'); 
    if ($db->connect_errno) {
        printf("Connection failed: %s\n", $db->connect_error);
        exit();
    } else {
        // declare variables containing values from the input fields of the login form
        //the values come from the *name* attributes of the input fields
        $userLogin = $_POST['login_username'];
        $userPass = $_POST['login_pwd'];

        $hash_pass = md5($userPass);

        // select the username and password fields which match the data entered in the input fields
        $query = "SELECT username, password FROM UserDetails WHERE username = '$userLogin' AND password = '$hash_pass'";
        // execute the query
        $result = $conn->query($query);
        // store the results in $row variable
        $row = mysqli_fetch_row($result);

        // if $row returned no results from the query, then create a javascript alert
    
        // if there is a match then activate a custom session called 'username' which allows access to a new web page called bookings
        if ($userLogin == $row[0] && $hash_pass == $row[1]) {
            $_SESSION['username'] = $userLogin;
            //redirect to this page
            header("Location: booking.php");
        }
        else {
            echo "<script language='javascript'>
                alert('Please enter valid credentials.');
                window.location.href = 'https://smcse.city.ac.uk/student/adbs860/contact.php';
                </script>";
        }
    }
?>
