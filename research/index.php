<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>

	  <!-- JQuery UI 1.8.16 smoothness skin -->
	  <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.8.16.custom.css"/>
	  
	  <link rel="stylesheet" type="text/css" href="css/common.css"/>
	</head>
<body>
<?php
print'
		<div style = "text-align:center; Width:80%">
		<div style = "border:1px solid black; width:500px; text-align:left;">
			<h1><center>Discovery</center></h1>
			Pregnancy 2.0  - Discover outcomes and optimizations for factors affecting your pregnancy   
		</div>
		</div>
	';
?>
<h1>Factors</h1>
<form name="discovery" method="post" action="display_results.php">
<table style = "width:100%;">
	<tr>
		<td>Age</td><td><select name="ageFactor" id="ageFactor" ><option value=0>Not Considered</option><option value=1>15-19</option><option value=2>20-29</option><option value=3>30-39</option><option value=4>40-49</option><option value=5>50+</option></select></td>
	</tr>
	<tr>
		<td>Location (Enter your Zipcode)</td><td><input type="text" id="location"></input></td>
	</tr>
	<tr>
		<td>Ethnicity</td><td><select name="ethnicityFactor" id="ethnicityFactor" ><option value=0>Not Considered</option><option value=1>white</option><option value=2>Black or African American</option><option value=3>Asian</option><option value=4>Hispanic</option><option value=5>Other</option></select></td>
	</tr>
	<tr>
		<td>Mother's Medical Conditions</td><td><select name="mothersConditionsFactor" id="mothersConditionsFactor" ><option value=0>Not Considered</option><option value=1>Diabetes</option><option value=2>Hypothyroid</option><option value=3>Depression</option><option value=4>No Conditions</option></select></td>
	</tr>
	<tr>
		<td>Mother's Medications</td><td><select name="mothersMedicationsFactor" id="mothersMedicationsFactor" ><option value=0>Not Considered</option><option value=1>No Medications</option><option value=2>Insulin</option><option value=3>Synthroid</option><option value=4>Zoloft</option><option value=5>Paxil</option></select></td>
	</tr>
	<tr><TD></TD><td><input type="submit" value="Submit"></td></tr>
</table>
</form>

</body>