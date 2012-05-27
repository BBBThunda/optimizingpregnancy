<? 
include('db.php'); 
$db = openDatabase();

$id = (int) $_GET['id']; 
mysql_query("DELETE FROM `patient` WHERE `id` = '$id' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='listpatient.php'>Back To Listing</a>
