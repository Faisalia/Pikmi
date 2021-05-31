<?php
    require 'config.php';
    $result = mysqli_query($db, "SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Member Page</title>
</head>

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

<body>
	<header>
		<h1>Member Page</h1>
	</header>
<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
	<div class="card" style="width: 18rem;">
        <img src="logo1.png" class="card-img-top" width=50 alt="...">
        <div class="card-body">
    <h3 class="card-title"><?= $row["nama_lengkap"] ?></h3><br>
    <h4 class="card-title"><?= $row["nim"] ?></h4>
    <p class="card-text"><?= $row["keahlian"] ?></p>
    <a href="person.php" class="btn btn-primary">Lihat lebih lanjut</a>
  </div>
</div><br>
<?php endwhile; ?>

	</body>
</html>