<?php
/* 
Lab 6
*/
// Include file to connect to the CIS267 database
include("dataConnect.php");

// Display a greeting
echo "Hello world.. with include </br>";

// Initialize variables
$line = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);  // Number of data elements
$results = array($line);  // Dynamic array

// Query to retrieve customer information
$query_info_string = "SELECT * FROM customer";
$counter = 0;
$q_results = @mysqli_query($dbc, $query_info_string);

// Loop through the query results and store them in the $results array
while ($record = @mysqli_fetch_array($q_results, MYSQLI_BOTH)) {
    $counter++;
    array_push($results, $line);
    $results[$counter][1] = $record["customer_id"];
    $results[$counter][2] = $record["f.name"];
    $results[$counter][3] = $record["l.name"];
    $results[$counter][4] = $record["address"];
}

mysqli_free_result($q_results);  // Free up resources associated with the query

// Display customer information
for ($j = 1; $j < $counter + 1; $j++) {
    echo "ID: " . $results[$j][1] . " - " . $results[$j][2] . " " . $results[$j][3] . " --- Living at: " . $results[$j][4] . "</br>";
}
?>
