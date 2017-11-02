<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Coming Soon | Impact By Distinctive Themes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
    jQuery(document).ready(function($){
	'use strict';
      	jQuery('body').backstretch([
	        "http://placehold.it/800x600",
	        "http://placehold.it/800x600",
	        "http://placehold.it/800x600"
	    ], {duration: 5000, fade: 500});

		$("#mapwrapper").gMap({ controls: false,
         	scrollwheel: false,
         	markers: [{
              	latitude:40.7566,
				longitude: -73.9863,
          	icon: { image: "images/marker.png",
              	iconsize: [44,44],
          		iconanchor: [12,46],
          		infowindowanchor: [12, 0] } }],
          	icon: {
              	image: "images/marker.png",
             	iconsize: [26, 46],
              	iconanchor: [12, 46],
              	infowindowanchor: [12, 0] },
         	latitude:40.7566,
         	longitude: -73.9863,
          	zoom: 14 });

        // set the date we're counting down to
        var target_date = new Date('Dec, 31, 2015').getTime();
        var days, hours, minutes, seconds;
        var countdown = document.getElementById('countdown');
        setInterval(function () {
             var current_date = new Date().getTime();
             var seconds_left = (target_date - current_date) / 1000;
             days = parseInt(seconds_left / 86400);
             seconds_left = seconds_left % 86400;
             hours = parseInt(seconds_left / 3600);
             seconds_left = seconds_left % 3600;
             minutes = parseInt(seconds_left / 60);
             seconds = parseInt(seconds_left % 60);
             countdown.innerHTML = '<span class="days">' + days +  ' <b>Days</b></span> <span class="hours">' + hours + ' <b>Hours</b></span> <span class="minutes">'
            + minutes + ' <b>Minutes</b></span> <span class="seconds">' + seconds + ' <b>Seconds</b></span>';
        }, 1000);
    });
    </script>
