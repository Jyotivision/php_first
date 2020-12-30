<?php
//for loop
for ($a=1; $a <6; $a++) { 
	if ($a==4) {
		break;//use of break in this condition loop breaks from num 3
	}
	echo $a.'<br>';
}
echo'<br>';
//use of continue
for ($x=1; $x <6; $x++) { 
	if ($x==4) {
		continue;//in this condition we can skip num 4
	}
	echo $x.'<br>';
}
echo "<br>";
//While loop same as for loop ..only difference is placement of variable condition and controliteraton
$c=1;
while($c<6){
	

	echo $c.'<br>';
	$c++;
}

//dowhile loop
/*$c=1;
do {
	echo $c.'<br>';
	$c++;
} while ($c < 1);*/
?>