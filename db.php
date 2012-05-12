<?php
function createPatient($input)
{
	$input=array();
	
	$sql = "";
}
function updatePatient($input)
{
	$input=array();

	$sql = "UPDATE `preg20`.`patient` SET `lname` = \'" . $input['lname'] . "\', `fname` = \'" . $input['fname'] . "\', `username` = \'" . $input['username'] . "\', `country` = \'" . $input['country'] . "\', `zipcde` = \'" . $input['zip'] . "\' WHERE `patient`.`id` = 1;";
}
function addPatientFactor($input)
{
	$sql = "UPDATE `preg20`.`patient` SET `lname` = \'" . $input['lname']
	 . "\', `fname` = \'" . $input['fname']
	 . "\', `username` = \'" . $input['username']
	 . "\', `country` = \'" . $input['country']
	 . "\', `zipcde` = \'" . $input['zip']
	 . "\' WHERE `patient`.`id` = " . $input['patient_id'] . ";";
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
	. " LEFT JOIN factors f on fv.factor_id = f.id";
}


?>