<?php
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