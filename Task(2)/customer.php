<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            background-image: url('images/background-4.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <header class="head-1">
        <h3 style="font-weight:bold ; text-align:center;"> Welcome dear Customer - Please choose from the available cars </h3>
    </header>

    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">

                <div class="card swiper-slide">

                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/focus.jfif" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Focus</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">Rent</button>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/elentra.jfif" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Elentra</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">Rent</button>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/corola.jfif" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Toyota Corola</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">Rent</button>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>

                        <div class="card-image">
                            <img src="images/cerato.jfif" alt="" class="card-img">
                        </div>
                    </div>

                    <div class="card-content">
                        <h2 class="name">Kia Cerato</h2>
                        <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                        <button class="button">Rent</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>

</body>

<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>

<!-- JavaScript -->
<script src="js/script.js"></script>

</html>