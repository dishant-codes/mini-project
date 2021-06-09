<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Blood Donation</title>
    <link rel="stylesheet" href="./assits/css/header.css">
    <link rel="stylesheet" href="./assits/css/footer.css">
    <style>
    .about {
        flex-direction: column;
        padding: 20px;
    }

    .about h2 {
        text-align: center;
        font-size: 3rem;
        color: rgb(0, 146, 146);
        margin-top: 20px;
    }

    .about>p {
        text-align: center;
        font-size: 19px;
        color: #363e46;
    }

    .about-details {
        display: flex;
        margin-top: 1rem;
        justify-content: space-evenly;
        align-items: center;
    }

    .about-para {
        width: 500px;
    }

    .about-para p {
        margin: 10px 0;
    }
    </style>
</head>

<body>
    <div class="main-div">
        <!-- Header -->
        <?php include './components/_navbar.php' ?>
        <!-- Contact  -->
        <div class="about d-flex">
            <h2>About Us</h2>
            <p>We Are The Donors - Sleeves Up. Hearts Open. All In</p>

            <div class="about-details">
                <img src="./assits/img/about-img.jpg" width="400px" alt="blood">
                <div class="about-para">
                    <p>Each day, thousands of people – people just like you – provide compassionate care to those in
                        need. Our network of generous donors, volunteers and employees share a mission of preventing and
                        relieving suffering, here at home and around the world.</p>
                    <p>We roll up our sleeves and donate time, money and blood. We learn or teach life-saving skills so
                        our communities can be better prepared when the need arises. We do this every day because the
                        Blood is needed - every day.</p>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include './components/_footer.php' ?>

    </div>
    <script>
    <?php
        if (isset($_GET['register'])) {
            $check_register = $_GET['register'];
            if ($check_register == "success") {
                echo 'alert("Thank You!!!")';
            }
        }
        ?>
    </script>
    <script src="./assits/js/main.js"></script>
</body>

</html>