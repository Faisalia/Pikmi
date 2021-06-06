<?php
    session_start();
    if( !isset($_SESSION["email"]) ) {
        header("Location: index.php");
        exit;
    }
    $email=$_SESSION["email"];
    require 'config.php';
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
            <a class="nav-link disabled" href="logout.php" tabindex="-1" aria-disabled="true" onclick="return confirm('Apakah Anda yakin ingin keluar?')";>Logout</a>
        </li>
    </ul>

<form action="profiles.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" for="email" name="email" value="<?= $email; ?>">
    <div class="col-12">
            <label for=foto">Foto Profil</label>
            <input type="file" name="foto" id="foto"  placeholder="">
            <br><br><a>format: jpg, jpeg, png | size max: 3 MB</a><br>
    </div><br>
    <div class="form-floating mb-3">
        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="varchar" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
    </div><br>
    <div class="form-floating mb-3">
        <label for="panggilan">Nama Panggilan</label>
        <input type="varchar" class="form-control" id="panggilan" name="panggilan" required>
    </div><br>
    <div class="form-floating mb-3">
        <label for="nim">NIM </label>
        <input type="varchar" class="form-control" id="nim" name="nim" required>
    </div><br>
    <div class="form-floating mb-3">
        <label for="jurusan">Jurusan </label>
        <input type="varchar" class="form-control" id="jurusan" name="jurusan" required>
    </div><br>
    <div class="col-md-4">
                <label for="fakultas" class="form-label">Fakultas</label>
                <select class="form-select" name="fakultas" aria-label="Default select example" required>
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
    </div><br>
    <div class="form-floating mb-3">
        <label for="whatsapp">Nomor Whatsapp</label>
        <input type="varchar" class="form-control" id="whatsapp" name="whatsapp" required>
    </div><br>
    <div class="form-floating mb-3">
        <label for="instagram">Username Instagram</label>
        <input type="varchar" class="form-control" id="instagram" name="instagram" required>
    </div><br>
    <div class="col-md-4">
                <label for="komitmen" class="form-label">Komitmen</label>
                <select class="form-select" name="komitmen" aria-label="Default select example" required>
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
     </div><br>
    <div class="form-floating mb-3">
        <label for="keahlian">Keahlian</label>
        <input type="varchar" class="form-control" id="keahlian" name="keahlian" required>
    </div><br>
    <div class="form-floating mb-3">
        <label for="pengalaman">Pengalaman </label>
        <input type="varchar" class="form-control" id="pengalaman" name="pengalaman" required>
    </div><br>
    <div class="form-floating mb-3">
        <label for="kesibukan">Kesibukan Saat Ini </label>
        <input type="varchar" class="form-control" id="kesibukan" name="kesibukan" required>
    </div><br>
    <button type="submit" name="buatpp">Save Profile</button>
</form>
	</body>
</html>