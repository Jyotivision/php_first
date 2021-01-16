<?php
function sanitize($data){
	$data=trim($data);
	$data=htmlspecialchars($data);
	$data=stripcslashes($data);
	return $data;

}
if ($_POST) {
	/*lets create an array $errors then start the conditional statement to checl whether the given field is empty or not.
	If the field is empty then display the error message.Use error array as an indexed array.*/
	$errors= array();

	

	$name= sanitize($_POST['name']);//sanitize function lai call gareko
	$username=sanitize($_POST['username']);
	$email=sanitize($_POST['email']);
	$password=sanitize($_POST['password']);
	$password_again=sanitize($_POST['password_again']);
}
if ($name=='') {
		$errors[] = 'Full name is required';
	}
	if ($username=='') {
		$errors[] = 'User name is required';
	}
	if ($email=='') {
		$errors[] = 'Email is required';
	}
	if ($password=='') {
		$errors[] ='Password is required';
	}
	if ($password_again=='' || $password!=$password_again) {
		$errors[] = 'Repeat password is required and mush match with password';
	}
	//now if there comes no error message then if you want to show them User registerd message then use following condition
	if (count($errors)==0) {
		echo "User Registered";
	}
	else{
		$errors[]='User cannot be registered';
	}


?>
<h3>Registration Form</h3>
<?php
if (isset($errors)) {
	

foreach ($errors as $error) {
	echo $error;
	echo "<br>";

}
}
?>
<h5>All fields required</h5>


<form method="post" action="displayerrorformsubmission.php "> <!--action=on which file you want to recieve the data of form-->
<input type="text" name="name" placeholder="Full Name" value="<?php echo isset($name) ? $name :' '?>"><br><br>
<input type="text" name="username" placeholder="User Name" value="<?php echo isset($username) ? $username :' '?>"><br><br>
<input type="email" name="email" placeholder="Email" value="<?php echo isset($email) ? $email :' '?>"><br><br>
<input type="password" name="password" placeholder="Password" value="<?php echo isset($password) ? $password :' '?>"><br><br>
<input type="password" name="password_again" placeholder="Repeat Password" value="<?php echo isset($password_again) ? $password_again :' '?>"><br><br><!--repeat password-->
<input type="submit" value="Register">
<input type="reset" value="Reset">
</form>
<!-- here every time when error message comes we need to fill the from from the start point...so to give data back to the user 
lets put another atttibute value inside the input type field inside these value we need to staty php and between php tage
we are going to use ternary operator-->