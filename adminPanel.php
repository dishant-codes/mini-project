<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Blood Donation</title>
    <link rel="stylesheet" href="./assits/css/admin.css">
    <link rel="stylesheet" href="./assits/css/login.css">
    <style>
    .u-links {
        cursor: pointer;
        color: #fff;
        text-decoration: none;
    }

    .u-links:hover {
        text-decoration: underline;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;
    }

    td,
    th {
        border: 2px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
    <script>
    function preventBack() {
        window.history.forward();
    }
    setTimeout("preventBack()", 0);
    window.onunload = function() {
        null
    };
    </script>
</head>

<body>
    <div class="admin_panel">

        <?php

        if (!isset($_SESSION['loggedin'])) {
            echo "<h2>You are not loggedin</
            h2>";
        } else {

            $full_name =  $_SESSION['full_name'];
            echo  "<div class='admin_sidebar'>
                    <div class='user_info'>
                        <h3><img src='./assits/img/admin2.png' width='50px' alt='' srcset=''>
                                        $full_name</h3>
                        <div class='logout'> <a href='./components/_logout.php' id='logout'><img src='./assits/img/logout.png'
                                    width='20px' alt=''> </a></div>
                    </div>
                    <div class='navs'>
                        <ul class='links'>
                            <li class='nav-link'><a href='./adminPanel.php?page=dashboard'>Dashboard</a></li>
                            <li class='nav-link'><a href='./adminPanel.php?page=donor'>Donors</a></li>
                            <li class='nav-link'><a href='./adminPanel.php?page=requests'>Requests</a></li>
                            <li class='nav-link'><a href='./adminPanel.php?page=contacts'>Contacts</a></li>
                        </ul>
                    </div>
                </div>";



            echo  "<div class='mainview'>";

            if (isset($_GET['page'])) {
                $checkpage = $_GET['page'];
                if ($checkpage == "dashboard") {
                    include './components/_dashboard.php';
                } elseif ($checkpage == "donor") {
                    include './components/_donor.php';
                } elseif ($checkpage == "requests") {
                    include './components/_request.php';
                } elseif ($checkpage == "contacts") {
                    include './components/_contacts.php';
                }
            }
            if (isset($_GET['login'])) {
                $checklogin = $_GET['login'];
                if ($checklogin == "success") {
                    include './components/_dashboard.php';
                } else {
                    include '<h2>You are not loggedin</h2>';
                }
            }
            echo '</div>';
        }


        ?>
    </div>

    <script src="./assits/js/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#modalBtn").click(() => {
            $("#simpleModal").show();
        })
        $("#closeBtn").click(() => {
            $("#simpleModal").hide();
        })
    });
    $(function() {
        $('a#logout').click(function() {
            if (confirm('Are you sure to logout')) {
                return true;
            }

            return false;
        });
    });
    </script>
</body>

</html>