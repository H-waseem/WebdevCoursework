<!doctype html>
<html lang="en">

<!--
*    Title: IN1010 Lab 06 Sample Solution (login.html)
*    Author: City University Of London
*    Date: 2021
*    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172
*    Usage: Used as a base template for own submission making several amendments to fit the coursework requirements
*    Changes: added the requirements highlighted in the brief such as having social media links in the footer and various changes to conform to the specification and brand

-->

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Houzer - Contact</title>

    <!-- CSS sheets online -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600"> <!-- From City lab 6 example so not sure about official citings for this page -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> <!-- From lab 6 however original page on source is here: https://getbootstrap.com/docs/4.4/getting-started/introduction/ -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> <!-- Again from City lab 6 example so not sure about official citings for this page -->
    
    <!-- Style sheets in files -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">

    <link rel="icon" type="image/png" href="assets/img/LogoMini.png"> <!--Comment: adds a "Favicon" (Image top left of tab)-->

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

            <!-- Text menu -->
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
                </ul>
            </div>

        </div>
    </nav>

    <!-- Section -->
    <section class="section-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h1 style="margin-top: 3em">Create an account</h1>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p class="medium paragraph">Please <a href="#login-form">log in</a> with your details to book an appointment.</p>
                    <p>If you have not yet created an account with us, please fill out the <a href="#register-form">registration</a> form instead.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <main class="section-2-container section-container section-container-gray-bg">
        <div class="container">
            <div class="row">
                <!-- Login form -->
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <form method="post" action="login.php" id="login-form">
                        <div class="container">
                            <fieldset class="fields" id="fieldset2">
                                <h2>Login</h2>
                                <p>Please fill in this form to log into your account:</p>
                                <hr>

                                <div class='input-type-1'>
                                    <label for="username"><b>Username</b></label>
                                    <input type='text' placeholder='Username' name='login_username' id='login_username'>
                                    <small id='loginUsernameTag'>Error Message</small>
                                </div>

                                <div class='input-type-1'>
                                    <label for="psw"><b>Password</b></label>
                                    <input type='password' placeholder='Password' name='login_pwd' id='login_pwd'>
                                    <small id='loginPasswordTag'>Error Message</small>
                                </div>

                                <div class='input-type-1'>
                                    <button type="submit" class="loginbtn" id="logBtn">Login</button>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>

                <!-- Registration form -->
                <div class="col-md-6 section-3-box wow fadeInLeft">
                    <form method="post" action="register.php" id="register-form">
                        <div class="container">
                            <fieldset class="fields" id="fieldset1">
                                <h2>Register</h2>
                                <p>Please fill in this form to create an account:</p>
                                <hr>

                                <div class="input-type-1">
                                    <!-- Enter username -->
                                    <label for="username"><b>Username</b></label>
                                    <input type="text" placeholder="Enter username" name="username" id="username" maxlength="20">
                                    <small id="usernameTag">Error Message</small> <!-- error message for username if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <!-- Enter first and last names -->
                                    <label for="firstname"><b>First name</b></label>
                                    <input type="text" placeholder="Enter your first name" name="firstname" maxlength="30" id="firstname">
                                    <small id="firstnameTag">Error Message</small> <!-- error message for first name if there is an error in the input -->
                                </div>
                                <div class="input-type-1">
                                    <label for="lastname"><b>Last name</b></label>
                                    <input type="text" placeholder="Enter your last name" name="lastname" maxlength="30" id="lastname">
                                    <small id="lastnameTag">Error Message</small> <!-- error message for last name if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <!-- Enter phone number -->
                                    <label for="phone"><b>Mobile phone number</b></label>
                                    <input type="number" placeholder="Enter your mobile phone number" name="phone" maxlength="11" id="phone">
                                    <small id="mobileTag">Error Message</small> <!-- error message for mobile phone number if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <!-- Enter email address -->
                                    <label for="email"><b>Email</b></label>
                                    <input type="text" placeholder="Enter email" name="email" id="email" maxlength="40">
                                    <small id="emailTag">Error Message</small> <!-- error message for email address if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <!-- Enter password -->
                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter password" name="psw" id="psw" maxlength="20">
                                    <small id="pwordTag">Error Message</small> <!-- error message for password if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <!-- Confirm password -->
                                    <label for="psw-repeat"><b>Repeat Password</b></label>
                                    <input type="password" placeholder="Repeat password" name="psw-repeat" id="psw-repeat" maxlength="20">
                                    <small id="confirmTag">Error Message</small> <!-- error message for confirmed password if there is an error in the input -->
                                </div>

                                <div class="input-type-1">
                                    <button type="submit" class="registerbtn" id="regBtn">Register</button>
                                </div>

                            </fieldset>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Getting in touch -->
    <div class="section-4-container section-container section-container-image-bg">
        <div class="container">
            <div class="row">
                <div class="col section-4 section-description wow fadeInLeftBig">
                    <h2>Contact us</h2>
                    <p>
                        <br>Contact hours: mon-fri 8:00-21:00 (Closed on weekends)
                        <br>E-mail: Support@Houzer.com
                        <br>Phone: +44 000000000 
                        <br>Address: 69 Standard road, London, ZZ7 4ZZ
                    </p>
                </div>
            </div>
        </div>
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
                    <h5 class="text-uppercase">DISCLAIMER:</h5>
                    <p>
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
    
    <script src="assets/js/form_validation.js"></script> <!-- validation for the form -->
</body></html>
