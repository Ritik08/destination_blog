<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/stylelogin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db588e7385.js" crossorigin="anonymous" SameSite="None"></script>
    <script src=""></script>

</head>

<body>
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/img.svg">
        </div>
        <div class="login-container">
            <form action="" name="form1" method="POST">
                <img class="avatar" src="img/avatar.svg">
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user" aria-hidden="true"></i></div>
                    <div>
                        <h5>Email</h5>
                        <input type="text" class="input" name="text1">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock" aria-hidden="true"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>

                <a href="#">Forget Password?</a>
                <input type="submit" class="btn" value="Login" onclick="ValidateEmail(document.form1.text1)">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>