<?php
/* 
Lab 8

**************Instructions************
Learn to use a Count function in SQL
Step 1: upload the biz_customer table

Using a count function in SQL 
Determine how many customers are from the state of California.

Echo the results.

Then show a summary of how many records there are using a count function for the results array.
*/

// Include the database connection
include("dataConnect.php");

/*************************** count function Example**************/

$columns = array("customer_id", "customer_first_name", "customer_last_name", "customer_email", "customer_street", "customer_city", "customer_state", "customer_zip", "customer_university");
$results = array();

// In this example we are looking for California
$state = "California";

$agent_amount_string = "SELECT COUNT(*) FROM biz_customer WHERE customer_state = '$state'";
$a_amount = @mysqli_query($dbc, $agent_amount_string);
$arow = mysqli_fetch_row($a_amount);
echo "Total customers from this state: " . $arow[0] . " <br/>";
$agent_amount = $arow[0];
echo "Amount $agent_amount </br>";

$query_info_string = ("SELECT * FROM biz_customer WHERE customer_state ='$state'");
$q_results = @mysqli_query($dbc, $query_info_string);

while ($record = @mysqli_fetch_array($q_results, MYSQLI_ASSOC)) {
    $results[] = $record;
}

mysqli_free_result($a_amount);

function print_customer($record) {
    echo " Customer ID: " . $record["customer_id"] . "</br>";
    echo " First Name: " . $record["customer_first_name"] . "</br>";
    echo " Last Name: " . $record["customer_last_name"] . "</br>";
    echo " Email: " . $record["customer_email"] . "</br>";
    echo " Street: " . $record["customer_street"] . "</br>";
    echo " City: " . $record["customer_city"] . "</br>";
    echo " State: " . $record["customer_state"] . "</br>";
    echo " Zip: " . $record["customer_zip"] . "</br>";
    echo " University: " . $record["customer_university"] . "</br></br>";
}

foreach ($results as $record) {
    print_customer($record);
}

$stuff = count($results);
echo "The array contained information for $stuff customer(s).";
?>
