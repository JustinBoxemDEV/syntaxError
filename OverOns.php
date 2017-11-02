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
<body>
<div id="preloader"></div>
  <?php require 'navbar.php';?>


    <div class="container">
      <div class="row">
        <h1>Over ons</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pulvinar turpis nec orci sollicitudin, egestas sollicitudin neque volutpat. Aliquam augue risus, aliquam in dui vel, dapibus luctus metus. Praesent in dignissim purus. Donec fringilla sem ante, nec convallis enim ultricies eget. Fusce rhoncus, metus nec pulvinar mattis, metus nunc tristique turpis, in dapibus nisi elit non nunc. Nullam viverra mi tincidunt lorem maximus, eget tincidunt neque laoreet. Curabitur eleifend vel nunc ac rutrum. Sed varius dui lorem, dictum ullamcorper tellus dictum vitae. Aenean vulputate efficitur ante vitae varius. Morbi consequat justo vel nisi finibus, placerat facilisis metus placerat. Donec in feugiat risus, et posuere libero. Pellentesque lobortis accumsan scelerisque. Mauris diam diam, lacinia ut malesuada a, varius sit amet enim. Sed efficitur nisl in augue accumsan vehicula.

In iaculis tempus porttitor. Integer vel leo metus. Curabitur at ligula auctor, pellentesque neque a, pellentesque sapien. Morbi vel leo sit amet nibh ornare rhoncus. Nulla nec nunc dapibus, dignissim nibh at, viverra lectus. Ut purus ex, mollis sed consequat vitae, vestibulum vel purus. Duis viverra velit varius, hendrerit magna ac, dignissim leo. Sed sagittis condimentum scelerisque. Sed eu augue sit amet lacus pellentesque sagittis vitae eu elit. Phasellus dignissim sem sed elit laoreet, in ultricies sem eleifend. Etiam mollis ullamcorper porttitor. Suspendisse eu libero metus. Phasellus sem erat, hendrerit eget metus consectetur, mattis vehicula eros. Integer nec lacus aliquet, sodales nisl ut, ultricies sem.
        </p>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <h1>Social  Media</h1>
          <div class="col-sm-4"></div>
          <div class="col-sm-4"></div>
        </div>
        <div class="col-sm-4">
          <h1>Contact Info</h1>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis diam ac mi suscipit dictum. Proin id sapien ac lectus venenatis placerat. Quisque lacinia eleifend lorem. Praesent suscipit ac diam eget ornare. Quisque ac eros et odio ornare suscipit nec placerat erat. Praesent a ligula sagittis, vestibulum ante et, euismod.
          </p>
        </div>
      </div>
      <div class="row">
        <h1>FeedBack</h1>
        <form>
          <div class="form-group">
            <p>geef ons een cijfer</p>
            <label class="radio-inline"><input type="radio" name="rating" value=1>1</label>
            <label class="radio-inline"><input type="radio" name="rating" value=2>2</label>
            <label class="radio-inline"><input type="radio" name="rating" value=3>3</label>
            <label class="radio-inline"><input type="radio" name="rating" value=4>4</label>
            <label class="radio-inline"><input type="radio" name="rating" value=5>5</label>
            <label class="radio-inline"><input type="radio" name="rating" value=6>6</label>
            <label class="radio-inline"><input type="radio" name="rating" value=7>7</label>
            <label class="radio-inline"><input type="radio" name="rating" value=8>8</label>
            <label class="radio-inline"><input type="radio" name="rating" value=9>9</label>
            <label class="radio-inline"><input type="radio" name="rating" value=10>10</label>
          </div>
          <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>
          <div class="form-group" style="text-align: center;">
            <input type="button" name="send" class="btn btn-danger" value="Versturen">
          </div>
        </form>
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
