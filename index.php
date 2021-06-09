<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Blood Donation</title>
    <link rel="stylesheet" href="./assits/css/header.css">
    <link rel="stylesheet" href="./assits/css/home.css">
    <link rel="stylesheet" href="./assits/css/footer.css">
    <style>
    ul li {
        padding: 5px 0;
        margin-left: 20px;
    }

    .scrollToTop {
        text-align: center;
        z-index: 3;
        position: fixed;
        bottom: 20px;
        right: 10px;
        display: none;
    }

    .scrollToTop:hover {
        text-decoration: none;
    }
    </style>
</head>

<body>
    <div class="main-div">
        <!-- Header -->
        <?php include './components/_navbar.php' ?>
        <!-- Home  -->

        <div class="home">
            <div class="home-1">
                <div class="home-img">
                    <img src="./assits/img/doctor-img.svg" alt="doctor-img" srcset="">
                </div>

                <div class="discrp">
                    <h1>Overview</h1>
                    <p>
                        Blood donation is a voluntary procedure that can help save the lives of others. There are
                        several types of blood donation. Each type helps meet different medical needs.
                    </p>
                    <br>
                    <h2 style="font-weight:400">
                        Why Donote Blood
                    </h2>
                    <ul>
                        <li>
                            <p> The most precious gift that one can give to another person is the gift of life i.e.
                                blood. It
                                is the essence of life.</p>
                        </li>
                        <li>
                            <p> Your blood saves more than one life when it is separated into its components (red
                                blood cells,
                                plasma etc).</p>
                        </li>
                        <li>
                            <p> Blood is needed regularly for patients with diseases such as thalassemia and
                                hemophilia, and
                                also for the treatment of injuries after an accident, major surgeries, anemia, etc.</p>
                        </li>
                        <li>
                            <p> It improves your health.</p>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
            <div class="home-1">


                <div class="discrp">
                    <h2 style="font-weight:400">
                        Benefits of Donating Blood
                    </h2>
                    <br>
                    <ul>
                        <li>
                            <p> Did you know that people who donate blood are 88% less likely to suffer a heart attack
                                and 33% less likely to acquire any type of cardiovascular disease.</p>
                        </li>
                        <li>
                            <p> When you donate blood, it removes 225 to 250 milligrams of iron from your body, hence
                                reducing the risk of heart disease.</p>
                        </li>
                        <li>
                            <p> Blood Center performs numerous tests on the donated blood. Therefore regular blood
                                donation helps in sheilding you from serious diseases.</p>
                        </li>
                    </ul>
                    <br><br>
                </div>
                <div class="home-img">
                    <img src="./assits/img/doc.svg" alt="doctor-img" srcset="">
                </div>
            </div>
            <div class="home-1">
                <div class="home-img">
                    <img src="./assits/img/facts.svg" alt="blood-fact" srcset="">
                </div>

                <div class="discrp">
                    <h2 style="font-weight:400">
                        Facts About Blood
                    </h2>
                    <ul>
                        <li>
                            <p> One unit of donated blood can save up to three lives.</p>
                        </li>
                        <li>
                            <p>You can donate blood every three months. It only takes 48 hours for your body fluids to
                                be completely replenished.</p>
                        </li>
                        <li>
                            <p> Scientists have estimated the volume of blood in the human body to be eight percent of
                                body weight.</p>
                        </li>
                        <li>
                            <p> There are 100,000 miles of blood vessels in an adult human body.</p>
                        </li>
                        <li>
                            <p> A red blood cell can make a complete circuit of your body in 30 seconds.</p>
                        </li>
                        <li>
                            <p> White blood cells make up about 1% of your blood.</p>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <?php include './components/_footer.php' ?>

    </div>
    <a href="#" class="scrollToTop" style="font-size: 1.2rem;"><img src="./assits/img/top_arrow.png" width="40px"></a>

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

    <script src="./assits/js/jquery.min.js"></script>
    <script>
    $(document).ready(function() {

        //Check to see if the window is top if not then display button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        //Click event to scroll to top
        $('.scrollToTop').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 100);
            return false;
        });

    });
    </script>
    <script src="./assits/js/main.js"></script>
</body>

</html>