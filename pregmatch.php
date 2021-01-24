<?php
$name='a12';   //pattern      data to be matched
if(preg_match('/^[a-zA-A]*$/', $name)){
	echo"pattern is matched";
}else{
	echo "Pattern is not matched";
}
echo "<br>";
//now lets just validate the email address using filter_var('email', type of filtration)
$email='nick_22@gmail.com';
//php function filter_var
 echo filter_var($email, FILTER_VALIDATE_EMAIL);//here we use filter validate email to validate email
 //now lets again use preg_match to validate user supplied url
 echo "<br>";
 $url= 'https://www.w3schools.com/';
 if(preg_match('/^(http|https):\\/\\/[a-z0-9]+([\\-\\.]{1}[a-z0-9]+)*\\.[a-z]{2,5}'.'((:[0-9]{1,5})?\\/.*)?$/i',$url)){
 	echo "Url mathes";
 }
 else{
 	echo "Url doesnot match";
 }
 


?>