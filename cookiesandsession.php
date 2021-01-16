<?php
session_start();
//to use $_Session variable we have to start session on every pahe where we have to work on global variable $_Session and also 
//remember that this function should remain on top of anyone 
/*//superglobal cookie and session
//setcookie('myCookie', 'This is a value', time()+60*60*24*3);
//name of cookie, value of cookie, expiry time of this cookie
//in this case this cookie will expires in 3 days
echo $_COOKIE['myCookie'];
//we can delete this cookie just by using the following syntax
setcookie('myCookie', '',time()-100);
setcookie('mycookie','',time()-100);
//since cookie is deleted, when we echo $_COOKIE, it will show error
*/
$_SESSION['myVar']='This is session variable';//here myVar is key and value is 1
echo $_SESSION['myVar'];
?>
