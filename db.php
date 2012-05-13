<?php

require_once("db_info.php");

function createPatient($input)
{
	$input=array();
	
	$sql = "";
}
function updatePatient($id, $first, $last, $username, $country, $zip)
{
	
	$connection = openDatabase();

	$sql = "UPDATE `preg20`.`patient` SET `lname` = '" . $last
	 . "', `fname` = '" . $first
	 . "', `username` = '" . $username
	 . "', `country` = '" . $country
	 . "', `zipcode` = '" . $zip
	 . "' WHERE `patient`.`id` = " . $id . ";";
	
	$returnBuffer['debug'] = "<p>createPatientFactor:<br />".$sql;
	
	// execute query
	$result = mysql_query($sql) or die ("Error in createPatientFactor statement: ".$sql.". ".mysql_error());
	
	return $returnBuffer;
	
}
function createPatientFactor($patient, $factor_value)
{
	// create statement
	$sql = "INSERT INTO `preg20`.`patient_factors` (`id`, `patient_id`, `factor_values_id`) VALUES (NULL, '".$patient."', '".$factor_value."');";

}
function addPatientFactors($input)
{
	$sql = "SELECT * FROM patient, patient_factors \n"
	. "WHERE patient.id = patient_factors.patient_id "
	. " AND ";
}

function getFactorsForPatient($input)
{
	$sql = "select *"
	. " from patient_factors pf"
	. " LEFT JOIN patient p on pf.patient_id = p.id"
	. " LEFT JOIN factor_values fv on pf.factor_values_id = fv.id"
	. " LEFT JOIN factors f on fv.factor_id = f.id"
	. " WHERE pf.patient_id = ".$input['id'].";";
	
	
	
}


?>