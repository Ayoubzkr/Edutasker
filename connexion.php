<?php
	$con = mysqli_connect("localhost", "root","");
	mysqli_select_db($con,"edutasker");
	mysqli_query($con,"SET NAMES UTF8");
?>