</head><!--/head-->
<body>
<div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top opaqued" role="banner">
    <div id="search-wrapper">
        <div class="container">
            <input id="search-box" placeholder="Search">
        </div>
    </div>
        <?php require 'navbar.php';?>
    </header><!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                	<div id="countdown" class="boxed animation fade-down"></div><!-- /#Countdown Div -->
                                    <h2 class="boxed animation fade-down">WE NEARLY READY TO ROCK</h2>
                                    <br>
                                    <a class="btn btn-md animation bounce-in" href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <section id="services" class="white">
            <div class="container">
            <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="center gap fade-down section-heading">
                            <h2 class="main-title">Stuff We Do</h2>
                            <hr>
                            <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-windows fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Windows Apps</h3>
                                <p>Unfeeling so rapturous discovery he exquisite. Reasonably so middletons or impression by terminated. Old pleasure required removing elegance him had. Down she bore sing saw calm high.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-android fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Facebook Marketing</h3>
                                <p>The who arrival end how fertile enabled. Brother she add yet see minuter natural smiling article painted. Themselves at dispatched interested insensible am be prosperous reasonably it. </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-apple fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">iOS Development</h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-linux fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Linux Development</h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-dribbble fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Graphic Design</h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-google-plus fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">SEO Services</h3>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div>
        </section>

        <section id="stats" class="divider-section">
            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-timer bounce-in"></span></span>
                            <h1><span class="counter">246000</span></h1>
                            <h3>HOURS SAVED</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-light bounce-in"></span></span>
                            <h1><span class="counter">16875</span></h1>
                            <h3>FRESH IDEAS</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                            <h1><span class="counter">99999999</span></h1>
                            <h3>HUGE PROFIT</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-box2 bounce-in"></span></span>
                            <h1><span class="counter">54875</span></h1>
                            <h3>THINGS IN BOXES</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </section>

        <section id="portfolio" class="white">
       		<div class="container">
	        	<div class="gap"></div>
		        	<div class="center gap fade-down section-heading">
		                <h2 class="main-title">Examples Of Excellence</h2>
		                <hr>
		                <p>She evil face fine calm have now. Separate screened he outweigh of distance landlord.</p>
		            </div>
	                <ul class="portfolio-filter fade-down center">
	                    <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">All</a></li>
	                    <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".apps">Apps</a></li>
	                    <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".nature">Nature</a></li>
	                    <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".design">Design</a></li>
	                </ul><!--/#portfolio-filter-->

	                <ul class="portfolio-items col-3 isotope fade-up">
	                    <li class="portfolio-item apps isotope-item">
	                        <div class="item-inner">
	                            <img src="http://placehold.it/800x600" alt="">
	                            <h5>Lorem ipsum dolor sit amet</h5>
	                            <div class="overlay">
	                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                            </div>
	                        </div>
	                    </li><!--/.portfolio-item-->
	                    <li class="portfolio-item joomla nature isotope-item">
	                        <div class="item-inner">
	                            <img src="http://placehold.it/800x600" alt="">
	                            <h5>Lorem ipsum dolor sit amet</h5>
	                            <div class="overlay">
	                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                            </div>
	                        </div>
	                    </li><!--/.portfolio-item-->
	                    <li class="portfolio-item bootstrap design isotope-item">
	                        <div class="item-inner">
	                            <img src="http://placehold.it/800x600" alt="">
	                            <h5>Lorem ipsum dolor sit amet</h5>
	                            <div class="overlay">
	                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                            </div>
	                        </div>
	                    </li><!--/.portfolio-item-->
	                    <li class="portfolio-item joomla design apps isotope-item">
	                        <div class="item-inner">
	                            <img src="http://placehold.it/800x600" alt="">
	                            <h5>Lorem ipsum dolor sit amet</h5>
	                            <div class="overlay">
	                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                            </div>
	                        </div>
	                    </li><!--/.portfolio-item-->
	                    <li class="portfolio-item joomla apps isotope-item">
	                        <div class="item-inner">
	                            <img src="http://placehold.it/800x600" alt="">
	                            <h5>Lorem ipsum dolor sit amet</h5>
	                            <div class="overlay">
	                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                            </div>
	                        </div>
	                    </li><!--/.portfolio-item-->
	                    <li class="portfolio-item wordpress nature isotope-item">
	                        <div class="item-inner">
	                            <img src="http://placehold.it/800x600" alt="">
	                            <h5>Lorem ipsum dolor sit amet</h5>
	                            <div class="overlay">
	                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                            </div>
	                        </div>
	                    </li><!--/.portfolio-item-->
	                    <li class="portfolio-item joomla design apps isotope-item">
	                        <div class="item-inner">
	                            <img src="http://placehold.it/800x600" alt="">
	                            <h5>Lorem ipsum dolor sit amet</h5>
	                            <div class="overlay">
	                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                            </div>
	                        </div>
	                    </li><!--/.portfolio-item-->
	                    <li class="portfolio-item joomla nature isotope-item">
	                        <div class="item-inner">
	                            <img src="http://placehold.it/800x600" alt="">
	                            <h5>Lorem ipsum dolor sit amet</h5>
	                            <div class="overlay">
	                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                            </div>
	                        </div>
	                    </li><!--/.portfolio-item-->
	                    <li class="portfolio-item wordpress design isotope-item">
	                        <div class="item-inner">
	                            <img src="http://placehold.it/800x600" alt="">
	                            <h5>Lorem ipsum dolor sit amet</h5>
	                            <div class="overlay">
	                                <a class="preview btn btn-outlined btn-primary" href="http://placehold.it/800x600" rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                            </div>
	                        </div>
	                    </li><!--/.portfolio-item-->
	                </ul>
                </div>
            </section>

            <section id="testimonial-carousel" class="divider-section">
            <div class="gap"></div>
	            <div class="container">
	                <div class="row">
                    	<div class="center gap fade-down section-heading">
                            <h2 class="main-title">What They Have Been Saying</h2>
                            <hr>
                            <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                            <div class="gap"></div>
                        </div>
	                    <div class='col-md-offset-2 col-md-8 fade-up'>
	                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
	                            <!-- Bottom Carousel Indicators -->
	                            <ol class="carousel-indicators">
	                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
	                                <li data-target="#quote-carousel" data-slide-to="1"></li>
	                                <li data-target="#quote-carousel" data-slide-to="2"></li>
	                            </ol>
	                            <!-- Carousel Slides / Quotes -->
	                            <div class="carousel-inner">
	                              <!-- Quote 1 -->
	                                <div class="item active">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                                <img class="img-responsive" src="http://placehold.it/400x400" style="width: 100px;height:100px;">
	                                            </div>
	                                            <div class="col-sm-9">
	                                                <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
	                                                <small>Someone famous</small>
	                                            </div>
	                                        </div>
	                                    </blockquote>
	                                </div>
	                                <!-- Quote 2 -->
	                                <div class="item">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                                <img class="img-responsive" src="http://placehold.it/400x400" style="width: 100px;height:100px;">
	                                            </div>
	                                            <div class="col-sm-9">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
	                                                <small>Someone famous</small>
	                                            </div>
	                                        </div>
	                                    </blockquote>
	                                </div>
	                                <!-- Quote 3 -->
	                                <div class="item">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-3 text-center">
	                                                <img class="img-responsive" src="http://placehold.it/400x400" style="width: 100px;height:100px;">
	                                            </div>
	                                            <div class="col-sm-9">
	                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
	                                                <small>Someone famous</small>
	                                            </div>
	                                        </div>
	                                    </blockquote>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="gap"></div>
	      		</div>
      		</section>

			<div id="mapwrapper">
				<div id="map"></div>
			</div>

            <section id="contact" class="white">
                <div class="container">
                	<div class="gap"></div>
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Get In Touch</h2>
                        <hr>
                        <p>Of an or game gate west face shed. ﻿no great but music too old found arose.</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-4 fade-up">
                            <h3>Contact Information</h3>
                            <p><span class="icon icon-home"></span>Time Square, New York<br/>
                                <span class="icon icon-phone"></span>+36 65984 405<br/>
                                <span class="icon icon-mobile"></span>+36 65984 405<br/>
                                <span class="icon icon-envelop"></span> <a href="#">email@infinityteam.com</a> <br/>
                                <span class="icon icon-twitter"></span> <a href="#">@infinityteam.com</a> <br/>
                                <span class="icon icon-facebook"></span> <a href="#">Infinity Agency</a> <br/>
                            </p>
                        </div><!-- col -->

                        <div class="col-md-8 fade-up">
                            <h3>Drop Us A Message</h3>
                            <br>
                            <br>
                            <div id="message"></div>
                            <form method="post" action="sendemail.php" id="contactform">
                                <input type="text" name="name" id="name" placeholder="Name" />
                                <input type="text" name="email" id="email" placeholder="Email" />
                                <input type="text" name="website" id="website" placeholder="Website" />
                                <textarea name="comments" id="comments" placeholder="Comments"></textarea>
                                <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Submit" />
                            </form>
                        </div><!-- col -->
                    </div><!-- row -->
                    <div class="gap"></div>
                </div>
            </section>
        </div>

    <div id="footer-wrapper">
        <section id="bottom" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 about-us-widget">
                        <h4>Global Coverage</h4>
                        <p>Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin.</p>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Company</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">Company Overview</a></li>
                                <li><a href="#">Meet The Team</a></li>
                                <li><a href="#">Our Awesome Partners</a></li>
                                <li><a href="#">Our Services</a></li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Latest Articles</h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="http://placehold.it/800x600" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post A</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="http://placehold.it/800x600" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post B</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                        </div>
                    </div><!--/.col-md-3-->

                    <div class="col-md-3 col-sm-6">
                        <h4>Come See Us</h4>
                        <address>
                            <strong>Ace Towers</strong><br>
                            New York Ave,<br>
                            New York, 215648<br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr> 546 840654 05
                        </address>
                    </div> <!--/.col-md-3-->
                </div>
            </div>
        </section><!--/#bottom-->

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        &copy; 2014 <a target="_blank" href="http://www.distinctivethemes.com" title="Premium Themes and Templates">Distinctive Themes</a>. All Rights Reserved.
                    </div>
                    <div class="col-sm-6">
                        <ul class="pull-right">
                            <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li><!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
    </div>


    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="js/init.js"></script>
</body>
</html>
