<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request - Blood Donation</title>
    <link rel="stylesheet" href="./assits/css/header.css">
    <link rel="stylesheet" href="./assits/css/login.css">
    <link rel="stylesheet" href="./assits/css/footer.css">
</head>

<body>
    <div class="main-div">
        <!-- Header -->
        <?php include './components/_navbar.php' ?>

        <div class="login">
            <form class="login-form" action="./components/_handleRequest.php" method="POST">
                <h2>Request Form</h2>
                <hr width="70%">
                <div class="input-box ">
                    <input class="form-input" type="text" placeholder="Full name" name="name" required>
                    <span class="focus-border"></span>
                </div>
                <div class="input-box">
                    <input class="form-input" maxlength="10" type="text" placeholder="Mobile Number" name="Mobnumber"
                        required>
                    <span class="focus-border"></span>
                </div>
                <div class="input-box">
                    <input class="form-input" type="number" min="18" max="60" placeholder="Your Age" name="age"
                        required>
                    <span class="focus-border"></span>
                </div>
                <div class="input-box">
                    <input class="form-input" type="email" placeholder="E-mail Id." name="email" required>
                    <span class="focus-border"></span>
                </div>
                <div class="input-box msg">
                    <input class="form-input" type="text" placeholder="City" name="city" required>
                    <span class="focus-border"></span>
                </div>
                <div class="input-box">
                    <select name="requestFor" class="form-input" id="">
                        <option selected disabled>Request for</option>
                        <option value="Blood">Blood</option>
                        <option value="Plasma">Plasma</option>
                    </select>
                </div>
                <div class="input-box">
                    <select name="blood-type" class="form-input" id="">
                        <option selected disabled>Required Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="O+">O+</option>
                        <option value="AB+">AB+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="O-">O-</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="input-box msg">
                    <label for="message">Message</label>
                    <textarea class="message" style="resize: vertical;" placeholder="Till us something about patient..."
                        name="message" required></textarea>
                    <!-- <span class="focus-border"></span> -->
                </div>
                <button type="submit" class="btn-s">Make a Request</button>
            </form>
        </div>

        <!-- Footer -->
        <?php include './components/_footer.php' ?>
    </div>

    <script src="./assits/js/main.js"></script>

</body>

</html>