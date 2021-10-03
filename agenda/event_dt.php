<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agenda</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
     <link rel="icon " href="images/logo.png">
      <link rel="stylesheet" href="css/footer.css">
       <link rel="stylesheet" href="css/finalise.css">
           <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/calendar.css">
</head>
<body class="contact-page">
<header class="site-header">
    <div class="header-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-10 col-lg-2 order-lg-1">
                    <div class="site-branding">
                        <div class="site-title">
                            <a href="home.php"><img src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-title -->
                    </div><!-- .site-branding -->
                </div><!-- .col -->

                <div class="col-2 col-lg-7 order-3 order-lg-2">
                    <nav class="site-navigation">
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->

                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="about1.php">About us</a></li>
                            <li><a href="events.php">Events</a></li>
                            <li><a href="events-news.php">News</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav><!-- .site-navigation -->
                </div><!-- .col -->

                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <a class="btn gradient-bg" href="#">Join Us</a>
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header contact-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Finalise</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->
<div class="homepage-next-events">
    <div class="container">
        <div class="row">
            <div class="next-events-section-header">
                <h2 class="entry-title" style="    margin-left: 400px;">Event Details</h2>

            </div>
        </div>
    </div>
</div>


<div class="container-text1">
<h3><i class="fa fa-angle-double-right"></i> &nbsp;Which Services Would You like to Include in your event:</h3></div>
<div class="container">
    <div class ="row">
        <div class="col-md-4">
            <div class="spacing">
        <label class="container">Venues
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
        </label>
<label class="container">Catering
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Photography & Video
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Invitation Cards
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Dress code 
  <input type="checkbox" >
  <span class="checkmark"></span>
</label>

<label class="container">Transportation
  <input type="checkbox">
  <span class="checkmark"></span>
</label>
            </div></div>
            <div class="spacing">
             <div class="col-md-4">
 <label class="container">Decoration
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Gifts
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Choreography
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">DJ
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

<label class="container">Astrologers
  <input type="checkbox">
  <span class="checkmark"></span>
</label>

    <label class="container">Entertainment
  <input type="checkbox">
  <span class="checkmark"></span>
    </label>
            </div>
        </div>

             <div class="col-md-2">
                <div class="imgt">
             <img src="images/91.jpg" height="150px" width="200px">
             <img src="images/93.jpg" height="150px" width="200px">
         </div>
     </div>


 <div class="col-md-2">
  <div class="imgt1"> <img src="images/92.jpg" height="150px" width="200px">
    <img src="images/94.jpg" height="150px" width="200px">
</div>
 </div>
</div>
</div>

    <form id="booking-form" class="booking-form" method="POST">
                <div class="form-group">
                    <div class="form-destination">
                        <label for="destination" style="font-size: 18px; font-weight: bold;">Destination</label>
                        <input type="text" id="destination" name="destination" placeholder="EG. DELHI" style="border:outset 2px grey;"/>
                    </div>
                    <div class="form-date-from form-icon">
                        <label for="date_from" style="font-size: 18px; font-weight: bold;">From</label>
                        <input type="text" id="date_from" class="date_from" placeholder="Pick a date" style="border:outset 2px grey;"/>
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>
                    <div class="form-date-to form-icon">
                        <label for="date_to" style="font-size: 18px; font-weight: bold;">To</label>
                        <input type="text" id="date_to" class="date_to" placeholder="Pick a date" style="border:outset 2px grey;" />
                        <!-- <span class="icon"><i class="zmdi zmdi-calendar-alt"></i></span> -->
                    </div>
                    <div class="form-quantity">
                        <label for="quantity" style="font-size: 18px; font-weight: bold;">Guests</label>
                        <span class="modify-qty plus" onClick="Tang()"><i class="zmdi zmdi-chevron-up"></i></span>
                        <input type="number" name="quantity" id="quantity" value="0" min="0" class="nput-text qty text" style="border:outset 2px grey;">
                        <span class="modify-qty minus" onClick="Giam()"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                   
                <div class="col-lg-3 d-none d-lg-block order-2 order-lg-3">
                    <div class="buy-tickets">
                        <input class="btn gradient-bg"  id="registered" name="create" value="Book Now">
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div>
            </form>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script type="text/javascript">
                $(function(){
                    $('#registered').click(function(){
                        swal.fire({
                            'title':'Booking Successsfull',
                            'text': 'You have successfully booked your event',
                            'type': 'success' 
                        })
                    });

                });
                </script>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
            <script src="js/main.js"></script>
<!--footer-->
<footer id="footer" class="footer-1" style="background-color: black; color:white;">
<div class="main-footer widgets-dark typo-light">
<div class="container">
<div class="row">
  
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h5 class="widget-title" style="margin-top:10px; color:purple; ">Agenda<span></span></h5>
<p style="font-size: 16px; ">Agenda company offer professional event planning services that include event management, event coordination and venue sourcing. </p>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title" style="margin-top:10px; color:purple; ">Quick Links<span></span></h5>
<ul class="thumbnail-widget">
<li>
<div class="thumb-content"><a href="#" style="font-size: 16px;   ">About Us</a></div>   
</li>
<li>
<div class="thumb-content"><a href="#." style="font-size: 16px;">Events</a></div>   
</li>
<li>
<div class="thumb-content"><a href="#." style="font-size: 16px; ">Contact Us</a></div>   
</li>
<li>
<div class="thumb-content"><a href="#." style="font-size: 16px; ">Join Us</a></div> 
</li>
</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title" style="margin-top:10px;color:purple;">Get Started<span></span></h5>
<p style="font-size: 16px; ">Get access to your full Training and Marketing Suite.</p>
<a class="btn" href="#." target="_blank"  style="color:white; background-color: purple; border: 2px solid white; margin-top: 15px;">Register Now</a>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">

<div class="widget no-box">
<h5 class="widget-title" style="margin-top:10px; color:purple;">Contact Us<span></span></h5>

<p style="font-size: 16px; "><a href="mailto:info@domain.com" title="glorythemes">www.agenda.com</a></p>
<ul class="social-footer2">
<li class=""><a title="youtube" target="_blank" href="https://www.youtube.com/" style="font-size: 16px; "><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
<li class=""><a href="https://www.facebook.com/" target="_blank" title="Facebook" style="font-size: 16px; "><i class="fa fa-facebook" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
<li class=""><a href="https://twitter.com" target="_blank" title="Twitter" style="font-size: 16px; "><i class="fa fa-twitter" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
<li class=""><a title="instagram" target="_blank" href="https://www.instagram.com/" style="font-size: 16px; "><i class="fa fa-instagram" aria-hidden="true"></i></a></li></ul>
</div>
</div>

</div>
</div>
</div>
  
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p style="font-size: 16px; ">Copyright Agenda © 2020. All rights reserved.</p>
</div>
</div>
</div>
</div>
</footer>



<div class="back-to-top flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>

<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

</body>
</html>