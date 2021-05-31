<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ideas Page</title>
</head>

<body>
	<header>
		<h1>Ideas Page</h1>
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

    <?php
    
    if(isset($_POST['post'])){
    
        // ambil data dari formulir
        $poster = upload();
        if(!$poster)
        {
            return false;
        }
        $judul = htmlspecialchars($_POST['judul']);

        $query="INSERT INTO idea VALUES ('', '$poster', '$judul')";
        mysqli_query($db, $query);

        if( mysqli_affected_rows($db) > 0 ) {
            echo "Ide Anda berhasil ditambahkan!";
        }
        else
        {
            echo "Ide Anda gagal ditambahkan!";
        }

    } 
    
    if(isset($_POST['ubah'])){
    

        if( ubah($_POST) > 0 ) {
            echo "Ide Anda berhasil diubah!";
        }
        else
        {
            echo "Ide Anda gagal diubah!";
        }

    }

    $result = mysqli_query($db, "SELECT * FROM idea");

    ?>

    <br>
    <form  action="tambahide.php" method="POST">
		<p>
            <input type="submit" value="Tambah Ide"  name="ide" />
        </p>
	</form>
    <br><br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Poster</th>
        <th>Judul</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $row["poster"] ?>" width="50"> </td>
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


	</body>
</html>