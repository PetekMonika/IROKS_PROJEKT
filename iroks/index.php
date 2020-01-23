<!DOCTYPE html>

<?php
include_once 'connect.php';
include 'server.php';
header('Content-Type: text/html; charset=utf-8');
?>
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

  <!--==========================
    Intro Section
  ============================-->

    <div class="container">

      <div class="intro-img">
        <img src="https://www.krock1057.ca/wp-content/uploads/sites/21/2018/04/iStock-concert-1024x576.jpg" alt="" class="img-fluid">
      </div>

      <div class="intro-info" >
        <h2>Pravi FEST<br><span>na</span><br>pravem mestu za vas!</h2>

      </div>

    </div>
  <!-- #intro -->

<br><br><br>





  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>O nas</h3>
          <p></p>
        </header>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <p>

            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title">KAJ JE EVENTFEST?</h4>
              <p class="description">EventFest je spletna stran, ki ima zbrana vsa dogajanja v mestu MAribor in njegovi okolici.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title">PRIJAVA NA DOGODKE</h4>
              <p class="description">Večji dogodki ne potrebujejo prijave, saj so organizirani na odprtih lokacijah, kjer je prostora za veliko ljudi,
                  vendar s prijavo daste organizatorejm statističen pregled in s tem omogočite bolje organiziran dogodek.
                  Manjši dogodki pa so namenjeni manjšemu številu ljudi, zato se je nanje treba prijaviti in si s tem zagotoviti svoje mesto.
                  Prijava in udeležitev sta brezplačna.</p>
            </div>


          </div>


          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="http://service.oeticket.com/wp-content/uploads/2016/05/EL2_Klemen-Stular.jpg" class="img-fluid" alt="">

          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">

              <h3>Dvorana Lent</h3>
              <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=dvorana%20lent&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://ytify.com">youtube to mp3</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>

              <br>
              <br>
              <h3>Dvorana Tabor</h3>
              <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=dvorana%20tabor&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://ytify.com">youtube to mp3</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
              <br>
              <br>
              <h3>Trg Leona Štuklja</h3>
              <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Trg%20Leona%20Stuklja&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://ytify.com">youtube to mp3</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
              <br>
              <br>
              <h3>Lenart</h3>

              <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Lenart&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://ytify.com">youtube to mp3</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
          </div>

          <div class="col-lg-6 content order-lg-1 order-2" style="border-radius: 5px">
          <form method="post" action="prijava.php" style="width: 105%">
              <section id="services" class="section-bg">
              <h3>Dogodki</h3>
              <p>Vsi dogodki še nimajo natačnih datumov! O datumih vas še obvestimo.</p>
              <p>
                  <br>

                  <?php
                  $sql = "SELECT * FROM dogodek";
                  $result = mysqli_query($conn, $sql);
                  $resultCheck = mysqli_num_rows($result);
                  if($resultCheck > 0 ) {
                      while ($row = mysqli_fetch_assoc($result)) {
                          $ime = $row['Ime'];
                          echo
                              "<div>
                <h2>" . $row['Ime'] . "</h2>
                <p>" . $row['Opis'] . "</p>
                <p><b>Kraj dogodka:</b> " . $row['Kraj'] . "</p>
                <p><b>Čas dogodka: </b>" . $row['Cas'] . "</p>
				 <a name=\"prijava\" href=\"prijava.php?dogodek=$ime\" class=\"btn btn-warning\" >PRIJAVA NA DOGODEK</a>
				 <br>     
				 <br>
				 <br>
                </div>";

                      }
                  }

                  ?></p>
              </section>
          </form>
          </div>
          </div>
        </div>



    <!--==========================
      Services Section
    ============================-->

    <!--==========================
      Why Us Section
    ============================-->


    <!--==========================
      Portfolio Section
    ============================-->


    <!--==========================
      Clients Section
    ============================-->


    <!--==========================
      Team Section
    ============================-->


    <!--==========================
      Clients Section
    ============================-->


    <!--==========================
      Contact Section
    ============================-->


  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">


        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="jquery/jquery.min.js"></script>
  <script src="jquery/jquery-migrate.min.js"></script>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="easing/easing.min.js"></script>
  <script src="mobile-nav/mobile-nav.js"></script>
  <script src="wow/wow.min.js"></script>
  <script src="waypoints/waypoints.min.js"></script>
  <script src="counterup/counterup.min.js"></script>
  <script src="owlcarousel/owl.carousel.min.js"></script>
  <script src="isotope/isotope.pkgd.min.js"></script>
  <script src="lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>

</body>
</html>
