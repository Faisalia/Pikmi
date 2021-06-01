<?php
?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Ide</title>
</head>
<body>
	<header>
		<h1>Form Tambah Ide</h1>
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

                    <div class="col-12">
                        <label for=poster">Poster</label>
                        <input type="file" name="poster" id="poster"  placeholder="">
                        <br><br><a>format: jpg, jpeg, png | size max: 3 MB</a><br>
                    </div><br>
                    <div class="col-md-4">
                        <label for="judul">Judul</label>
                        <input type="varchar" name="judul" id="judul"  placeholder="" required>
                    </div><br>

                    <button type="submit" name="post" onclick="return confirm
                    ('Mengunggah judul atau ide Anda dapat membantu Anda untuk mencari rekan yang tepat, tetapi ada kemungkinan terjadinya plagiasi terhadap ide Anda. Apakah Anda tetap ingin mengunggahnya?')";>
                    Post</button>
                    
    </form>


	</body>
</html>
