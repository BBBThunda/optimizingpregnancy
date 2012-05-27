<? 
include('db.php'); 
$db = openDatabase();

if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `patient` ( `lname` ,  `fname` ,  `username` ,  `country` ,  `zipcode`  ) VALUES(  '{$_POST['lname']}' ,  '{$_POST['fname']}' ,  '{$_POST['username']}' ,  '{$_POST['country']}' ,  '{$_POST['zipcode']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='listpatient.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Lname:</b><br /><input type='text' name='lname'/> 
<p><b>Fname:</b><br /><input type='text' name='fname'/> 
<p><b>Username:</b><br /><input type='text' name='username'/> 
<p><b>Country:</b><br /><input type='text' name='country'/> 
<p><b>Zipcode:</b><br /><input type='text' name='zipcode'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
