<?php

$my_file_txt = 'local-file.txt';
$get_data = file_get_contents('local-file.txt');

file_put_contents($my_file_txt, $get_data);

echo '';


?>