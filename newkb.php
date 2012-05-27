<? 
include('db.php'); 
if (isset($_POST['submitted'])) { 
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); } 
$sql = "INSERT INTO `knowledgbase` ( `element`  ) VALUES(  '{$_POST['element']}'  ) "; 
mysql_query($sql) or die(mysql_error()); 
echo "Added row.<br />"; 
echo "<a href='listkb.php'>Back To Listing</a>"; 
} 
?>

<form action='' method='POST'> 
<p><b>Element:</b><br /><input type='text' name='element'/> 
<p><input type='submit' value='Add Row' /><input type='hidden' value='1' name='submitted' /> 
</form> 
