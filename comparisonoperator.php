<?php
$a=7;
$b=8;
//comparisonoperator
echo 'Identical:'.($a===$b);
echo'<br>';
echo'Not dentical:'.($a!==$b);
echo'<br>';
echo'Equal:'.($a==$b);
echo'<br>';
echo'Not Equal:'.($a!=$b);
echo'<br>';
echo'Not Equal:'.($a<>$b);
echo'<br>';
echo'Less than:'.($a<$b);
echo'<br>';
echo'Greater than:'.($a>$b);
echo'<br>';
echo'Less than or equal:'.($a<=$b);
echo'<br>';
echo'Greater than or equal:'.($a>=$b);
echo'<br>';
//Increment or decrement operator
//increment operator
//preincrement
echo 'at the tme of preincrement variable a: '.++$a;
echo'<br>';
echo 'after preincrement variable a: '.$a;
echo'<br>';
//postincrement
echo 'Variable a at the time of postincrement: '.$a++;
echo'<br>';

echo 'Value after post increment:'.$a;
echo'<br>';
//decrement
echo'at the time of predecrement of variable b: '.--$b;
echo'<br>';
echo'after predecrement of variable b: '.$b;
echo'<br>';
echo 'returns 7 the predrecemented value of b'.$b--;
echo'<br>';
echo'after postdecrement of variable b: '.$b;
echo'<br>';
//Datatypes
echo gettype(true);
echo'<br>';
define('Mycon','12');
echo Mycon;
?>