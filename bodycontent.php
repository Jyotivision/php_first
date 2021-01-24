<?php
//combine different file using internal function'include('file name you want to include')'
require('functioninclude.php');
include_once('header.php');
include_once('header.php');//using include once function it stops the header file to call twiced..here header is loaded only time

?>

<div id="content">

<h3>This is content area.</h3>
<?php
$name='Ram';
echo sanitize($name);


?>

</div>


<?php
include('footer_file.php');
require_once('footer_file.php'); //same as include_once
?>