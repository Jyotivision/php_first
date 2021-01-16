<?php
//built in function=ready to use function
//we can use these function within our user defined function
$a='This is something you should not miss.';
echo gettype($a);//use of biltin function gettype..it tells the type of supplied data
echo "<br>";
//another internal function settype is used to set the type of supplied data

settype($a, 'string');//we can assign any type to any data by using settype function
//$a name of variable..string type of variable
echo gettype($a);
echo "<br>";
//to count the length of string we use strlen inbuilt function
echo strlen($a);
echo "<br>";
//now lets use another function substr-it gives substring from the given string
echo substr($a, 5, 15);//first arg tell which variable to make sub..2nd arg tells from where to start..3rdtells where to stop
echo "<br>";
echo time();
echo "<br>";
echo date('d-m-y');
?>