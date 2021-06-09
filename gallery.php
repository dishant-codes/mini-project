<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Blood Donation</title>
    <link rel="stylesheet" href="./assits/css/header.css">
    <link rel="stylesheet" href="./assits/css/gallery.css">
    <link rel="stylesheet" href="./assits/css/footer.css">
    <style>
    .title {
        text-align: center;
        font-size: 3rem;
        color: rgb(0, 146, 146);
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <div class="main-div">
        <!-- Header -->
        <?php include './components/_navbar.php' ?>

        <h2 class="title">Gallary</h2>

        <div class="gallery">
            <div class="card-item"><img src="./assits/img/card-1.jpg" onclick="openModal();currentSlide(1)" alt=""
                    width="100%" height="100%" /></div>
            <div class="card-item"><img src="./assits/img/card-2.jpg" onclick="openModal();currentSlide(2)" alt=""
                    width="100%" height="100%" /></div>
            <div class="card-item"><img src="./assits/img/card-3.jpg" onclick="openModal();currentSlide(3)" alt=""
                    width="100%" height="100%" /></div>
            <div class="card-item"><img src="./assits/img/card-4.jpg" onclick="openModal();currentSlide(4)" alt=""
                    width="100%" height="100%" /></div>
            <div class="card-item"><img src="./assits/img/card-5.jpg" onclick="openModal();currentSlide(5)" alt=""
                    width="100%" height="100%" /></div>
            <div class="card-item"><img src="./assits/img/card-6.jpg" onclick="openModal();currentSlide(6)" alt=""
                    width="100%" height="100%" /></div>
        </div>


        <div id="myModal" class="modal">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">

                <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                    <img src="./assits/img/card-1.jpg" style="width: 1080px;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">2 / 6</div>
                    <img src="./assits/img/card-2.jpg" style="width:1080px;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">3 / 6</div>
                    <img src="./assits/img/card-3.jpg" style="width:1080px;">
                </div>

                <div class="mySlides">
                    <div class="numbertext">4 / 6</div>
                    <img src="./assits/img/card-4.jpg" style="width:1080px;">
                </div>
                <div class="mySlides">
                    <div class="numbertext">5 / 6</div>
                    <img src="./assits/img/card-5.jpg" style="width:1080px;">
                </div>
                <div class="mySlides">
                    <div class="numbertext">6 / 6</div>
                    <img src="./assits/img/card-6.jpg" style="width:1080px;">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

        </div>

        <!-- Footer -->
        <?php include './components/_footer.php' ?>

    </div>

    <script src="./assits/js/main.js"></script>
    <script src="./assits/js/gallery.js"></script>
</body>

</html>