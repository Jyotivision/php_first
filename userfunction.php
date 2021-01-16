<?php
/*//defining a function
function greetings(){
	echo "Hello world";
}
*/
//calling a function

//greetings();

/*function greetings(){
	echo'Hello James';
}
*/
/*//to call the name of specific person just define the variable $name, and pass the argumnt inside the function

function greetings($arg){
	echo'Hello'.' '. $arg.'!';

}
$name='Nancy';
greetings($name);
*/
/*//if we forget to put the variable in the calling function then in such case the default value is displayed
//we can pass the pefault value while passing arguments
//but if we put the value of variable while calling function then it obviously displays the defined value not the default one
$names='Hari';
function greetings($arg='Rama'){
	echo "Hello".' '.$arg.'!';
}
greetings();
*/
/*
//now lets just create the new function maths
$a=150;
$b=9;
function maths($arg1, $arg2){
	echo $arg1*$arg2;
}
$c=maths($a,$b); //now just try to put the value one math in variable c 
echo $c;//it doesnot show the result..to get the result out of function we need to use the return keyword
*/
/*$a=150;
$b=9;
function maths($arg1, $arg2){
	return $arg1*$arg2;
}
$c=maths($a,$b); 
echo 'C is:'.' '.$c;
echo "<br>";
echo $a+$b;//by using return we can use the value of variable for further use also
*/
//now just lets assign some default values to the function
$a=3;
$b=8;
function maths($arg1=10, $arg2=22){
	return $arg1*$arg2;
}
echo maths($b);//if we pass only one value then in such condition it will take the right side vargument value of the function
?>