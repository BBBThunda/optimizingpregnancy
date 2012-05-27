<? 
include('db.php'); 
$db = openDatabase();

if (isset($_GET['id']) ) { 
$id = (int) $_GET['id']; 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "UPDATE `patient` SET  `lname` =  '{$_POST['lname']}' ,  `fname` =  '{$_POST['fname']}' ,  `username` =  '{$_POST['username']}' ,  `country` =  '{$_POST['country']}' ,  `zipcode` =  '{$_POST['zipcode']}'   WHERE `id` = '$id' "; 
mysql_query($sql) or die(mysql_error()); 
echo (mysql_affected_rows()) ? "Edited row.<br />" : "Nothing changed. <br />"; 
echo "<a href='listpatient.php'>Back To Listing</a>"; 
} 
$row = mysql_fetch_array ( mysql_query("SELECT * FROM `patient` WHERE `id` = '$id' ")); 
?>

<form action='' method='POST'> 
<p><b>Lname:</b><br /><input type='text' name='lname' value='<?= stripslashes($row['lname']) ?>' /> 
<p><b>Fname:</b><br /><input type='text' name='fname' value='<?= stripslashes($row['fname']) ?>' /> 
<p><b>Username:</b><br /><input type='text' name='username' value='<?= stripslashes($row['username']) ?>' /> 
<p><b>Country:</b><br /><input type='text' name='country' value='<?= stripslashes($row['country']) ?>' /> 
<p><b>Zipcode:</b><br /><input type='text' name='zipcode' value='<?= stripslashes($row['zipcode']) ?>' /> 
<p><input type='submit' value='Edit Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
<? } ?> 
