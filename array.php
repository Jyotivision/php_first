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
for ($d=0; $d <=$c ; $d++) { 
	echo$my_array[$d];
}

?>