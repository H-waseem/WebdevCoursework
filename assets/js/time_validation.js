/*
*    Title: IN1010 Lab 06 Sample Solution (form_validation.js)
*    Author: City University Of London
*    Date: 2021
*    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172
*    Usage: for validating user input for time 
*    Changes: several but core function is the same
*/

function $(id) {
    return document.getElementById(id);
}

var allowSubmit = false; // set boolean value to false

$("Time-submission").addEventListener("submit", (e) => {
    if (!allowSubmit) {
        e.preventDefault();
        checkTime(); // check for errors
    } else {
        // prevent the preventDefault function
    }
});

function checkTime() {
    
    const time = $("time").value.trim();

    // time validation
    var timeValid = false; // set boolean value to false

    if (time == "") { // if empty then replace error message text with "Please fill in this field"
        $("timeTag").style.display = "inline";
        $("timeTag").innerHTML = "Please fill in this field.";
    } else if (time.length != 4) { // if the length is not equal to 11, display error message
        $("timeTag").style.display = "inline";
        $("timeTag").innerHTML = "Must be 4 digits.";
    } else { 
        $("timeTag").style.display = "none"; // hide error message
        timeValid = true; // set boolean variable to true
    }

    function isValid() {
        // if all boolean variables are true, then set the main boolean variable "allowSubmit" to true
        if (timeValid) {
            allowSubmit = true;            
        }
    }

    isValid(); // run this function
}