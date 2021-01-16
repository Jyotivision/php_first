<?php
//to grab the form data
//lets put the conditional statement -if the conditional statement finds the $_Post array then carryon otherwise don't
if ($_POST) {
	echo $_POST['name'];
	echo "<br>";
	echo $_POST['username'];
	echo "<br>";
	echo $_POST['email'];
	echo "<br>";
	echo $_POST['password'];
	echo "<br>";
	echo $_POST['password_again'];
}
?>
<!--form submission-->
<h3>Registration Form</h3>
<form method="post" action="form_submission.php"><!--action=on which file you want to recieve the data of form-->
<input type="text" name="name" placeholder="Full Name"><br><br>
<input type="text" name="username" placeholder="User Name"><br><br>
<input type="email" name="email" placeholder="Email"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<input type="password" name="password_again" placeholder="Repeat Password"><br><br><!--repeat password-->
<input type="submit" value="Register">
<input type="reset" value="Reset">

</form>