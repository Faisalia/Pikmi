<?php
    session_start();
    if( !isset($_SESSION["email"]) ) {
        header("Location: index.php");
        exit;
    }
    require 'config.php';
    $email = $_SESSION["email"];
    $id=$_GET["id"];
    $result = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id = $id");
   // session_start();
   // $row=mysqli_query($db, "SELECT * FROM mahasiswa WHERE email='$_SESSION['email']");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="profilestyle.css">
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

<body>
    
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <div class ="row">
        <div class="column1">
            <div class="profilepic-card">
                <div class="image-container">
                    <img src="img/<?= $row["foto"] ?>">
                    <div class="profilepictext">
                        <h2><?= $row["nama_lengkap"] ?></h2>
                        <hr class="strikeline">
                        <p><?= $row["nim"] ?></p> 
                    </div>
                </div>
            </div>
        </div>
        <div class="column1">
            <div class="profileinfo-card">
                <div class="textinfo1">
                    <h4> Email</h4>
                    <h4> Jurusan</h4>
                    <h4> Fakultas</h4>
                    <h4> No Whatsapp</h4>
                    <h4> Instagram</h4>
                    <h4> Keahlian</h4>
                    <h4> Pengalaman</h4>
                </div>
                <div class="textinfo1">
                    <h5><?= $row["email"] ?></h5>
                    <h5><?= $row["jurusan"] ?></h5>
                    <h5><?= $row["fakultas"] ?></h5>
                    <h5><?= $row["whatsapp"] ?></h5>
                    <h5><?= $row["instagram"] ?> </h5>
                    <h5><?= $row["keahlian"] ?></h5>
                    <h5><?= $row["pengalaman"] ?></h5>
                </div>
            </div>
        </div>
    </div>
    <div class ="row">
        <div class="column2">
            <div class="profiledesc-card">
                <h2> Kesibukan Saat Ini </h2>
                <div class="descnya">
                </div>
                <p> <?= $row["kesibukan"] ?> </p>
            </div>
        </div>
        <div class="column2">
            <div class="profileportofolio-card">
                <h3> Panggilan </h3>
                <div class="portonya"> 
               
                </div>
                <p> <?= $row["panggilan"] ?> </p>
                <h3> Komitmen </h3>
                <div class="komitmennya">
                
                </div>
                    <p> <?= $row["komitmen"] ?> </p>
            </div>
            
        </div>
    </div> 
    <!--
    <img src="img/<?= $row["foto"] ?>" width="150">
    <a class="profile-text">Email   <br><?= $row["email"] ?></a>
    <a class="profile-text">Nama Lengkap  <br><?= $row["nama_lengkap"] ?></a>
    <a class="profile-text">Nama Panggilan  <br> <?= $row["panggilan"] ?></a>
    <a class="profile-text">NIM   <br><?= $row["nim"] ?></a>
    <a class="profile-text">Jurusan   <br><?= $row["jurusan"] ?></a>
    <a class="profile-text">Fakultas   <br><?= $row["fakultas"] ?></a>
    <a class="profile-text">No. Whatsapp   <br><?= $row["whatsapp"] ?></a>
    <a class="profile-text">Username Instagram  <br> <?= $row["instagram"] ?></a>
    <a class="profile-text">Komitmen   <br><?= $row["komitmen"] ?></a>
    <a class="profile-text">Keahlian   <br><?= $row["keahlian"] ?></a>
    <a class="profile-text">Pengalaman   <br><?= $row["pengalaman"] ?></a>
    <a class="profile-text">Kesibukan Saat ini <br> <?= $row["kesibukan"] ?></a>
    -->
    <?php endwhile; ?>
	</body>
</html>