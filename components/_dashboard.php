<?php
include '_dbconnect.php';

$sql = "SELECT * FROM donor";
$result = mysqli_query($conn, $sql);
$numRows = mysqli_num_rows($result);
$total = $numRows;

$sql2 = "SELECT DISTINCT(BloodType) FROM donor";
$result2 = mysqli_query($conn, $sql2);
$numRows2 = mysqli_num_rows($result2);
$total2 = $numRows2;


$sql3 = "SELECT * FROM request Where RequestedFor = 'Blood'";
$result3 = mysqli_query($conn, $sql3);
$numRows3 = mysqli_num_rows($result3);
$total3 = $numRows3;


$sql4 = "SELECT * FROM request Where RequestedFor = 'Plasma'";
$result4 = mysqli_query($conn, $sql4);
$numRows4 = mysqli_num_rows($result4);
$total4 = $numRows4;

?>

<div class="dashboard">
    <h1>Dashboard</h1>
    <div class="cards">
        <div class="total-card bg-green">
            <h2><?php echo $total ?></h2>
            <span>Total Donors</span>
        </div>
        <div class="total-card  bg-red">
            <h2><?php echo $total2 ?></h2>
            <span>Total Blood Groups</span>
        </div>
        <div class="total-card bg-blue">
            <h2><?php echo $total3 ?></h2>
            <span>Total Blood Requests</span>
        </div>
        <div class="total-card bg-purple">
            <h2><?php echo $total4 ?></h2>
            <span>Total Plasma Requests</span>
        </div>
    </div>
</div>