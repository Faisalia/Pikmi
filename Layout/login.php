<!DOCTYPE html>
<html>

<head>
    <title>Login | Pikmi-Pick your Dreamteam</title>
    <link rel="stylesheet" href="/style/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>


    <h2>Welcome To Pikmi!</h2>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="/pages/home.php">
                <h1>Create Account</h1>

                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button>Register</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="/pages/home.php">
                <h1>Login</h1>


                <input type="email" placeholder="Username" />
                <input type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button>Login</button>
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



    <script type="text/javascript" src="/js/login.js"></script>
</body>

</html>