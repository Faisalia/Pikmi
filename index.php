<?php
    session_start();
    if( isset($_SESSION["email"]) ) {
        header("Location: home.php");
        exit;
    }

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
            global $pw;
           $row = mysqli_fetch_assoc($cekemail);
           $password = $row["pw"];
           $cekpw = password_verify($pw, $password);
           var_dump($cekpw);
           if( $cekpw ){
            global $email;
               $_SESSION["email"]=$email;
               header("Location: home.php?email=<?= $email; ?>");
               exit;
           }
        }
        
        $error = true;
    }   

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login | Pikmi-Pick your Dreamteam</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


    <h2>Welcome To Pikmi!</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="prosespendaftaran.php" method="POST">
                <h1>Create Account</h1>

                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="pw" placeholder="Password" required/>
                <button name="daftar">Register</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="index.php" method="POST">
                <h1>Login</h1>
                <?php if(isset($_GET['statusdaftar'])): ?>
                    <p>
                        <?php
                            if($_GET['statusdaftar'] == 'sukses'): ?>
                                <p style="color: green; font-style: italic;">Akun Berhasil Dibuat!</p>
                            <?php
                            if($_GET['statusdaftar'] == 'gagal'): ?>
                                <p style="color: red; font-style: italic;">Pendaftaran gagal!</p>
                            <?php endif; ?>
                        <?php endif; ?>
                    </p>
                <?php endif; ?>
                <?php if(isset($_GET['statusemaildaftar'])): ?>
                    <p>
                        <?php
                            if($_GET['statusemaildaftar'] == 'gagal'): ?>
                                <p style="color: red; font-style: italic;"> Email sudah terdaftar!</p>
                        <?php endif; ?>
                    </p>
                 <?php endif; ?>
                <?php if(isset($error)) : ?>
                     <p style="color: red; font-style: italic;"> Email atau password salah!</p>
                <?php endif ?>
                <input type="email" name="email" placeholder="Email" required/>
                <input type="password" name="pw" placeholder="Password" required/>
                <button  name="login">Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>If you already had account just login here</p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>If you are a newcomer, you can make your new account here</p>
                    <button class="ghost" id="signUp">Register</button>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript" src="login.js"></script>
</body>

</html>