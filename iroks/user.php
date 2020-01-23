<?php include('server.php');
include 'connect.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EventFest Maribor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

    <!-- Libraries CSS Files -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="animate/animate.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">


</head>

<body>
<script type="text/javascript" src="bootstrap.min.js"></script>

<!--==========================
Header
============================-->
<nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color: darkmagenta">
    <div class="container">
        <a href="index.php"><img src="https://d38trduahtodj3.cloudfront.net/images.ashx?t=ig&rid=FFEA&i=eventfest.jpg&w=330&h=330&cropbox=1&cropboxhpos=center&stf=1" alt="EvenFest" width="75" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" style="color: white" href="index.php">Domov</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" style="color: white" href="#services" class="btn-services scrollto" >Dogodki</a>
                </li>
                <li class="nav-item style="color: white"">
                <?php if(empty($_SESSION['username'])) : ?>
                    <a class="nav-link" style="color: white" href="login.php"><i class='far fa-user' style='color:white'></i> Prijava </a>
                <?php else : ?>
                    <a class="nav-link" style="color: white" href="user.php"><i class='far fa-user' style='color:white'></i> <?php echo $_SESSION['username']; ?> </a>
                <?php endif; ?>


                </li>
            </ul>

        </div>
    </div>
</nav>
<br>
<br><br>




<!-- Page Content -->
<div class="container">
    <i class='far fa-user fa-5x' style="color:black"></i>
    <a style="color: white" href="user.php"><i class='far fa-user' style='color:white'></i> <?php echo $_SESSION['username']; ?> </a>
<p> <font size="6"><?php echo $_SESSION['username']; ?> </p>

    <p> <font size="4"><a href="index.php?logout='1'" style="color: black;">Logout</a></p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>






</div>
<!-- /.container -->



<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script id="dsq-count-scr" src="//startbootstrap.disqus.com/count.js" async type="25c172173236f4ddce5eb462-text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" type="25c172173236f4ddce5eb462-text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous" type="25c172173236f4ddce5eb462-text/javascript"></script>
<script type="25c172173236f4ddce5eb462-text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="25c172173236f4ddce5eb462-text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="/assets/js/scripts.js" type="25c172173236f4ddce5eb462-text/javascript"></script>
<script type="25c172173236f4ddce5eb462-text/javascript">
    $("#desktopToggle").on('click', function(e) {
      e.preventDefault();
      $(".iframe-preview").removeClass("iframe-preview-mobile");
    });
    $("#mobileToggle").on('click', function(e) {
      e.preventDefault();
      $(".iframe-preview").addClass("iframe-preview-mobile");
    });
  </script>
</body>
</html>
