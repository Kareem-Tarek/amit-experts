<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer page</title>
    <style>
        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
            text-align: -webkit-center;
        }

        /* .section {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        } */

        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            /* float: left; */
            width: 580px;
            display: block;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        .gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        .form {
            padding-bottom: 3%;
        }

        input {
            background-color: #F17C76;
            flex: 1 1 auto;
            width: 50%;
            padding-top: 15px;
            padding-bottom: 15px;
            padding-left: 30px;
            padding-right: 30px;
            border-radius: 3px;
            font-size: 11px;
            text-transform: uppercase;
            font-weight: 700;
            letter-spacing: .05rem;
            border: 1px solid #43434d;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="gallery">
            <a target="_blank" href="img_mountains.jpg">
                <img src="images/olav-tvedt-6lSBynPRaAQ-unsplash.jpg" alt="Mountains" width="600" height="400">
            </a>
            <div class="desc">Add a description of the image here</div>
            <div class="form">
                <form action="" method="get">
                    <input type="submit" value="Rent">
                </form>
            </div>
        </div>
    </div>
</body>

<?php
$my_file_txt = 'local-file.txt';
$get_data = file_get_contents('local-file.txt');

file_put_contents($my_file_txt, $get_data);

echo '';


?>