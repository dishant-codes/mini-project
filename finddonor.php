<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Donor - Blood Donation</title>
    <link rel="stylesheet" href="./assits/css/header.css">
    <link rel="stylesheet" href="./assits/css/login.css">
    <link rel="stylesheet" href="./assits/css/footer.css">
    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
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
</head>

<body>
    <div class="main-div">
        <!-- Header -->
        <?php include './components/_navbar.php' ?>
        <div class="login">
            <form class="login-form" method="POST">
                <h2>Find Donor</h2>
                <hr width="70%">
                <div class="input-box">
                    <select name="blood_type" class="form-input" id="blood-type">
                        <option selected disabled>Select Blood type</option>
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
                <button type="submit" id="findbtn" class="btn-s">Find</button>
            </form>
            <div id="displaydata">

            </div>
        </div>

        <!-- Footer -->
        <?php include './components/_footer.php' ?>
    </div>
    <script src="./assits/js/jquery.min.js"></script>
    <script src="./assits/js/ajax.js"></script>
    <script src="./assits/js/main.js"></script>

</body>

</html>