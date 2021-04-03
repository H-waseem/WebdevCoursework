<!--
*    Title: IN1010 Lab 08 Sample Solution (register.php)
*    Author: City University Of London
*    Date: 2021
*    Availability: https://moodle.city.ac.uk/mod/resource/view.php?id=1846832
*    Usage: Used for uploading date and time to database
*    Changes: several minor changes and refactoring to fit needs such as sanitising data
-->
<?php
    session_start();
	$conn = new mysqli('smcse-stuproj00.city.ac.uk', 'adbs860', '200008213', 'adbs860'); 
    if ($conn->connect_errno) {
        printf("Connection failed: %s\n", $conn->connect_error);
        exit();
    } else {
        $username = $conn->real_escape_string ($_SESSION['username']);
        $date = $conn->real_escape_string ($_POST['current-datestring']);
        $time = $conn->real_escape_string ($_POST['time']);
    
        // insert values from the input fields to the database
        mysqli_query($conn, "INSERT INTO Bookings (username, date, time)
        VALUES ('$username', '$date', '$time')")
            
        or die(mysqli_error($conn)); // cancel if there is an error

        // then redirect the user to the same page and log in (change to appropriate URL)
        echo "
<script language='javascript'>
                alert('Appointment successfull!')
                window.location.href = 'https://smcse.city.ac.uk/student/adbs860/booking.php';
                </script>";
    }
?>