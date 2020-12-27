<?php
	//logout function 
	session_destroy();
	require("conection/connect.php");
	header("Location: index.php");
?>
