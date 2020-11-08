<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/stylelogin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/db588e7385.js" crossorigin="anonymous" SameSite="None"></script>


</head>

<body>
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/img.svg">
        </div>
        <div class="login-container">
            <form name="form1" method="POST">
                <img class="avatar" src="img/avatar.svg">
                <h2>Welcome Folk!</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user" aria-hidden="true"></i></div>
                    <div>
                        <h5>Email</h5>
                        <input type="text" class="input" name="user">
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

                <input type="submit" class="btn" value="Register" name="submit">
                <!-- onclick="ValidateEmail(document.form1.text1)" -->
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <?php
    if (isset($_POST["submit"])) {
        if (!empty($_POST['user']) && !empty($_POST['password'])) {
            $usern = $_POST['user'];
            $pass = $_POST['password'];


            $servername = "localhost";
            $user = "root";
            $password = "";
            $db = "destination_blog";

            $connection = mysqli_connect($servername, $user, $password, $db);

            $query = mysqli_query($connection, "SELECT * FROM login WHERE username='" . $usern . "'");
            $numrows = mysqli_num_rows($query);
            if ($numrows == 0) {
                $sql = "INSERT INTO login (`username`, `password`) VALUES ('$usern', '$pass');";

                $result = mysqli_query($connection, $sql);
                if ($result) {
                    echo "Account Successfully Created";
                } else {
                    echo "Failure!";
                }
            } else {
                echo "That username already exists! Please try again with another.";
            }
        } else {
            echo "All fields are required!";
        }
    }
    ?>

</body>

</html>