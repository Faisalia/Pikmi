<?php
    session_start();
    if( !isset($_SESSION["email"]) ) {
        header("Location: index.php");
        exit;
    }

    require 'config.php';
    $id=$_GET["id"];
    
    $profil=query("SELECT * FROM mahasiswa WHERE id=$id")[0];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile Page</title>
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
    <!-- <img src="img/<?= $row["foto"] ?>" width="150">
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
    <a href="editprofile.php?id=<?= $row["id"]; ?>">Edit Profile</a> 
-->
<div class="editprofile-card" id="editprofile-card">
    <form action="profiles.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $profil["id"]; ?>">
        <input type="hidden" name="email" value="<?= $profil["email"]; ?>">
        <input type="hidden" name="fotolama" value="<?= $profil["foto"]; ?>">
        <div class="col-12">
            <label for="foto">Foto Profil</label>
            <img src="img/<?= $profil["foto"]; ?>" width="50">
            <input type="file" name="foto" id="foto">
            <a>format: jpg, jpeg, png | size max: 3 MB</a>
        </div>
        <div class="form-floating mb-3">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input  type="varchar" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= $profil["nama_lengkap"]; ?>" required>
        </div>
        <div class="form-floating mb-3">
            <label for="panggilan">Nama Panggilan</label>
            <input type="varchar" class="form-control" id="panggilan" name="panggilan" value="<?= $profil["panggilan"]; ?>" required>
        </div>
        <div class="form-floating mb-3">
            <label for="nim">NIM </label>
            <input type="varchar" class="form-control" id="nim" name="nim" value="<?= $profil["nim"]; ?>" required>
        </div>
        <div class="form-floating mb-3">
            <label for="jurusan">Jurusan </label>
            <input type="varchar" class="form-control" id="jurusan" name="jurusan" value="<?= $profil["jurusan"]; ?>" required>
        </div>
        <div class="col-md-4">
                    <label for="fakultas" class="form-label">Fakultas</label>
                    <select class="form-select" id="fakultas" name="fakultas" aria-label="Default select example" required>
                            <option value="">...</option>
                            <option value="FAPERTA">FAPERTA</option>
                            <option value="FKH">FKH</option>
                            <option value="FPIK">FPIK</option>
                            <option value="FAPET">FAPET</option>
                            <option value="FAHUTAN">FAHUTAN</option>
                            <option value="FATETA">FATETA</option>
                            <option value="FMIPA">FMIPA</option>
                            <option value="FEM">FEM</option>
                            <option value="FEMA">FEMA</option>
                            <option value="SV">SV</option>
                            <option value="SB">SB</option>
                    </select>
        </div>
        <div class="form-floating mb-3">
            <label for="whatsapp">Nomor Whatsapp</label>
            <input type="varchar" class="form-control" id="whatsapp" name="whatsapp" value="<?= $profil["whatsapp"]; ?>" required>
        </div>
        <div class="form-floating mb-3">
            <label for="instagram">Username Instagram</label>
            <input type="varchar" class="form-control" id="instagram" name="instagram" value="<?= $profil["instagram"]; ?>" required>
        </div>
        <div class="col-md-4">
                    <label for="komitmen" class="form-label">Komitmen</label>
                    <select class="form-select" id="fakultas" name="komitmen" aria-label="Default select example" required>
                            <option value="">...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                    </select>
        </div>
        <div class="form-floating mb-3">
            <label for="keahlian">Keahlian</label>
            <input type="varchar" class="form-control" id="keahlian" name="keahlian" value="<?= $profil["keahlian"]; ?>" required>
        </div>
        <div class="form-floating mb-3">
            <label for="pengalaman">Pengalaman </label>
            <input type="varchar" class="form-control" id="pengalaman" name="pengalaman" value="<?= $profil["pengalaman"]; ?>" required>
        </div>
        <div class="form-floating mb-3">
            <label for="kesibukan">Kesibukan Saat Ini </label>
            <input type="varchar" class="form-control" id="kesibukan" name="kesibukan" value="<?= $profil["kesibukan"]; ?>" required>
        </div>
        <button class="simpan" type="submit" name="ubahpp">Save Profile</button>
        </form>
</div>
</body>
</html>