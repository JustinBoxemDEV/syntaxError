<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Battle of the schools</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

<script src="https://use.fontawesome.com/f638cb783e.js"></script>

    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
    jQuery(document).ready(function($){
	'use strict';
      	jQuery('body').backstretch([
	        "images/slide1.jpg",
	        "images/slide2.jpg",
	        "images/slide3.jpg",
            "images/slide4.jpg",
            "images/slide5.jpg",
            "images/slide6.jpg"
	    ], {duration: 3400, fade: 500, centeredY: true });

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
    });
    </script>
</head><!--/head-->
<body style="margin-top: 70px;">
<div id="preloader"></div>
<?php require 'navbar.php';?>

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                	<center><img src="images/sticker-02.png"></center>
                                    <h2 class="boxed animation animated-item-1 fade-down">Let's change the future together!</h2>
                                    <!-- <p class="boxed animation animated-item-2 fade-up">Our expertise will guide you to success. Without Fail.</p> -->
                                    <br>
                                    <a class="btn btn-md animation bounce-in" href="#services">Tell me more</a>
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
                            <h2 class="main-title">Kenmerken</h2>
                            <hr>
                            <h4>Battle of the Schools, een prachtige kans voor studenten, scholen en ondernemers!</h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-graduation-cap fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Leren op een andere manier</h3>
                                <p>Studenten die meedoen aan Battle of the Schools, ontwikkelen zichzelf op een andere manier. Zo leren ze omgaan met opdrachten uit het bedrijfsleven, maar ze leren ook netwerken en vragen stellen.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-thumbs-o-up fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Marketing</h3>
                                <p>Studenten komen op oplossingen waar mensen uit bedrijven niet op komen. Studenten streven naar het ontwikkelen van producten van hoge kwaliteit waarmee uw bedrijf kan groeien.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                    <div class="col-md-4 col-sm-6">
                        <div class="service-block">
                            <div class="pull-left bounce-in">
                                <i class="fa fa-university fa fa-md"></i>
                            </div>
                            <div class="media-body fade-up">
                                <h3 class="media-heading">Ook voor de docent</h3>
                                <p>Battle of the Schools is niet alleen voor de studenten en ondernemers, maar ook voor de docenten. Docenten werken samen met studenten aan een eindrusultaat, en vinden het net zo leuk als de student. </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
                <div class="gap"></div>
            </div>
            <div class="gap"></div>
        </section>


		<section id="single-quote" class="divider-section">
	            <div class="container-fluid">
	            	<div class="gap"></div>
	                <div class="row">
	                    <div class='col-md-offset-2 col-md-8 fade-up'>
	                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
	                            <div class="carousel-inner">
	                                <div class="item active">
	                                    <blockquote>
	                                        <div class="row">
	                                            <div class="col-sm-12 text-center">
	                                                <p style="font-size: 30px"> <?php include 'assets/php/quotes.php';
                                $quotes = new quotes();
                                $array = $quotes->getAllQuotes();
                                $result = $array[rand(0,count($array)-1)];
                                echo $result['opinion'];

                                ?></p>
	                                                <small><?php echo $result['name'];?></small>
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

        <section id="about-us" class="white">
        	<div class="container">
	            <div class="gap"></div>
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="center gap fade-down section-heading">
	                        <h2 class="main-title">Over de battle</h2>
	                        <hr>
	                        <b>De toekomst komt steeds dichterbij</b>
	                    </div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-md-10 col-md-offset-1 fade-up">
	                    <p>Battle of the Schools is sinds 2016 onderdeel van het Let’s Gro Festival in Groningen. Let’s Gro is een jaarlijks festival in november over de toekomst. Tijdens Let’s Gro kun je contacten leggen, je met ideeën voeden en je horizon verbreden in de fysieke en digitale wereld. Groningen laat op een positieve zelfbewuste manier zien dat er in het noorden meer te halen valt dan rust, ruimte en gas. Het noorden claimt met recht zijn voortrekkersrol op het gebied van (online) ICT, economie en sociale innovaties. In het hart van Groningen wordt de stad en wereld van morgen ontdekt. <b>De toekomst komt steeds dichterbij.</b></p>

	                    <p>Van woensdag 1 t/m vrijdag 3 november 2017 strijden de teams van mbo, hbo en wo-opleidingen op het gebied van ICT en multimedia uit Noord-Nederland tegen elkaar. In een 48 uur durende non-stop battle maken zij werkende oplossingen voor de door het bedrijfsleven/instellingen ingebrachte cases, uitdagingen en opdrachten. Dit wordt de derde editie van Battle of the Schools. In het eerste jaar werd de strijd gewonnen door het team van ROC Friese Poort Drachten. In het tweede jaar ging het team van de Hanzehogeschool Groningen er met alle prijzen vandoor.
                        <b>Dit jaar moet de grootste Battle worden.</b>
                        <b>Meer teams, meer opdrachtgevers, meer prijzen en nog grotere bekers.<b> </p>
	                </div>
	                <div class="col-md-4 fade-up">

	                </div>
	            </div>
                

            </div>
        </section>

        <section id="stats" class="divider-section">
            <div class="gap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-timer bounce-in"></span></span>
                            <h1><span class="counter">144</span></h1>
                            <h3>HOURS PASSED</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-study bounce-in"></span></span>                           
                            <h1><span class="counter">15</span></h1>
                            <h3>TEAMS IN 2017</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">

                            <span class="stat-icon"><span class="pe-7s-light bounce-in"></span></span>
                            <h1><span class="counter">32</span></h1>
                            <h3>Ideeën uitgewerkt bij #bots</h3>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="center bounce-in">
                            <span class="stat-icon"><span class="pe-7s-graph1 bounce-in"></span></span>
                            <h1><span class="counter">99999999</span></h1>
                            <h3>Huge progress for <b>everyone</b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
        </section>


            
