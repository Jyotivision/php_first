<?php
//date function here in there function two arguments are passed..1st one is format of date and 2nd is optional
echo date("y");//it displays last two digits of the current year
echo "<br>";
echo date("Y");//it will display all the 4 digits of year
echo "<br>";
echo date("d-m-Y"); //it will display the current day(19) month(01) and year(2021)
echo date("D-M-Y");//wil display short name of day(Tue)and month(Jan) and 4digits of year(2021)
echo date("l-M-Y");//it will display full name of day 1st 3 letter of month and 4 digits of year
//we can change the position of day month and year according to our choice
//now lets move towards another function mktime()
echo "<br>";
echo mktime();//Unix time stamp declaring number of seconds from 1970
//It will display no of seconds from jan 1st 1970 to this current time 
//we can pass arguments in mktime( ) function like mktime(hours, minutes, seconds, month, day, year) however all should be integer
echo "<br>";
echo mktime(0,0,0,19,01,2021);//it gives exact number of seconds till given date
echo "<br>";
echo time();//it is similar to mktime but we cannot pass argument here
//now lets just define the date
echo "<br>";
echo $defined_date=mktime(0,0,0,19,01,2021);
echo "<br>";
echo date("M-l-Y", $defined_date);
echo "<br>";
//now add or subtract time or days
//lets assume we want to add a day in current day,,for this lets call mktime and us plus sign to add seconds so lets convert one day in second
$tomorrow=mktime()+(1*24*60*60);
echo date("D", $tomorrow);//if we want to add 7 days in the current day then just put 7 instead of 1 inside mktime
//you can do same with time
echo "<br>";
$sevendays=time()+(7*24*60*60);
echo date("M-D-Y", $sevendays);
//in php there is a function which converts string to time.Using this we can change any reasonable string pointing to dates can be converted 
//to readable date Let’s create a variable ‘user_defined’ and store a string in it.using function strtotime()
echo "<br>";
$user_defined='Sunday, 19th Jan 2021';
echo $timestamp=strtotime($user_defined);//it will convert that string into second
echo "<br>";
echo date("Y-M-D", $timestamp);

?>