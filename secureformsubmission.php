<?php
/*It is always important ro keep in mind that any data which you receive from the userside must be drained
and sanitized for security purpose.As we mostly store the user submitted data in our database.So, if we don't sanitize user
may hack or damage our database and whole site
Some basic things to make secure aregiven below
use some inbuilt function like
1.trim()-this function trims out all the extra space within data supplied to its argument
2.htmlspecialchars()-this function trims out all the html characters within data supplied to it
as an argument
3.stripeslashes()-this function stripesout all the slashes within data supplied to it as an argument*/
//lets just make userdefined function sanitize
function sanitize($data){
	$data=trim($data);
	$data=htmlspecialchars($data);
	$data=stripcslashes($data);
	return $data;

}
if ($_POST) {
	

	$name= sanitize($_POST['name']);//sanitize function lai call gareko
	echo $name;
	$username=sanitize($_POST['username']);
	echo $username;
	$email=sanitize($_POST['email']);
	echo $email;
	$password=sanitize($_POST['password']);
	echo $password;
	$password_again=sanitize($_POST['password_again']);
	echo $password_again;

	/*$name= trim($_POST['name']);
	$name=htmlspecialchars($name);//here $name  inside the parenthisis is the trimmed form data
	$name=stripcslashes($name);
	//we should apply these builtinfunction to username, email, password also so instead of assigning it separately whynot make the function 
	//use that
	echo $_POST['name'];
	echo $_POST['username'];
    echo $_POST['email'];
	echo $_POST['password'];
	echo $_POST['password_again'];
	*/
	

}
?>



<!--form submission-->
<h3>Registration Form</h3>
<form method="post" action="secureformsubmission.php"><!--action=on which file you want to recieve the data of form-->
<input type="text" name="name" placeholder="Full Name"><br><br>
<input type="text" name="username" placeholder="User Name"><br><br>
<input type="email" name="email" placeholder="Email"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<input type="password" name="password_again" placeholder="Repeat Password"><br><br><!--repeat password-->
<input type="submit" value="Register">
<input type="reset" value="Reset">

</form>