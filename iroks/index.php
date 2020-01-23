<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Spotlight</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<script type="text/javascript" src="bootstrap.min.js"></script>



<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a href="index.php"><img src="https://i1.wp.com/spotlighttv.co.uk/wp-content/uploads/2019/06/Cropped-Spotlight-Logo-1.jpg?resize=1024%2C542" alt="Spotlight" width="100" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" style="color: white" href="index.php">Domov</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="spored.php">Spored</a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="arhiv.php">Arhiv</a>
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



<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron bg-dark my-4">
        <img src="https://media0.giphy.com/media/Qvp6Z2fidQR34IcwQ5/source.gif" width="1040" height="500">
    </header>


    <!-- Page Features -->
    <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" height="200"  src="https://image.winudf.com/v2/image/bXBsLmNvbS5jb21pbmdzb29uX3NjcmVlbl8wXzE1MzQ3NTgxODFfMDQ0/screen-0.jpg?fakeurl=1&type=.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">KMALU V KINU</h4>
                </div>
                <div class="card-footer">
                    <a href="kmalu.php" class="btn btn-dark">VEČ!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" height="200" src="https://burnzozobra.com/wp-content/uploads/2016/05/event-tickets-pic71_0.png" alt="">
                <div class="card-body">
                    <h4 class="card-title">ČRNI PETEK</h4>
                    <p class="card-text">Vsak petek 1+1 GRATIS</p>
                </div>
                <div class="card-footer">
                    <a href="crniPetek.php" class="btn btn-dark">VEČ!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" height="200" src="https://media-assets-05.thedrum.com/cache/images/thedrum-prod/s3-news-tmp-108945-broadcasttv_0--default--560.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">SPORED</h4>
                </div>
                <div class="card-footer">
                    <a href="spored.php" class="btn btn-dark">VEČ!</a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" height="200" src="https://www.e3s.be/wp-content/uploads/2018/09/496493704-612x612.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title">ARHIV</h4>
                    <p class="card-text">Poglejte si arhiv filmov</p>
                </div>
                <div class="card-footer">
                    <a href="arhiv.php" class="btn btn-dark">VEČ!</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-left text-white">KONTAKT</p>
        <p class="m-0 text-left text-white">Naslov: Spotlight, Glavna cesta 1, 2000 Maribor, Slovenija</p>
        <p class="m-0 text-left text-white">Email: info@spotlight.si</p>
        <p class="m-0 text-left text-white">Telefon: 041 111 222</p>
    </div>
    <!-- /.container -->
</footer>

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
