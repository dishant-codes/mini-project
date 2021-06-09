<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guidlines - Blood Donation</title>
    <link rel="stylesheet" href="./assits/css/header.css">
    <link rel="stylesheet" href="./assits/css/footer.css">
    <style>
    .guidlines {
        flex-direction: column;
        padding: 20px;
    }

    .guidlines h2 {
        font-size: 3rem;
        color: rgb(0, 146, 146);
    }

    .guidlines-list {
        padding: 20px;
        padding-left: 30px;
    }

    .pdf-link {
        font-size: 18px;
    }

    .pdf-link a {
        color: rgb(0, 146, 146);
    }
    </style>
</head>

<body>
    <div class="main-div">
        <!-- Header -->
        <?php include './components/_navbar.php' ?>
        <!-- guidlines  -->
        <div class="guidlines d-flex">
            <h2>COVID-19 Guidlines</h2>
            <ul class="guidlines-list">
                <li class="pdf-link"><a href="./assits/pdf/pdf1.pdf" target="_blank"> Guidelines for Workplace of
                        COVID-19 case</a> <img src="./assits/img/icon_pdf.png" width="20px" alt="pdf-icon">[311kb]</li>
                <li class="pdf-link"><a href="./assits/pdf/pdf2.pdf" target="_blank"> Revised Discharge Policy for
                        COVID-19</a> <img src="./assits/img/icon_pdf.png" width="20px" alt="pdf-icon">[233kb]</li>
                <li class="pdf-link"><a href="./assits/pdf/pdf3.pdf" target="_blank"> Guidelines for Quarantine
                        facilities COVID-19 </a> <img src="./assits/img/icon_pdf.png" width="20px"
                        alt="pdf-icon">[829kb]</li>
                <li class="pdf-link"><a href="./assits/pdf/pdf4.pdf" target="_blank"> Guidelines to be followed on
                        detection of suspect or confirmed COVID19 case</a> <img src="./assits/img/icon_pdf.png"
                        width="20px" alt="pdf-icon">[134kb]</li>
                <li class="pdf-link"><a href="./assits/pdf/pdf5.pdf" target="_blank"> Home Quarantine Guidelines EMR
                        Division</a> <img src="./assits/img/icon_pdf.png" width="20px" alt="pdf-icon">[123kb]</li>
                <li class="pdf-link"><a href="./assits/pdf/pdf6.pdf" target="_blank"> Home Care guidlines</a> <img
                        src="./assits/img/icon_pdf.png" width="20px" alt="pdf-icon">[615kb]</li>
                <li class="pdf-link"><a href="./assits/pdf/pdf7.pdf" target="_blank"> COVID 19 Guidelines on Dead body
                        management</a> <img src="./assits/img/icon_pdf.png" width="20px" alt="pdf-icon">[306kb]</li>

            </ul>
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