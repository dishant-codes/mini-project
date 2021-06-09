<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';

    $username = $_POST["username"];
    $password = $_POST["pwd"];

    $sql =  "SELECT * FROM `user` where Username='$username'";

    $result = mysqli_query($conn, $sql);

    $numRows = mysqli_num_rows($result);

    if ($numRows == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($password == $row['Password']) {
            $user_name = $row['Username'];
            $full_name = $row['fullName'];
            $email = $row['Email'];
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['user_name'] = $user_name;
            $_SESSION['full_name'] = $full_name;
            $_SESSION['user_email'] = $email;
        } else {
            header("Location: ../admin.php?login=fail");
            exit();
        }
        header("Location: ../adminPanel.php?login=success");
        exit();
    } else {
        header("Location: ../admin.php?login=fail");
        exit();
    }

    mysqli_close($conn);
}