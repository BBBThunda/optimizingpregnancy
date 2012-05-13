<?php

	require_once("db.php");

	print_r($_POST);
	
	$buffer = updatePatient(2, $_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['country'], $_POST['zipcode'] );
	
	echo $buffer['debug']."\n\n";
	
	//echo "{result:".$result."}";
?>
