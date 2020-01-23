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
<br>
<br>

<?php if(isset($_GET["dogodek"])){ ?>
<div class="container">
<h1>PRIJAVA NA DOGODEK <?php echo $_GET["dogodek"]; ?> USPEŠNA</h1>
</div>
<?php }
?>

    <?php
        $dogodek = $_GET["dogodek"];
        $username = $_SESSION['username'];
        $sql = "INSERT INTO prijava (username, dogodek)
                            VALUES ('$username', '$dogodek')";

        mysqli_query($db, $sql);
    ?>

</body>
</html>