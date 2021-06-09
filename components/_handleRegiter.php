<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';

    $fullname = $_POST["name"];
    $mobile_no = $_POST["Mobnumber"];
    $age = $_POST["age"];
    $blood_type = $_POST["blood-type"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $history = $_POST["history"];


    $sql =  "INSERT INTO `donor`(`age`, `FullName`, `City`, `MobileNumber`, `BloodType`, `History`, `EmailID`) VALUES ('$age','$fullname','$city','$mobile_no','$blood_type','$history','$email')";

    $result = mysqli_query($conn, $sql);

    if ($result and $_GET['admin'] == 'true') {
        header("Location: ../adminPanel.php?page=donor");
        exit();
    } elseif ($result) {
        header("Location: ../index.php?register=success");
        exit();
    }

    mysqli_close($conn);
}