<?php
    session_start();
    if( isset($_SESSION["email"]) ) {
        header("Location: home.php");
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>

<body>
	<header>
		<h1>Sign Up</h1>
	</header>

	<?php if(isset($_GET['statusemaildaftar'])): ?>
	<p>
		<?php
			if($_GET['statusemaildaftar'] == 'gagal'){
				echo "Email sudah terdaftar!";
			} 
		?>
    </p>
    <?php endif; ?>

	<form action="prosespendaftaran.php" method="POST">
		<fieldset>
		<p>
			<label for="email">Email </label>
			<input type="text" name="email" id="email" placeholder="ganteng@apps.ipb.ac.id" required>
        </p>
        <p>
			<label for="pw">Password </label>
			<input type="text" name="pw" id="pw" placeholder="***" required>
		</p>
		
		<p>
            <input type="submit" value="Sign Up" name="daftar" />
        </p>
        <br><a>Already have an account?</a><br>
        <a href="index.php">Login here</a><br>
		</fieldset>
	</form>

	</body>
</html>
