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
                    <a class="nav-link" style="color: white" href="admin.php">Admin</a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<br>
<br>
<br>


<section id="services" class="section-bg">
    <div class="container">



        <div>

            <div  data-wow-duration="1.4s">

                <h3>Vnos Dogodka</h3>
                <br>
                <form action="insert.php" method="post">

                    Ime dogodka: <input type="text" name="ime">
                    <br>
                    <br>
                    Opis dogodka: <textarea rows="4" cols="40" name="opis"></textarea>
                    <br>
                    <br>

                    Kraj dogodka:
                    <select name="kraj_dogodka">
                        <option value="Lent">Lent</option>
                        <option value="Trg Leona Štuklja">Trg Leona Štuklja</option>
                        <option value="Dvorana Tabor">Dvorana Tabor</option>
                        <option value="Lenart">Lenart</option>


                    </select>
                    <br>
                    Čas dogodka:
                    <select name="cas_dogodka">
                        <option value="Januar">Januar</option>
                        <option value="Februar">Februar</option>
                        <option value="Marec">Marec</option>


                    </select>


                    <br>
                    <input type="submit" value="Potrdi">

                    <br>

                    <br><br>





            </div>
</section><!-- #services -->