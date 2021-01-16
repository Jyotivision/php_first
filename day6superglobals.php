<?php
//session_start();
/*super globals-special predefined variables in php.
$_SERVER,$REQUEST, $_GET, $_POST, $_FILES, $_COOKIE, $_SESSION*/

/*echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";*/

/*$-REQUEST, $_GET, $_POST
tHESE VARIABLES ARE USED TO COLLECT FORM DATA.
In the form in the starting tag we need to define some attribute. the first attribute is method which includes Get or Post.
The 2nd attribute is action.You can keep it empty. This means, you want your form to submit data on the same page where the form is right now. 
Or you can just define the path of the page where you would like the data to be submitted.*/

/* $_Request array is avialable only when the form is submitted.
This array stores data regardless of the method*/
echo $_REQUEST['username'];
echo "<br>";
echo $_REQUEST['email'];
/*$_GET ARRAY is similar to $REQUEST ARRAY.The only diffference is it will grab the data only if the method is get.It is also an simple
associative array
echo "<br>";
echo $_GET['username']; 
echo "<br>";
echo $_GET['email'];*/
/*post array is same except here method is post*/
echo "<br>";
echo $_POST['username'];
echo "<br>";
echo $_POST['email'];
/*//echo $_SESSION['myVar'];//session-start function is written in the top and in this line we call $_SESSION superglobal to check its work
//to check if the $Session variable is set of not we use the following statements
//here if we comment sessionstart function else statement will be executed.
if (isset($_SESSION['myVar'])) {
	echo'You are allowded here';

}else{
	echo'You are not allowded';
}*/
//to make it little application just do minor changes
if (isset($_SESSION['myVar'])) {
	echo'Welcome to the secure area';

}else{
	header('LOCATION:cookiesandsession.php');//if session variable myVar is not found then we will not allow our user to stay or even visit this page
	//we will redirect them to our session page by just using a builtin function header(LOVATION:path where we want to land)
}
?>


<form method="post" action="day6superglobals.php">
<br><br>
User Name: <input type="text" name="username" placeholder="User Name"><br><br>
Email: <input type="email" name="email" placeholder="Email"><br><br>
<input type="submit" value="Submit Information">
</form>
