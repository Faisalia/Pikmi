<?php
    require 'config.php';
    $id=$_GET["id"];
    $ide=query("SELECT * FROM idea WHERE id=$id")[0];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Ide</title>
</head>
<body>
	<header>
		<h1>Form Edit Ide</h1>
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
            <a class="nav-link disabled" href="index.php" tabindex="-1" aria-disabled="true" onclick="return confirm('Apakah Anda yakin ingin keluar?')";>Logout</a>
        </li>
    </ul>

    <br>


    <form action="idea.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $ide["id"]; ?>">
            <input type="hidden" name="posterlama" value="<?= $ide["poster"]; ?>">
                    <div class="col-12">
                        <label for=poster">Poster</label>
                        <img src="img/<?= $ide["poster"]; ?>" width="50">
                        <input type="file" name="poster" id="poster">
                        <br><br><a>format: jpg, jpeg, png | size max: 3 MB</a><br>
                    </div><br>
                    <div class="col-md-4">
                        <label for="judul">Judul</label>
                        <input type="varchar" name="judul" id="judul"  value="<?= $ide["judul"]; ?>" required>
                    </div><br>

                    <button type="submit" name="ubah" onclick="return confirm
                    ('Mengunggah judul atau ide Anda dapat membantu Anda untuk mencari rekan yang tepat, tetapi ada kemungkinan terjadinya plagiasi terhadap ide Anda. Apakah Anda tetap ingin mengunggahnya?')";>
                    Save</button>
                    
    </form>


	</body>
</html>
