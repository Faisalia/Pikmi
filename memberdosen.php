<?php
    session_start();
    if( !isset($_SESSION["email"]) ) {
        header("Location: index.php");
        exit;
    }
    require 'config.php';
    $result = mysqli_query($db, "SELECT * FROM dosbim");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Lecturer Page</title>
    <title>Member Page</title>
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
    <link rel="stylesheet" href="stylememberfaisal.css">
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
    <div class="row">
            <div class="card-dosen">
                <div class="upper-card">
                    <div class="image-container">
                        <img src="img/logo2.png" alt="profile-image">
                    </div>
                </div>
                <div class="lower-card-dosen">
                    <div>
                        <h2><?= $row["nama_lengkap"] ?></h2>
                        <h4><?= $row["nip"] ?></h4>
                        <hr class="linestrike"> 
                        <h6><?= $row["email"] ?></h6>
                        <h6><?= $row["jurusan"] ?></h6>
                        <h6><?= $row["fakultas"] ?></h6>
                        <h6><?= $row["whatsapp"] ?></h6>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

</body>
</html>