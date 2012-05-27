<? 
include('db.php'); 
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id</b></td>"; 
echo "<td><b>Element</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `knowledgbase`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['element']) . "</td>";  
echo "<td valign='top'><a href=editkb.php?id={$row['id']}>Edit</a></td><td><a href=deletekb.php?id={$row['id']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=newkb.php>New Row</a>"; 
?>