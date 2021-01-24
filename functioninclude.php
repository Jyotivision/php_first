<?php
function sanitize($data){
$data=trim(htmlspecialchars(stripslashes($data)));
return $data;
}
?>