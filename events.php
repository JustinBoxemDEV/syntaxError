<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | Impact By Distinctive Themes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
   	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
    jQuery(document).ready(function($){
    'use strict';


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
<body style="margin-bottom: 30px;">
<div id="preloader"></div>

<?php require 'navbar.php';?>

    <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <!-- <div class="carousel-inner">
          <div class="item active">
            <img src="fotos/event_courosel/test.jpg" alt="Los Angeles" style="width:100%;">
          </div>

          <div class="item">
            <img src="fotos/event_courosel/test2.jpg" alt="Chicago" style="width:100%;">
          </div>
        </div> -->


      </div>
    </div>

<div class="container" style="margin-top: 10%;">

                  <h2 class="main-title" style="text-align: center;">events</h2>

                <div class="row" style="border: solid red 2px; max-height: 500px; overflow: scroll;">


                      <div class="row" style="border-bottom: solid black 2px; background-color: lightblue; padding-top: 2px; padding-bottom: 2px; margin-bottom: 5px;">
                        <div class="col-sm-3">
                          <img class="img-responsive" src="assets/images/bots.logo.png" alt="Chania" width="300px">
                        </div>
                        <div class="col-sm-4">
                          <h3 style="margin: 0px;">Battle of the Schools</h3>
                          Begindatum: 01-11-2017
                          Einddatum: 03-11-2017
                        </div>
                        <div class="col-sm-5">
                          <p>Tussen 1 en 3 november gaan 15 teams van verschillende scholen met elkaar de strijd aan voor de toekomst voor Groningen.
                          </p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
    </div>





    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/init.js"></script>
</body>
<?php include 'footer.php'; ?>


</html>
