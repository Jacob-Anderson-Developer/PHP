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

// In this example, we are looking for California
$state = "California";

// Count the number of customers from California
$state_count_query = "SELECT COUNT(*) FROM biz_customer WHERE customer_state = '$state'";
$state_count_result = @mysqli_query($dbc, $state_count_query);
$state_count = mysqli_fetch_row($state_count_result)[0];

echo "Total customers from the state of California: $state_count <br/>";

mysqli_free_result($state_count_result);

// Fetch customer information from the database
$customer_query = "SELECT * FROM biz_customer WHERE customer_state ='$state'";
$customer_results = @mysqli_query($dbc, $customer_query);

// Store customer information in an array
$results = [];
while ($record = @mysqli_fetch_assoc($customer_results)) {
    $results[] = $record;
}

// Print customer information
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

// Display summary
$customer_count = count($results);
echo "The array contains information for $customer_count customer(s).";
?>
