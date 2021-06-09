<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_dbconnect.php';

    $fullname = $_POST["name"];
    $mobile_no = $_POST["Mobnumber"];
    $age = $_POST["age"];
    $blood_type = $_POST["blood-type"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $message = $_POST["message"];
    $requestFor = $_POST["requestFor"];

    $sql =  "INSERT INTO `request`(`age`, `FullName`, `City`, `MobileNumber`, `BloodType`, `Message`, `EmailID`, `RequestedFor`) VALUES ('$age','$fullname','$city','$mobile_no','$blood_type','$message','$email','$requestFor')";

    $result = mysqli_query($conn, $sql);

    if ($result and $_GET['admin'] == 'true') {
        header("Location: ../adminPanel.php?page=requests");
        exit();
    } elseif ($result) {
        header("Location: ../request.php?request=success");
        exit();
    } else {
        echo 'error try again';
    }

    mysqli_close($conn);
}