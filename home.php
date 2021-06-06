<?php

    session_start();
    if( !isset($_SESSION["email"]) ) {
        header("Location: index.php");
        exit;
    }
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <!-- CSS Kita -->
    <link rel="stylesheet" href="style.css">


    <title>Home</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #800080;">
    <div class="container">
        <a class="navbar-brand" href="home.php"><img src="img/logo1.png" alt="" width="40" height="32" class="d-inline-block align-text-top">Pikmi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link text-white mr-2" href="home.php">Home </a>
                <a class="nav-item nav-link text-white mr-2" href="member.php">Member</a>
                <a class="nav-item nav-link text-white mr-2" href="memberdosen.php">Lecturer</a>
                <a class="nav-item nav-link text-white mr-2" href="idea.php">Idea PKM</a>
                <a class="nav-item nav-link text-white mr-2" href="profiles.php">Profile </a>

            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="logout.php" tabindex="-1" aria-disabled="true" onclick="return confirm('Apakah Anda yakin ingin keluar?');" class="btn btn-outline-warning mr-1" type="submit">Logout</a>


                </li>
            </ul>

        </div>
    </div>
</nav>

<div class="row">
    <div class="col">

        <body>

            <!-- welcome section -->
            <section class="home" id="home">

                <h1>Pikmi - Pick your Dreamteam here.</h1>
                <p>Website yang tepat buat kamu yang lagi mencari kawan hebat.</p>


                <div class="shape"></div>

            </section>

            <!-- Member section -->
            <section class="Member" id="Member">
                <img src="team.svg" alt="" width="250">
                <div class="content">
                    <h3>Temukan Teman yang tepat</h3>
                    <p>Kami mengerti bahwa dalam mengikuti sebuah kompetisi kita harus mempersiapkan yang terbaik, dan untuk menjadi yang terbaik, kita juga perlu membuat tim dengan komposisi terbaik, oleh karena itu, Pikmi akan membantu kamu mencari teman untuk berproses dan berjuang bersamamu.</p>
                    <p style="font-style: italic;">"Talent win games, but teamwork win competition."</p>
                    
                    <a href="member.php" class="btn btn-outline-warning mr-1" type="submit">Member Page</a>
                </div>

            </section>

            <section class="Dosen" id="Dosen">

                <div class="content">
                    <h3>Dibimbing oleh para dosen yang ahli di bidangnya</h3>
                    <p>Kami paham bahwa dalam setiap proses yang kita lakukan perlu mendapat bimbingan oleh para ahli, IPB memiliki banyak dosen yang ahli di bidangnya masing-masing dan disini adalah tempat bagimu untuk bertemu dan terhubung dengan mereka</p>
                    <p style="font-style: italic;">"Expert was once a beginner"</p>
                    <a href="memberdosen.php" tabindex="-1" aria-disabled="true" class="btn btn-outline-light ml-1" type="submit">Lecturer Page</a>
                </div>

                <img src="teach.svg" alt="250">
            </section>

            <!-- Ide section -->
            <section class="Ide" id="Ide">
            <img src="Ide.svg" alt="" width="250">

                <div class="content">
                    <h3>Berkolaborasi dan Ciptakan Ide Hebat</h3>
                    <p> Dunia saat ini dibangun dari ide-ide sederhana yang dieksekusi dengan tepat, Pikmi menyediakan platform yang tepat bagi kamu untuk mengajak teman lainnya dalam mewujudkan ide hebatmu </p>
                    <p style="font-style: italic;">"No matter what people tell you, words and ideas can chnage the world."</p>
                    <a href="idea.php" class="btn btn-outline-light mr-1" type="submit">Idea PKM Page</a>
                </div>
                


            </section>

        </body>

    </div>
</div>

