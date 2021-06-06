<?php
session_start();
if( !isset($_SESSION["email"]) ) {
    header("Location: index.php");
    exit;
}
    require 'config.php';
    $id=$_GET["id"];
    $ide=query("SELECT * FROM idea WHERE id=$id")[0];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Ide</title>
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

<div class="editide-card" id="editide-card">
    <div class="kiri" id="kiri">
	<header>
		<h1>Form Edit Ide</h1>
    </header>
</div>
<div class="kanan" id="kanan">
    <form action="idea.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $ide["id"]; ?>">
            <input type="hidden" name="posterlama" value="<?= $ide["poster"]; ?>">
                    <div class="col-12">
                        <label for="poster">Poster</label>
                        <img src="img/<?= $ide["poster"]; ?>" width="50">
                        <input type="file" name="poster" id="poster">
                        <br><br><a>format: jpg, jpeg, png | size max: 3 MB</a><br>
                    </div><br>
                    <div class="col-md-4">
                        <label for="bidang" class="form-label">Bidang</label>
                        <select class="form-select" name="bidang" aria-label="Default select example" value="<?= $ide["bidang"]; ?>" required>
                            <option value="">...</option>
                            <option value="PKM_AI">PKM-AI</option>
                            <option value="PKM-GFK">PKM-GFK</option>
                            <option value="PKM-GT">PKM-GT</option>
                            <option value="PKM-K">PKM-K</option>
                            <option value="PKM-KC">PKM-KC</option>
                            <option value="PKM-PI">PKM-PI</option>
                            <option value="PKM-PM">PKM-PM</option>
                            <option value="PKM-RE">PKM-RE</option>
                            <option value="PKM-RSH">PKM-RSH</option>
                        </select>
                    </div><br>
                    <div class="col-md-4">
                        <label for="judul">Judul</label>
                        <textarea width="35px" type="varchar" name="judul" id="judul"  required><?= $ide["judul"]; ?></textarea>
                    </div>

                    <button class="simpan" type="submit" name="ubah" onclick="return confirm
                    ('Mengunggah judul atau ide Anda dapat membantu Anda untuk mencari rekan yang tepat, tetapi ada kemungkinan terjadinya plagiasi terhadap ide Anda. Apakah Anda tetap ingin mengunggahnya?')";>
                    Save</button>
                    
    </form>
</div>
</div>

	</body>
</html>
