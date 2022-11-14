<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer page</title>

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