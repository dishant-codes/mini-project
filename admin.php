<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Blood Donation</title>
    <link rel="stylesheet" href="./assits/css/header.css">
    <link rel="stylesheet" href="./assits/css/login.css">
</head>

<body>
    <div class="admin">

        <div class="login">
            <form class="login-form" action="./components/_handleLogin.php" method="post">
                <h2>Login</h2>
                <hr width="50%">
                <div class="input-box">
                    <input class="form-input" type="text" placeholder="Username" name="username" required>
                    <span class="focus-border"></span>
                </div>
                <div class="input-box">
                    <input class="form-input" type="password" placeholder="Password" name="pwd" required>
                    <span class="focus-border"></span>
                </div>
                <button style="margin-top:1rem" type="submit" class="btn-s">Login</button>
            </form>
        </div>

    </div>


    <script>
    <?php
        if (isset($_GET['login'])) {
            $check_loggedin = $_GET['login'];
            if ($check_loggedin == "fail") {
                echo "alert('Invalid credentials!  Try Again...')";
            }
        }
        ?>

    function preventBack() {
        window.history.forward();
    }
    setTimeout("preventBack()", 0);
    window.onunload = function() {
        null
    };
    </script>
    <script src="./assits/js/main.js"></script>

</body>

</html>