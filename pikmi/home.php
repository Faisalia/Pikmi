<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pikmi!</title>
</head>
<body>
	<header>
		<h1>Pikmi!</h1>
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
            <a class="nav-link disabled" href="index.php" tabindex="-1" aria-disabled="true" onclick="return confirm('Apakah Anda yakin ingin keluar?');">Logout</a>
        </li>
    </ul>
    
    <header>
        <h1>Pikmi!</h1>
        <h2> Pikmi adalah suatu web aplikasi yang bertujuan membantu mahasiswa aktif IPB University untuk mencari rekan yang tepat dalam ajang Program Kreativitas Mahasiswa (PKM)</h2>
    </header>

    <br><a>GO TO</a><br>
	<form  action="member.php" method="POST">
		<p>
            <input type="submit" value="Member Page"  name="member" />
        </p>
	</form>
    <form  action="idea.php" method="POST">
		<p>
            <input type="submit" value="Ideas Page"  name="idea" />
        </p>
	</form>

	</body>
</html>
