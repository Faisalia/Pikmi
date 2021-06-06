<?php
    session_start();
    if( !isset($_SESSION["email"]) ) {
        header("Location: index.php");
        exit;
    }
    require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ideas Page</title>
    <!-- Required meta tags -->
    
    <link rel="stylesheet" href="style.css">
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
<div class="Idea-page" id="Idea-page">


    <?php
    
    if(isset($_POST['post'])){
    
        // ambil data dari formulir
        if($_FILES['poster']['error'] === 4)
        {
            $poster="empty.png";
        }
        else {
            $poster=upload();
        }
        $bidang = htmlspecialchars($_POST['bidang']);
        $judul = htmlspecialchars($_POST['judul']);

        $query="INSERT INTO idea VALUES ('', '$poster', '$bidang', '$judul')";
        mysqli_query($db, $query);

        if( mysqli_affected_rows($db) > 0 ) {
            echo "<script>
            alert('Ide Anda berhasil ditambahkan!')
            </script>";
        }
        else
        {
            echo "<script>
            alert('Ide Anda gagal ditambahkan!')
            </script>";
        }

    } 
    
    if(isset($_POST['ubah'])){
    

        if( ubah($_POST) > 0 ) {
            echo "<script>
            alert('Ide Anda berhasil diubah!')
            </script>";
        }
        else
        {
            echo "<script>
            alert('Ide Anda gagal diubah!')
            </script>";
        }

    }

    $result = mysqli_query($db, "SELECT * FROM idea");

    ?>

    <br>
    <div class="tombol">
    <form  action="tambahide.php" method="POST">
    <button class="btn btn-outline-light mr-1" type="submit" name="ide" >Add Idea</button>
	</form>
</div>
    <br><br>

<table class="table table-dark table-hover" border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Poster</th>
        <th>Bidang</th>
        <th>Judul</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $row["poster"] ?>" width="50"> </td>
        <td><?= $row["bidang"]; ?></td>
        <td><?= $row["judul"]; ?></td>
        <td>
            <a href="editide.php?id=<?= $row["id"]; ?>">Edit</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ide ini?');"
            >Delete</a>
        </td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

    </table>    
    </div>

	</body>
</html>