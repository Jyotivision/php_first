<?php
$my_array=array(4,5,7,8,9);
echo "<pre>";
print_r($my_array);
echo"</pre>";
echo "$my_array[2]";
$age=array('Ben' => 35,'Shawn'=>55,'Michael'=>90);
echo $age['Ben'];
$total_value=count($age);//count the total number of values
echo $total_value;
echo "<br>";
$c=count($my_array);
for ($d=0; $d<=$c; $d++) { 
	echo $my_array[$d];//dont forget to check error here
}
echo'<br>';
//sorting of arrays
//asort=sort values from highest to lowest
asort($my_array);
asort($age);
echo'<pre>';
print_r($my_array);
print_r($age);
echo'</pre>';
//arsort=sort values from lowest to highest
arsort($my_array);
arsort($age);
echo'<pre>';
print_r($my_array);
print_r($age);
echo'</pre>';
//ksort=sort keys from lowest to highest
ksort($my_array);
ksort($age);
echo'<pre>';
print_r($my_array);
print_r($age);
echo'</pre>';
//krsort=sort keys from highest to lowest
ksort($my_array);
ksort($age);
echo'<pre>';
print_r($my_array);
print_r($age);
echo'</pre>';
//for each loop
foreach ($age as $key => $value) {
	echo $key;
	echo ":";
	echo $value;
	echo "<br>";
}
?>
