<?php
$db = mysqli_connect("localhost", "root", "", "pikmi");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$email = strtolower(stripslashes($_POST['email']));
	$pw = mysqli_real_escape_string($db, $_POST['pw']);

	$result= mysqli_query($db, "SELECT email FROM akun WHERE email='$email'");
	if(mysqli_fetch_assoc($result)) {
		header('Location: index.php?statusemaildaftar=gagal');
		exit;
	}

	$pw = password_hash($pw, PASSWORD_DEFAULT);

	// buat query
	$sql = "INSERT INTO akun (email,  pw) VALUES ('$email', '$pw')";
  	$query = mysqli_query($db, $sql);

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?statusdaftar=sukses');
	} else {
		// kalau gagal alihkan ke halaman index.php dengan status=gagal
		header('Location: index.php?statusdaftar=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
