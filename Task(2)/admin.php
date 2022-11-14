<?php
/*************************************************** Start MS Word ***************************************************/
//$my_file_word = 'local-file.docx';
//$message_word = 'My name is kareem and i put this string as a content in file "'.$my_file_word.'"';
//file_put_contents($my_file_word, $message_word); //result in local-file.docx file "MS Word file"

//echo 'You submitted the following data => <span style="color: red;">'.$message_word.'</span> <span style="color: blue; font-weight: bold;"><a href="local-file.docx">Go now and check your "'.$my_file_word.'" file.</a></span>';
/*************************************************** End MS Word ***************************************************/


/*************************************************** Start txt (Text Document) ***************************************************/
$my_file_txt = 'local-file.txt';
$message_txt = 'My name is kareem and i put this string as a content file "'.$my_file_txt.'"';

//----- file_put_contents(file.extension, content, mode, context); -----//
//modes:
    //FILE_APPEND
    //LOCK_EX (EX is Exclusive)
    //FILE_USE_INCLUDE_PATH

//without the third argument "FILE_APPEND" the message ($message_txt) will be replaced by new one in the same file ($my_file_txt) as like overwriting
file_put_contents($my_file_txt, $message_txt."\n", FILE_APPEND | LOCK_EX); //result in local-file.txt file "Text Document file"


echo 'You submitted the following data => <span style="color: red;">'.$message_txt.'</span> <span style="color: blue; font-weight: bold;"><a href="local-file.txt">Go now and check your "'.$my_file_txt.'" file.</a></span><br>';

/*************************************************** End txt (Text Document) ***************************************************/
?>