<?php
if(isset($_FILES['img'])){


//file uploading
//$_FILES super global array
//lets grab our data of uploaded image file
//here we also have to define encryption type="multipart/form-data" inside form otherwise error occurs
echo $_FILES['img']['name'];
echo "<br>";
echo $_FILES['img']['tmp_name'];
echo "<br>";
echo $_FILES['img']['size'];
echo "<br>";
echo $_FILES['img']['error'];
echo "<br>";
if ($_FILES['img']['size']>=100000) {
	echo "You cannot upload your image";
}
// var_dump($_FILES['img']['name']);
/* here we have successfully uploaded our file to the server. But it’s on the server and is saved temporarily. 
Still we need to grab this file and move and save it into some specific directory where we want to store our image files. 
Like may be images directory. So, we will grab this temporary file and move it to the destination folder on the server.
for this purpose php provides a very handy internal function move_uploaded_file() it takes 2 argmnts, 1st is temporary name with which file 
was saved in the server temporariy and 2nd is the directory name(where we want to store file) along with actual filename
So, we just put the variable tmp_name and so called directory ‘dir’ and a variable for the name of the file we want to save this file with*/
EXTRACT($_FILES['img']); //grabs all the keys of array and make them available as variables 
//and assign them their own relevant values fromsuplied asotivarray
move_uploaded_file($tmp_name, 'dir/'.$name);// $tmp_name=temporary name , dir=directory name and $name =actual name of file extension
}
?>
<h3>Registration Form</h3>
<form method="post" action="fileuploading.php" enctype="multipart/form-data"><!--action=on which file you want to recieve the data of form-->
<input type="text" name="name" placeholder="Full Name"><br><br>
<input type="text" name="username" placeholder="User Name"><br><br>
<input type="email" name="email" placeholder="Email"><br><br>
<input type="password" name="password" placeholder="Password"><br><br>
<input type="password" name="password_again" placeholder="Repeat Password"><br><br><!--repeat password-->
Attach your Snap File: <input type="file", name="img"><br><br> <!--file uploading-->

<input type="submit" value="Register">
<input type="reset" value="Reset">

</form>