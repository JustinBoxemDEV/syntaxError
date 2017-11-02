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
<body style="margin-top:70px;">
<div id="preloader"></div>

<?php require 'navbar.php';?>


<div class="container">

                  <h2 class="main-title" style="text-align: center;">Portfolio</h2>

                <div class="row" >
                  <div class="col-sm-4">
                    <a href="#" data-toggle="modal" data-target="#myModal1">
                      <h2>2017</h2>
                      <img class="img-responsive" src="example.jpg" alt="Chania" height="250px">
                      <h2>Groep 1</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a tortor vitae lorem varius venenatis et in nibh. Proin bibendum.</p>
                    </a>
                  </div>
                  <div id="myModal1" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                          <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <a href="#" data-toggle="modal" data-target="#myModal2">
                      <h2>2017</h2>
                      <img class="img-responsive" src="example.jpg" alt="Chania" height="250px" data-toggle="modal" data-target="#myModal">
                      <h2>Groep 1</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a tortor vitae lorem varius venenatis et in nibh. Proin bibendum.</p>
                    </a>
                  </div>
                  <div id="myModal2" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                          <p>Some text in the modal.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>

                    <div class="col-sm-4">
                      <a href="#" data-toggle="modal" data-target="#myModal3">
                        <h2>2017</h2>
                        <img class="img-responsive" src="example.jpg" alt="Chania" height="250px">
                        <h2>Groep 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a tortor vitae lorem varius venenatis et in nibh. Proin bibendum.</p>
                      </a>
                    </div>
                    <div id="myModal3" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                          </div>
                          <div class="modal-body">
                            <p>Some text in the modal.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <a href="#" data-toggle="modal" data-target="#myModal4">
                        <h2>2017</h2>
                        <img class="img-responsive" src="example.jpg" alt="Chania" height="250px" data-toggle="modal" data-target="#myModal">
                        <h2>Groep 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a tortor vitae lorem varius venenatis et in nibh. Proin bibendum.</p>
                      </a>
                    </div>
                    <div id="myModal4" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Syntax Error;</h4>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-sm-4">
                                <img class="img-responsive" src="example.jpg" alt="Chania" height="250px" data-toggle="modal" data-target="#myModal">
                                <p>Dit groepje is super geweldig en coool vooral ted</p>
                              </div>
                              <div class="col-sm-8">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent fermentum porta tempus. Cras sed arcu vel urna aliquam cursus. In pharetra et ante sed elementum. Fusce est elit, varius eget congue sed, venenatis condimentum ipsum. Maecenas egestas risus sed justo volutpat vulputate. Nunc eget pretium ex. Etiam vehicula metus vitae quam condimentum placerat eget quis lacus. Pellentesque aliquet ligula sit amet tincidunt porta. Mauris fringilla at ipsum eu laoreet. Nullam quis varius magna. Cras pharetra elit elit. Phasellus augue erat, sodales a mollis rutrum, vehicula in risus.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

                      <div class="col-sm-4">
                        <a href="#" data-toggle="modal" data-target="#myModal5">
                          <h2>2017</h2>
                          <img class="img-responsive" src="example.jpg" alt="Chania" height="250px">
                          <h2>Groep 1</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a tortor vitae lorem varius venenatis et in nibh. Proin bibendum.</p>
                        </a>
                      </div>
                      <div id="myModal5" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                              <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-sm-4">
                        <a href="#" data-toggle="modal" data-target="#myModal6">
                          <h2>2017</h2>
                          <img class="img-responsive" src="example.jpg" alt="Chania" height="250px" data-toggle="modal" data-target="#myModal">
                          <h2>Groep 1</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc a tortor vitae lorem varius venenatis et in nibh. Proin bibendum.</p>
                        </a>
                      </div>
                      <div id="myModal6" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                              <p>Some text in the modal.</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
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
