<!doctype html>
<html lang="en">

<!--
*    Title: IN1010 Lab 06 Sample Solution (about.html)
*    Author: City University Of London
*    Date: 2021
*    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172
*    Usage: Used as a base template for own submission making several amendments to fit the coursework requirements
*    Changes: added the requirements highlighted in the brief such as having social media links in the footer and various changes to conform to the specification and brand
-->

<!--
*    Title: Modern Calendar Date Picker In Vanilla JavaScript
*    Author: MathiasWP
*    Date: 2020
*    Availability: https://www.cssscript.com/calendar-date-picke/
*    Usage: Used for calander functionallity
*    Changes: changed background and general changes to fit website
-->


<head>

    <!--Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Houzer - Booking</title>

    <!-- CSS sheets online -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600"> <!-- From City lab 6 example so not sure about official citings for this page -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> <!-- From lab 6 however original page on source is here: https://getbootstrap.com/docs/4.4/getting-started/introduction/ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> <!-- Again from City lab 6 example so not sure about official citings for this page -->
    
    <!-- Style sheets in files -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">

    <link rel="icon" type="image/png" href="assets/img/LogoMini.png"> <!--Adds a "Favicon" (Image top left of tab)-->

    <link rel="stylesheet" href="assets/css/CalendarPicker.style.css"> <!-- Calender: https://www.cssscript.com/calendar-date-picke/-->

    <style>

    #myCalendarWrapper {
        width: 40em;
        border: 1px dashed black;
        padding: 2em 4em;
        position: relative;
        font-size: 1rem;
        margin: 2rem auto 5rem;
        background-color: rgb(124, 249, 220);
    }
    </style>
    
</head>

<body>

    <!-- Menu -->
    <nav class="navbar navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Houzer</a>

            <!-- Burger menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Text menu (added logout and booking) -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="booking.php">Bookings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Description -->
    <div class="section-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h2>Book a appointment with the Houzer team</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 section-1-box wow fadeInUp">
                    <p class="medium-paragraph">
                        Use the calander below to select a date and time for a suitable appointment time for your meeting with Houzer estate agents and get a evaluation for your property
                    </p>
                </div>
            </div>
        </div>
    </div>


    <div id="myCalendarWrapper"></div> <!-- Creates the calander -->

    <!-- Appointment submission (used some refactored code from register.php) -->
    <div class="col-md-12 section-3-box wow fadeInLeft">
        <form method="post" action="appointmentSubmit.php" id="Time-submission">
            <div class="container">
                <fieldset class="fields" id="fieldset1">

                    <div class="input-type-1">
                        <!-- Enter time -->
                        <label for="time"><b>Time (in 24 hours example: 1400)</b></label>
                        <input type="number" placeholder="Enter Time" name="time" id="time" maxlength="4">
                        <small id="timeTag"></small> 
                    </div>

                    <div class="input-type-1">
                        <!-- Enter time -->
                        <label for="date"><b>Date (Select from calander)</b></label>
                        <input type="text" placeholder="Enter date" name="current-datestring" id="current-datestring" maxlength="20">
                    </div>

                    <div class="input-type-1">
                        <button type="submit" class="registerbtn" id="regBtn">Book appointment</button>
                    </div>

                </fieldset>
            </div>
        </form>
    </div>
        
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <p><em>Copyright &copy; 2020 Houzer</em></p>

                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow us on Social Media</h5>
                    <ul class="list-unstyled mb-0">
                        <div>
                            <a href="https://www.facebook.com/"> 
                                <img src="assets/img/Facebook-logo.png" alt="Facebook" style="width:40px;height:40px;">
                            </a>
                            <a href="https://twitter.com/">
                                <img src="assets/img/twitter-logo.png" alt="Twitter" style="width:40px;height:40px;"> 
                            </a>
                            <a href="https://www.instagram.com/">
                                <img src="assets/img/instagram-logo.png" alt="Instagram" style="width:40px;height:40px;">
                            </a>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">About our company</h5>
                    <p>
                        DISCLAIMER:
                        Houzer is a fictitious brand created solely for the purpose of the
                        assessment of IN1010 module at City, University of London, UK. All products and
                        people associated with Houzer are also fictitious. Any resemblance to real
                        brands, products, or people is purely coincidental. Information provided about the
                        product is also fictitious and should not be construed to be representative of actual
                        products on the market in a similar product category
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <!-- JQuerry scripts (template from lab 6) -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> <!-- Not sure about original source but i aqquired it from Lab 6 -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> <!-- Bootstrap 4.4: https://getbootstrap.com/docs/4.4/getting-started/introduction/-->
    
    <script src="assets/js/wow.min.js"></script><!-- Not sure about original source but i aqquired it from Lab 6 -->

    <script src="assets/js/scripts.js"></script>

    <script src="assets/js/CalendarPicker.js"></script> <!--https://www.cssscript.com/calendar-date-picke/-->
    <script src="assets/js/time_validation.js"></script> <!-- Own JS function with refactored code from form_validation.js -->



    <!-- Base from: https://www.cssscript.com/calendar-date-picke/
         but refactored and edited to conform site
-->
    <script> 
        const nextYear = new Date().getFullYear() + 1;
        const myCalender = new CalendarPicker('#myCalendarWrapper', {
            // If max < min or min > max then the only available day will be today.
            min: new Date(),
            max: new Date(nextYear, 10) // NOTE: new Date(nextYear, 10) is "Sun Nov 01 <nextYear>"
        });
    
        const currentToDateString = document.getElementById('current-datestring');
        currentToDateString.value = myCalender.value.toDateString();
    
        myCalender.onValueChange((currentValue) => {
            currentToDateString.value = currentValue.toDateString();
    
            console.log(`The current value of the calendar is: ${currentValue}`);
        });
    </script>
</body>
</html>