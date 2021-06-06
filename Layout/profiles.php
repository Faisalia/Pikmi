<?php
    session_start();
    if( !isset($_SESSION["email"]) ) {
        header("Location: index.php");
        exit;
    }
    require 'config.php';
    $email = $_SESSION["email"];

    if(isset($_POST['buatpp'])){

        $buat = buatprofil($_POST);
        if( $buat > 0 ) {
            echo "Profil Anda berhasil dibuat!";
        }
        else
        {
            echo "Profil Anda gagal dibuat!";
        }
    }
    
    if(isset($_POST['ubahpp'])){
        
        $ubah = ubahprofil($_POST);
        if( $ubah > 0 ) {
            echo "Profil Anda berhasil diubah!";
        }
        else
        {
            echo "Profil Anda gagal diubah!";
        }
    }
    
    
    $result = mysqli_query($db, "SELECT * FROM mahasiswa WHERE email = '$email'");
    if( mysqli_num_rows($result) === 0 ) {
        header("Location: buatprofile.php");
        exit;
    
    }
    
   // session_start();
   // $row=mysqli_query($db, "SELECT * FROM mahasiswa WHERE email='$_SESSION['email']");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
</head>

<body>
	<header>
		<h1>Profile Page</h1>
	</header>

	<ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" aria-current="" href="home.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="member.php">Member</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="idea.php">Ideas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="profiles.php">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="logout.php" tabindex="-1" aria-disabled="true" onclick="return confirm('Apakah Anda yakin ingin keluar?');">Logout</a>
        </li>
    </ul>

<?php



?>
<br><br>    
<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <img src="img/<?= $row["foto"] ?>" width="150"><br><br>
    <a class="profile-text">Email   <br><?= $row["email"] ?></a><br><br>
    <a class="profile-text">Nama Lengkap  <br><?= $row["nama_lengkap"] ?></a><br><br>
    <a class="profile-text">Nama Panggilan  <br> <?= $row["panggilan"] ?></a><br><br>
    <a class="profile-text">NIM   <br><?= $row["nim"] ?></a><br><br>
    <a class="profile-text">Jurusan   <br><?= $row["jurusan"] ?></a><br><br>
    <a class="profile-text">Fakultas   <br><?= $row["fakultas"] ?></a><br><br>
    <a class="profile-text">No. Whatsapp   <br><?= $row["whatsapp"] ?></a><br><br>
    <a class="profile-text">Username Instagram  <br> <?= $row["instagram"] ?></a><br><br>
    <a class="profile-text">Komitmen   <br><?= $row["komitmen"] ?></a><br><br>
    <a class="profile-text">Keahlian   <br><?= $row["keahlian"] ?></a><br><br>
    <a class="profile-text">Pengalaman   <br><?= $row["pengalaman"] ?></a><br><br>
    <a class="profile-text">Kesibukan Saat ini <br> <?= $row["kesibukan"] ?></a><br><br>
    <a href="editprofile.php?id=<?= $row["id"]; ?>">Edit Profile</a>
    <?php endwhile; ?>

    <br>
	</body>
</html>