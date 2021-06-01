<?php
$db = mysqli_connect("localhost", "root", "", "pikmi");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$email = $_POST['email'];
	$pw = $_POST['pw'];

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
