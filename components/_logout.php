<?php

session_start();
echo "Logging you out. Please wait...";
echo "<script> window.confirm('Are you sure to logout?');</script>";
session_destroy();
header("location: ../admin.php");