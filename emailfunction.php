<?php
$to='aryaljyoti22.ja@gmail.com';
$subject='My First mail';
$message='This is my first mail meassage'."\n\r";
mail($to, $subject, $message, $header);
?>