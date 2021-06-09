<?php


include '_dbconnect.php';

$id = $_GET['id'];

$sql =  "DELETE FROM request WHERE id = '$id'";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "<h2> Record Deleted";
    header("location: ../adminPanel.php?page=requests");
} else {
    echo "Failed to delete";
}