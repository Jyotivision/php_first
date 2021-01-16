<?php
/*1.       Create three different indexed arrays containing 5 to 10 values in each array.

2.       Output each of the arrays using for-loop

3.       Output each of arrays using while-loop

4.       Output each of arrays using do-while-loop.

5.       Create an associative array of greetings (values) and days (keys). 
Declare a variable and you can keep it equals to any name of the day. 
Now, whenever the name of the day for variable is changed, your script should display relevant greetings message from the associative array.
 (You are free to choose anything for your keys and values from greetings or days. It’s up to you.) */
$ages= array(23,24,25,49,69,50 );
$myarray=array('Ram','Shyam','Hari','Gita','Sita','Rita');
$marks=array(100,110,95,99,115,120);
$c=count($ages);
$d=count($myarray);
$e=count($marks);
for ($i=0; $i <$c ; $i++) { 
	echo $ages[$i];
	echo "<br>";
	
}
echo "<br>";
for ($j=0; $j <$d ; $j++) { 
	echo $myarray[$j];
	echo "<br>";
}
echo "<br>";
for ($k=0; $k <$e ; $k++) { 
	echo $marks[$k];
	echo "<br>";
}
echo "<br>";
$i=0;
$j=0;
$k=0;
while ( $i<$c) {
	echo $ages[$i];
	echo "<br>";
	$i++;
}
echo "<br>";
while ( $j<$d) {
	echo $myarray[$j];
	echo "<br>";
	$j++;
}
echo "<br>";
while ( $k<$e) {
	echo $marks[$k];
	echo "<br>";
	$k++;
}
echo "<br>";
$i=0;
$j=0;
$k=0;
do {
	echo $ages[$i];
	echo "<br>";
	$i++;
	
} while ( $i<$c);
echo "<br>";
do {
	echo $myarray[$j];
	echo "<br>";
	$j++;
	
} while ( $j<$d);
echo "<br>";
do {
	echo $marks[$k];
	echo "<br>";
	$k++;
	
} while ( $k<$e);
echo "<br>";
$mydays= array('Sun' =>"Today is free day!just enjoy",'Mon'=>"This is a Busy day!hurry up",'Tuesday'=>"This is a normal working day.");
echo $mydays['Mon'];
?>