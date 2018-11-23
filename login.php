<?php 
include "inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title><?php echo $title; ?></title>
    <!-- Bootstrap core CSS -->
    <!-- <link href="<?php echo $url ?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $url ?>assets/fonts/font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link href="<?php echo $url ?>assets/bootstrap/css/datetimepicker.css" rel="stylesheet">
    <link href="<?php echo $url ?>assets/css/custom.css" rel="stylesheet"> -->

     <!-- Bootstrap -->
     <link rel="stylesheet" href="<?php echo $url ?>assets/theme/theme/css/bootstrap.min.css">
        <!-- Custom font icons -->
        <link rel="stylesheet" href="https://file.myfontastic.com/6AeAYiqp5KBjSiZ2tE8WJW/icons.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Slider -->
        <link rel="stylesheet" href="<?php echo $url ?>assets/theme/theme/css/slider.min.css">
        <!-- Lightbox Pop up -->
        <link rel="stylesheet" href="<?php echo $url ?>assets/theme/theme/css/lightbox.min.css">
        <!-- Datepicker -->
        <link rel="stylesheet" href="<?php echo $url ?>assets/theme/theme/css/datepicker.min.css">
        <!-- Datepicker -->
        <link rel="stylesheet" href="<?php echo $url ?>assets/theme/theme/css/timepicki.min.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="<?php echo $url ?>assets/theme/theme/css/owl.carousel.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo $url ?>assets/theme/theme/css/style.default.css">
        <!-- Custom me -->
        <link rel="stylesheet" href="<?php echo $url ?>assets/theme/theme/css/custom.css">
        <!-- Modernizr -->
        <script type="text/javascript" src="<?php echo $url ?>assets/theme/theme/js/modernizr.custom.79639.min.js"></script>

    <!-- Bootstrap Jquery -->
    <script src="<?php echo $url ?>assets/js/jquery.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="<?php echo $url ?>assets/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo $url ?>assets/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

  </head>
  <body>
  
  <div class="page-holder">
    <header class="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header"><a href="index.html" class="navbar-brand"><img src="<?php echo $url ?>assets/theme/theme/img/logos2.png" alt="Italiano" width="100"></a>
                    <div class="navbar-buttons">
                        <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="fa fa-align-justify"></i></button>
                    </div>
                </div>
                <div id="navigation" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo $url?>index.php">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section id="booking" class="booking">
        <div class="container text-center">

            <div class="row">
                <div class="form-holder col-md-10 col-md-push-1 text-center">
                    <div class="ribbon">
                        <i class="fa fa-star"></i>
                    </div>

                    <h2>Login</h2>

                    <form id="booking-form" method="get" action="<?php echo $url?>function/login.php">
                        <div class="row">
                            <div class="col-md-10 col-md-push-1">
                                <div class="row">
                                    <label for="username" class="col-sm-12 unique">Username
                                        <input name="username" type="text" id="username" required>
                                    </label>
                                    <label for="password" class="col-sm-12 unique">Password
                                        <input name="password" type="password" id="password" required>
                                    </label>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn-unique">Masuk</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
    </body>
</html>