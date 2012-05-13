<?php
// -- Retrieve the data from the database 
// -- write the results to a html table with links to the extended answer
require_once("./constants.php");

if ($_POST)
{
	if ($_POST["activity"] == "SEARCH")
	{
		displaySearchResults($_POST);
	}

} // end if ($_POST]


function displaySearchResults($terms)
{
	$searchTerm = $terms["searchTerm"];
	
	$sql = "select element from knowledgbase as kb join kb_elemement_to_search_term as te on kb.id = te.kb_element_id where te.search_term = '" . $searchTerm . "' ";
	$conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or die("Could not connect: " . mysql_errno() . ": " . mysql_error() . "<br> \n" . "connectDetails =|" . $this->getConnectDetails() . "| hostName = |" . $this->getDBHostName() .  "| databaseName = |" . $this->dbName . "|<br>userName=|" . $this->dbUserName . "|");
	mysql_select_db(DB_NAME, $conn) or die( "[" .basename(__FILE__) . " -  " . __METHOD__ . " - LINE " . __LINE__ . "] - mysql_select_db() Failure - Error is :".  mysql_errno() . ": " . mysql_error() . "<br>");
	$rs = mysql_query($sql, $conn) or die("[" .basename(__FILE__) . " -  " . __METHOD__ . " - LINE " . __LINE__ . "] - mysql_query() Failure - Error is :".  mysql_errno() . ": " . mysql_error() . "<br>");
	
	print'
		</div>
	<div style = "text-align:center; Width:80%">
		<div style = "border:1px solid black; width:500px; text-align:left;">
			<h1><center>Knowledge Base</center></h1>
			Pregnancy 2.0 is pleased to present our knowledge base to help you optmize your pregnacy outcomes   
		</div>
		<div style="text-align:right; background-color: rgb(230,230,230);">
			
			<form name=kbsearch" id="kbsearch" method="post" action="kb_controller.php">
			Enter a search term
			<input type="text"  name="searchTerm" id="searchTerm">
			<input type="submit" name="submitSearch" id="submitSearch" value = "Search">
			<input type="hidden" name="activity" value="SEARCH">
			</form>
		</div>
		';
		
	echo("<h2>You searched for " . $searchTerm . "</h2>");
	
	 if($rs)
		{
			if (mysql_num_rows($rs) > 0)
			{
				echo("<table style='width:80%;'>");
				$i = 0;
				
				while ($row = mysql_fetch_array($rs))
				{
					$element = $row["element"];
					
					echo("<tr><td><li>" . $element . "</li></td></tr>");
				}	
			echo("</table>");
			}//if (mysql_num_rows($rs) > 0)
		} // if($resultSet)
		
		print'
		<div style="text-align:left;">
		<h2><center>Based on your profile you may also find the following to be valuable...</center></h2>
		
		<li style>Women who suffer form diabetes have experienced ... </li>
		</div>
		';
	/*echo("<h1> SEARCH TERM is :|" . $searchTerm . "|</h1>");
	print_r($terms);
	//*/
	
	
}

?>