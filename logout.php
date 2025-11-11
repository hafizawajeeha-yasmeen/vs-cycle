<?php session_start(); ?>
<p>Please Wait</p>
<?php 
	session_destroy();
	header("refresh:2;url=index.php");
 ?> 