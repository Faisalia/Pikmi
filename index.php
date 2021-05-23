<?php
    $db = mysqli_connect("localhost", "root", "", "pikmi");

    if(isset($_POST['login'])){
    
        // ambil data dari formulir
        $email = $_POST['email'];
        $pw = $_POST['pw'];
    
    
    
        // buat query
        global $db;
        $cekemail = mysqli_query($db, "SELECT * FROM akun WHERE email = '$email'");
    
        // apakah query simpan berhasil?
        if( mysqli_num_rows($cekemail) === 1 ) {
           $row = mysqli_fetch_assoc($cekemail);
           if( $pw === $row["pw"] ){
               header("Location: home.php");
               exit;
           }
        }
        
        $error = true;
    }   

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
    
    <?php if(isset($_GET['statusdaftar'])): ?>
	<p>
		<?php
			if($_GET['statusdaftar'] == 'sukses'){
				echo "Akun Berhasil Dibuat!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
    </p>
    <?php endif; ?>
    
<?php if(isset($error)) : ?>
    <p style="color: red; font-style: italic;"> Email atau password salah!</p>
<?php endif ?>

    <form action="" method="POST">

                    <div class="col-12">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email"  placeholder="email@apps.ipb.ac.id" required>
                    </div>
                    <div class="col-md-4">
                        <label for="pw">Password</label>
                        <input type="password" name="pw" id="pw"  placeholder="password" required>
                    </div>

                    <button type="submit" name="login">Login</button>
                    
</form>

        <br><a>Don't have an account?</a><br>
        <a href="formdaftar.php">Sign up here</a><br>


	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>

	<?php if(isset($_GET['statusupdate'])): ?>
	<p>
		<?php
			if($_GET['statusupdate'] == 'sukses'){
				echo "Update data berhasil!";
			} else {
				echo "Update data gagal!";
			}
		?>
	</p>
	<?php endif; ?>

	</body>
</html>
