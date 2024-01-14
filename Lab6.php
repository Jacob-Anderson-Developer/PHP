<?php
/* 

Lab 5


*/
//////////////Established to connect to CIS267 database

include("dataConnect.php"); //include file

/////////////////////////Count Function//////////////////////////

echo "Hello world.. with include </br>";

$line=array(0,0,0,0,0,0,0,0,0,0);  //How many pieces of data you'll have is in the 0's
$results=array($line); //dynamic array

	$query_info_string = ("SELECT * FROM customer");
	$counter = 0;
	$q_results = @mysqli_query($dbc, $query_info_string); //holds connection for 30 seconds
//	$record = @mysqli_fetch_array($q_results, MYSQLI_BOTH);
	while ($record = @mysqli_fetch_array($q_results, MYSQLI_BOTH)) //Read and write data - MYSQLI_BOTH
	{
		$counter = $counter + 1;
		array_push($results,$line); //creates a new line for new information until there is nothing left to read
		$results[$counter][1] = $record["customer_id"];
		$results[$counter][2] = $record["f.name"];
		$results[$counter][3] = $record["l.name"];
		$results[$counter][4] = $record["address"];
		
	}
	mysqli_free_result($q_results); //gives results and ends connections to the database
	
	for ($j=1;$j<$counter+1;$j++)
	{
		echo "ID: ".$results[$j][1]." - ".$results[$j][2]." ".$results[$j][3]." --- Living at: ".$results[$j][4]."</br>";
	}
	









?>