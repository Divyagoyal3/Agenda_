<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
  
        <link rel="stylesheet" href="css/font-awesome.min.css">
       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon " href="images/logo.png">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
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
                        <a class="btn gradient-bg" href="#">Subscribe</a>
                    </div><!-- .buy-tickets -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .header-bar -->

    <div class="page-header events-page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title" style="font-family: 'Calibri';">Details</h1>
                    </header>
                </div>
            </div>
        </div>
    </div>
</header><!-- .site-header -->


    <div class="main" >
        <div class="container" style=" background-image:url('images/pi.jpg');">
            <div class="signup-content">
                <div class="signup-form">
                    <form action="register1.php" method="post" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                            <div class="form-input">
                                    <label for="username" class="required">Username</label>
                                    <input type="text" name="username" id="username" required />
                                </div>  
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="fname" id="first_name" required />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="lname" id="last_name" required />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Company</label>
                                    <input type="text" name="company" id="company" required />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email"required />
                                </div>
                                <div class="form-input">
                                    <label for="password" class="required">Password</label>
                                    <input type="password" name="password" id="password" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Event</label>
                                        <a href="#" class="form-link">Event Name</a>
                                    </div>
                                    <div class="select-list">
                                        <select name="meal_preference" id="meal_preference">
                                            <option value="Concerts">Concerts</option>
                                            <option value="Party">Party</option>
                                            <option value="Ceremony">Ceremony</option>
                                            <option value="Stage Shows">Stage Shows</option>
                                            <option value="Destination Wedding">Destination Wedding</option>
                                            <option value="Festival Celebration">Festival Celebration</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Payment Mode</label>
                                        <a href="#" class="form-link">Payment Detail</a>
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" checked>
                                            <label for="cash">Cash</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque">
                                            <label for="cheque">Cheque</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand">
                                            <label for="demand">Demand Draf</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">DD / Cheque No.</label>
                                    <input type="text" name="c_no" id="chequeno" required />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Drawn on ( Bank Name)</label>
                                    <input type="text" name="b_name" id="blank_name" required />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Payable at</label>
                                    <input type="text" name="payable" id="payable" required />
                                </div>
                              
                            </div>
                            <div class="entry-footer">
                            <button type="submit" name="signup"  value="Sign Up" class="btn gradient-bg" >Join Us</button>
                            <div class="clear"> </div>
                        </div>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>

    </div>
<!--footer-->
<footer id="footer" class="footer-1" style="background-color: black; color:white;">
<div class="main-footer widgets-dark typo-light">
<div class="container">
<div class="row">
  
<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget subscribe no-box">
<h5 class="widget-title" style="margin-top:10px; color:purple;">Agenda<span></span></h5>
<p>Agenda company offer professional event planning services that include event management, event coordination and venue sourcing. </p>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title" style="margin-top:10px; color:purple; ">Quick Links<span></span></h5>
<ul class="thumbnail-widget">
<li>
<div class="thumb-content"><a href="#">About Us</a></div>   
</li>
<li>
<div class="thumb-content"><a href="#.">Events</a></div>   
</li>
<li>
<div class="thumb-content"><a href="#.">Contact Us</a></div>   
</li>
<li>
<div class="thumb-content"><a href="#.">Join Us</a></div> 
</li>
</ul>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">
<div class="widget no-box">
<h5 class="widget-title" style="margin-top:10px;color:purple;">Get Started<span></span></h5>
<p>Get access to your full Training and Marketing Suite.</p><br><br>
<a class="btn" href="#." target="_blank"  style="color:white; background-color: purple; border: 2px solid white;">Register Now</a>
</div>
</div>

<div class="col-xs-12 col-sm-6 col-md-3">

<div class="widget no-box">
<h5 class="widget-title" style="margin-top:10px; color:purple;">Contact Us<span></span></h5>

<p><a href="mailto:info@domain.com" title="glorythemes">www.agenda.com</a></p>
<ul class="social-footer2">
<li class=""><a title="youtube" target="_blank" href="https://www.youtube.com/"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
<li class=""><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
<li class=""><a href="https://twitter.com" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
<li class=""><a title="instagram" target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li></ul>
</div>
</div>

</div>
</div>
</div>
  
<div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p>Copyright Agenda © 2020. All rights reserved.</p>
</div>
</div>
</div>
</div>
</footer>


<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script type='text/javascript' src='js/eventselection.js'></script>

</body>
</html>
