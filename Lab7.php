<?php
/* 
**************Instructions************
using the patient  Table.
Get a list of 6  patients and echo out their
1. pet id
2. customer ID
3. Pet name
4. Pet Type
5. breed
6. temperment

-> Add a new Pet 
-> Change Pet ID 5 temperment to Neurotic and afraid
*/

// Include the database connection
include("dataConnect.php");

// Function to print customer information
function print_customer($results, $record) {
    echo " Pet ID: ".$results[$record][1]."</br>";
    echo " Pet Name: ".$results[$record][2]."</br>";
    echo " Pet Type: ".$results[$record][3]."</br>";
    echo " Pet Color: ".$results[$record][4]."</br>";
    echo " Pet Breed: ".$results[$record][5]."</br>";
    echo " Date of Birth: ".$results[$record][6]."</br>";
    echo " Temperment: ".$results[$record][7]."</br>";
    echo " Customer ID: ".$results[$record][8]."</br></br>";
}

// Fetch customer information from the database
$line = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$results = array($line);
$query_info_string = ("SELECT * FROM PATIENT
    LEFT JOIN CUSTOMER ON PATIENT.customer_f = CUSTOMER.customer_id");
$counter = 0;
$q_results = @mysqli_query($dbc, $query_info_string);
$record = @mysqli_fetch_array($q_results, MYSQLI_BOTH);

while ($record = @mysqli_fetch_array($q_results, MYSQLI_BOTH)) {
    $counter = $counter + 1;
    array_push($results, $line);
    $results[$counter][1] = $record["pet_id"];
    $results[$counter][2] = $record["pet_name"];
    $results[$counter][3] = $record["pet_type"];
    $results[$counter][4] = $record["pet_color"];
    $results[$counter][5] = $record["breed"];
    $results[$counter][6] = $record["dob"];
    $results[$counter][7] = $record["temperment"];
    $results[$counter][8] = $record["customer_id"];
}

// Print customer information
for ($j = 1; $j < $counter + 1; $j++) {
    print_customer($results, $j);
}

// Update temperment for Pet ID 5
$cid = 5;
$sql = "UPDATE PATIENT SET temperment = 'Neurotic and Afraid' WHERE pet_id = $cid";

if ($result = $dbc->query($sql)) {
    echo "Record updated successfully <br/>";
    $success = 0;
} else {
    $last_id = 0;
    printf("Error: %s\n", mysqli_error($dbc));
}

mysqli_free_result($q_results);
?>
