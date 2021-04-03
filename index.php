<!doctype html>
<html lang="en">

<!--
*    Title: IN1010 Lab 06 Sample Solution (about.html)
*    Author: City University Of London
*    Date: 2021
*    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172
*    Usage: Used as a base template for own submission making several amendments to fit the coursework requirements
*    Changes: added the requirements highlighted in the brief such as having social media links in the footer and various changes to conform to the specification and brand

==================================================================================================

Image sources in assets/img/images folder: 
*    exterior-1: https://www.pexels.com/photo/blue-and-gray-concrete-house-with-attic-during-twilight-186077/
*    exterior-2: https://www.pexels.com/photo/architecture-clouds-daylight-driveway-259588/
*    
*    interior-1: https://www.pexels.com/photo/white-couch-near-black-mat-259962/
*    interior-2: https://www.pexels.com/photo/white-wooden-cupboards-2724749/
*    interior-3: https://www.pexels.com/photo/four-brown-wooden-chairs-2635038/

==================================================================================================

Image sources in assets/img/backgrounds folder:
*    Countertop: https://www.pexels.com/photo/spacious-kitchen-in-modern-apartment-6207945/
*    Houses: https://www.pexels.com/photo/photo-of-houses-under-starry-skies-977739/ 

=================================================================================================

Image sources assets/img :
*   Twitter-Logo: https://logodownload.org/wp-content/uploads/2014/09/twitter-logo-1.png
*   Instagram-Logo: https://www.freepnglogos.com/images/instagram-logo-png-2428.html
*   Facebook-Logo: https://1000logos.net/facebook-logo/

*   logo: Made using online photo editor so my own work
*   logo@2x: Made using online photo editor so my own work
*   LogoMini: Made using online photo editor so my own work

-->

<head>

    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Houzer - Home</title>

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

    <!-- Menu (Header for all pages)-->
    <nav class="navbar navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Houzer</a>

            <!-- Burger menu (template from Lab 6) -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Text menu (template from Lab 6) -->
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

    <!-- Top content (template from Lab 6) -->
    <div class="top-content">
        <div class="container">
            <!-- Title and description row -->
            <div class="row">
                <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <h1>Welcome to Houzer!</h1>
                    <div class="description">
                        <p>
                        Welcome to the Houzer Home page where you can look at some of our services and past work. We are delighted to have you visit our webpage where we will help you turn your hosue into a home. 
                        </p>
                    </div>
                </div>
            </div>
            <!-- End title and description row -->
        </div>
    </div>

    <!-- Description (template from Lab 6) -->
    <div class="section-1-container section-container">
        <div class="container">
            <div class="row">
                <div class="col section-1 section-description wow fadeIn">
                    <h2>Welcome to what we call "home"</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 section-1-box wow fadeInUp">
                    <p class="medium-paragraph">
                        Houzer has made turning houses into homes the most streamlined process it could be simply sign up and get started with booking consultations or start browsing some listings
                    </p>
                </div>
                <div class="col-md-12 section-1-box wow fadeInRight">
                    <img src="assets/img/images/exterior-1.jpg">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer (template from Lab 6) -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <p><em>Copyright &copy; 2020 Houzer</em></p>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Follow us on Social Media</h5>
                    <ul class="list-unstyled mb-0">
                        <!-- Added images and links for social media -->
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

</body>
</html>
