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
<body style="margin-top: 0px;">
<div id="preloader"></div>
  <?php require 'navbar.php';?>


    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <?php include 'assets/php/schooldata.php'; ?>
                  <h1>Bedrijf aanmelden</h1>
          <?php
          /*
           * Include de contestants page, waar de verwerkingscode staat van de form.
           */
          include 'assets/php/contestants.php'; ?>
        <form action="" method="post">
          <div class="form-group">
            <label for="comment">Opleiding naam:</label>
            <input name="name" type="text" class="form-control" id="comment">
          </div>
          <div class="form-group">
            <label for="comment">Contactpersoon:</label>
            <input name="contactName" type="text" class="form-control" id="comment">
          </div>
          <div class="form-group">
            <label for="comment">E-mail:</label>
            <input name="contactEmail" type="text" class="form-control" id="comment">
          </div>
          <div class="form-group">
            <label for="comment">Telefoon:</label>
            <input name="contactPhone" type="text" class="form-control" id="comment">
          </div>
          <p>Wat wilt u</p>
          <div class="checkbox">
              <input name="quantity" type="hidden" value="0">
            <label><input name="quantity" type="checkbox" value="1">Een of meerdere team aanmelden </label>
          </div>
          <div class="checkbox">
                   <input name="personalContact" type="hidden" value="0">
            <label><input name="personalContact" type="checkbox" value="1">Persoonlijk contact over deelname </label>
          </div>
          <div class="checkbox disabled">
                   <input name="personalContact" type="hidden" value="0">
            <label><input name="info" type="checkbox" value="1">Meer informatie </label>
          </div>
          <div class="form-group">
            <label for="comment">Opmerkingen:</label>
            <textarea name="comments" class="form-control" rows="5" id="comment"></textarea>
          </div>
          <div class="form-group" style="text-align: center;">
            <input type="submit" name="send" class="btn btn-danger" value="Versturen">
          </div>
        </form>
        </div>
      </div>

      <div class="row">

      </div>
    </div>




    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/plugins.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="js/init.js"></script>
</body>
<?php include 'footer.php'; ?>

</html>
