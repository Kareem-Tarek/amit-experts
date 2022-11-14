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
/*************************************************** Start txt (Text Document) ***************************************************/
$my_file_txt = 'local-file.txt';
$message_txt = 'My name is kareem and i put this string as a content file "' . $my_file_txt . '"';

//----- file_put_contents(file.extension, content, mode, context); -----//
//modes:
//FILE_APPEND
//LOCK_EX (EX is Exclusive)
//FILE_USE_INCLUDE_PATH

//without the third argument "FILE_APPEND" the message ($message_txt) will be replaced by new one in the same file ($my_file_txt) as like overwriting
file_put_contents($my_file_txt, $message_txt . "\n", FILE_APPEND | LOCK_EX); //result in local-file.txt file "Text Document file"


echo 'You submitted the following data => <span style="color: red;">' . $message_txt . '</span> <span style="color: blue; font-weight: bold;"><a href="local-file.txt">Go now and check your "' . $my_file_txt . '" file.</a></span><br>';

/*************************************************** End txt (Text Document) ***************************************************/
?>