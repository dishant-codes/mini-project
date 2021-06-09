<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';

    $fullname = $_POST["name"];
    $mobile_no = $_POST["Mobnumber"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql =  "INSERT INTO `contacts`(`name`, `mobile`, `email`, `message`) VALUES ('$fullname','$mobile_no','$email','$message')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ../contact.php?send=success");
        exit();
    } else {
        echo 'error';
        exit();
    }
    mysqli_close($conn);
}