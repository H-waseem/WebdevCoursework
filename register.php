<!--
*    Title: IN1010 Lab 08 Sample Solution (register.php)
*    Author: City University Of London
*    Date: 2021
*    Availability: https://moodle.city.ac.uk/mod/resource/view.php?id=1846832
*    Usage: Used for regitsering to website
*    Changes: several minor changes to conform standards such as md5 hashing and sanitising data
-->

<?php
	$conn = new mysqli('smcse-stuproj00.city.ac.uk', 'adbs860', '200008213', 'adbs860'); //Connect to the database
    if ($conn->connect_errno) {
        printf("Connection failed: %s\n", $conn->connect_error);
        exit();
    } else {
        $username = $conn->real_escape_string ($_POST['username']);
        $firstName = $conn->real_escape_string ($_POST['firstname']);
        $lastName = $conn->real_escape_string ($_POST['lastname']);
        $mobile = $conn->real_escape_string ($_POST['phone']);
        $email = $conn->real_escape_string ($_POST['email']);
        $password =$conn->real_escape_string ( $_POST['psw']);

        $hash_pass = md5($password); //Hash the password

        // query that selects the username field
        $query_username = "SELECT username FROM UserDetails WHERE username = '$username'";
        // execute the query
        $res_username = mysqli_query($conn, $query_username);

        // if the username entered by the user already exists, then create an alert and redirect to login page
        if (mysqli_num_rows($res_username) > 0) {
            echo "<script language='javascript'>
                    alert('Username already taken. Registration failed.');
                    window.location.href = 'https://smcse.city.ac.uk/student/adbs860/contact.php';
                    </script>";
        }
        // if the username does not exist then...
        else {
            // insert values from the input fields to the database
            mysqli_query($conn, "INSERT INTO UserDetails (username, firstname, lastname, phone, email, password)
            VALUES ('$username', '$firstName', '$lastName', '$mobile', '$email' , '$hash_pass')")
                
            or die(mysqli_error($conn)); // cancel if there is an error

            // then redirect the user to the same page to log in
            echo "<script language='javascript'>
                    alert('Registered successfully!')
                    window.location.href = 'https://smcse.city.ac.uk/student/adbs860/contact.php';
                    </script>";

        }
    }
?>
