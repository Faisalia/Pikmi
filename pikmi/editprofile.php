<?php
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
            <a class="nav-link" href="profiles.php">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="index.php" tabindex="-1" aria-disabled="true" onclick="return confirm('Apakah Anda yakin ingin keluar?');>Logout</a>
        </li>
    </ul>

    
    <div class="form-floating mb-3">
        <label for="email">Email                </label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
    </div><br>
    <div class="form-floating mb-3">
        <label for="Nama Lengkap">Nama Lengkap              </label>
        <input type="text" class="form-control" id="Nama Lengkap" name="Nama Lengkap" placeholder="Steve Jobs">
    </div><br>
    <div class="form-floating mb-3">
        <label for="Panggilan">Nama Panggilan             </label>
        <input type="text" class="form-control" id="Panggilan" name="Panggilan" placeholder="">
    </div><br>
    <div class="form-floating mb-3">
        <label for="NIM">NIM                     </label>
        <input type="text" class="form-control" id="NIM" name="NIM" placeholder="G6419xxxx">
    </div><br>
    <div class="form-floating mb-3">
        <label for="Jurusan">Jurusan                    </label>
        <input type="text" class="form-control" id="Jurusan" name="Jurusan" placeholder="">
    </div><br>
    <div class="form-floating mb-3">
        <label for="Fakultas">Fakultas                      </label>
        <input type="text" class="form-control" id="Fakultas" name="Fakultas" placeholder="">
    </div><br>
    <div class="form-floating mb-3">
        <label for="No WA">Nomor Whatsapp             </label>
        <input type="text" class="form-control" id="No WA" name="No WA" placeholder="">
    </div><br>
    <div class="form-floating mb-3">
        <label for="Id Instagram">Username Instagram                     </label>
        <input type="text" class="form-control" id="Id Instagram" name="Id Instagram" placeholder="">
    </div><br>
    <div class="form-floating mb-3">
        <label for="Komitmen">Komitmen                    </label>
        <input type="text" class="form-control" id="Komitmen" name="Komitmen" placeholder="">
    </div><br>
    <div class="form-floating mb-3">
        <label for="Keahlian">Keahlian                      </label>
        <input type="text" class="form-control" id="Keahlian" name="Keahlian" placeholder="">
    </div><br>
    <div class="form-floating mb-3">
        <label for="Pengalaman">Pengalaman                    </label>
        <input type="text" class="form-control" id="Pengalaman" name="Pengalaman" placeholder="">
    </div><br>
    <div class="form-floating mb-3">
        <label for="Kesibukan">Kesibukan Saat Ini                      </label>
        <input type="text" class="form-control" id="Kesibukan" name="Kesibukan" placeholder="">
    </div><br>
	</body>
</html>