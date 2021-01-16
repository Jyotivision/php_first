<?php
/* Write a script which runs once and produce the following;

1.       Displayonly even numbers on each line.

2.       Do not show numbers like 10, 20, 30 and so on.

3.       Do not go beyond 200.*/

for($a=0;$a<=200;$a++){
	if($a%2==0 && $a%10!=0){
		echo $a.'<br>';
	}
}
?>