<!-- 			<div id="mapwrapper">
				<div id="map"></div>
			</div> -->

            <section id="contact" class="white">
                <div class="container">
                	<div class="gap"></div>
                    <div class="center gap fade-down section-heading">
                        <h2 class="main-title">Get In Touch</h2>
                        <hr>
                        <p>Kom meteen met ons in contact! Laat van je horen!</p>
                    </div>
                    <div class="gap"></div>
                    <div class="row">
                        <div class="col-md-4 fade-up">
                            <h3>Contact Informatie</h3>
                            <p><span class="icon icon-home"></span>Let's gro, Groningen<br/>
                                <span class="icon icon-phone"></span>+36 65984 405<br/>
                                <span class="icon icon-mobile"></span>+36 65984 405<br/>
                                <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto://tijn@battleoftheschools.nl"> tijn@battleoftheschools.nl</a> <br/>
                                <i class="fa fa-twitter-square" aria-hidden="true"></i> <a href="#"> @bot_050</a> <br/>
                                <i class="fa fa-facebook-official" aria-hidden="true"></i> <a href="#"> Battle of the Schools</a> <br/>
                            </p>
                        </div><!-- col -->

                        <div class="col-md-8 fade-up">
                            <h3>Laat hier je bericht achter!</h3>
                            <br>
                            <br>
                            <div id="message"></div>
                            <form method="post" action="sendemail.php" id="contactform">
                                <input type="text" name="name" id="name" placeholder="Naam" />
                                <input type="text" name="email" id="email" placeholder="Email" />
                                <input type="text" name="website" id="website" placeholder="Website" />
                                <textarea name="comments" id="comments" placeholder="Opmerkingen"></textarea>
                                <input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Verzenden" />
                            </form>
                        </div><!-- col -->
                    </div><!-- row -->
                    <div class="gap"></div>
                </div>
            </section>
            <?php include 'footer.php';?>
        </div>



    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="js/init.js"></script>
</body>
</html>
