<? 
include('db.php');
$db = openDatabase();
echo "<table border=1 >"; 
echo "<tr>"; 
echo "<td><b>Id</b></td>"; 
echo "<td><b>Lname</b></td>"; 
echo "<td><b>Fname</b></td>"; 
echo "<td><b>Username</b></td>"; 
echo "<td><b>Country</b></td>"; 
echo "<td><b>Zipcode</b></td>"; 
echo "</tr>"; 
$result = mysql_query("SELECT * FROM `patient`") or trigger_error(mysql_error()); 
while($row = mysql_fetch_array($result)){ 
foreach($row AS $key => $value) { $row[$key] = stripslashes($value); } 
echo "<tr>";  
echo "<td valign='top'>" . nl2br( $row['id']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['lname']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['fname']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['username']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['country']) . "</td>";  
echo "<td valign='top'>" . nl2br( $row['zipcode']) . "</td>";  
echo "<td valign='top'><a href=editpatient.php?id={$row['id']}>Edit</a></td><td><a href=deletepatient.php?id={$row['id']}>Delete</a></td> "; 
echo "</tr>"; 
} 
echo "</table>"; 
echo "<a href=newpatient.php>New Row</a>"; 
?>
