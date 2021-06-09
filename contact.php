<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Blood Donation</title>
    <link rel="stylesheet" href="./assits/css/header.css">
    <link rel="stylesheet" href="./assits/css/login.css">
    <link rel="stylesheet" href="./assits/css/footer.css">
    <style>
    .contact h2 {
        text-align: center;
        font-size: 3rem;
        color: rgb(0, 146, 146);
        margin-top: 30px;
    }

    .contact>p {
        text-align: center;
        font-size: 19px;
        color: #363e46;
        padding: 10px 0;
    }

    .contact-form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    </style>
</head>

<body>
    <div class="main-div">
        <!-- Header -->
        <?php include './components/_navbar.php' ?>
        <!-- Contact  -->
        <div class="contact">
            <h2>Contact Us</h2>
            <p>Have any questions? We'd love to hear from you.</p><br>
            <div class="contact-form">
                <form class="login-form" action="./components/_handleContactForm.php" method="POST">
                    <div class="input-box ">
                        <input class="form-input" type="text" placeholder="Full name" name="name" required>
                        <span class="focus-border"></span>
                    </div>
                    <div class="input-box">
                        <input class="form-input" maxlength="10" type="text" placeholder="Mobile Number"
                            name="Mobnumber" required>
                        <span class="focus-border"></span>
                    </div>
                    <div class="input-box">
                        <input class="form-input" type="email" placeholder="E-mail Id." name="email" required>
                        <span class="focus-border"></span>
                    </div>
                    <div class="input-box msg">
                        <label for="message">Message</label>
                        <textarea class="message" style="resize: vertical;" placeholder="Till us something about you..."
                            name="message" required></textarea>
                        <!-- <span class="focus-border"></span> -->
                    </div>
                    <button type="submit" class="btn-s">Send</button>
                </form>
            </div>
        </div>

        <!-- Footer -->
        <?php include './components/_footer.php' ?>

    </div>
    <script src="./assits/js/main.js"></script>
</body>

</html>