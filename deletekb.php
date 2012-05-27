<? 
include('db.php'); 
$id = (int) $_GET['id']; 
mysql_query("DELETE FROM `knowledgbase` WHERE `id` = '$id' ") ; 
echo (mysql_affected_rows()) ? "Row deleted.<br /> " : "Nothing deleted.<br /> "; 
?> 

<a href='listkb.php'>Back To Listing</a>