<?php
/* 

We are Hawkeye INC and we have recently acquired a company called Jewel. We both sold some of the same products and our goal is to integrate all of our company processes into a single form.
In other words, we are migrating the data from Jewel and their processes and incorporating them into our own.

Goals:
Incorporate Jewel company table into Hawkeye customer table making sure we have no duplications. If we have a duplication, note it in the source code at the bottom and do not import that company. In other words, if we have a duplication, we do not create a separate company listing for them, we use our existing company ID for them. This is very important in step E.
Merge product tables and product keys from Jewel to Hawkeye. Match where you can, create new otherwise. No duplications.
Clean up the Hawkeye customer table and add contact as a secondary key to the contact table and remove the contact name in the customer table once you have completed
When importing contact information, do not duplicate contact records. If we have the same person as a contact in two companies, make sure they do not have separate records in the Hawkeye contact table. If we have two different contact people for the same company, use Hawkeye contacts.

*/

// Include the database connection
include("dataConnect.php");

// Step 1: Incorporate Jewel company table into Hawkeye customer table
$query = "INSERT INTO hawkeye_customer (hc_name, hc_address, hc_city, hc_state, hc_zip) 
          SELECT jc.company_name, jc.company_address, jc.company_city, jc.company_state, jc.company_zip
          FROM jewel_company jc
          LEFT JOIN hawkeye_customer hc ON jc.company_name = hc.hc_name
          WHERE hc.hc_name IS NULL";

mysqli_query($dbc, $query);

// Step 2: Merge product tables and product keys from Jewel to Hawkeye
$query = "INSERT IGNORE INTO hawkeye_products (product_name, product_price)
          SELECT product_name, product_price
          FROM jewel_products";

mysqli_query($dbc, $query);

// Step 3: Clean up Hawkeye customer table and add contact as a secondary key
$query = "UPDATE hawkeye_customer hc
          JOIN hawkeye_contacts hco ON hc.hc_name = hco.hco_company
          SET hc.hc_contact_id = hco.hco_id";

mysqli_query($dbc, $query);

$query = "UPDATE hawkeye_customer
          SET hc_contact_id = NULL, hc_contact_name = ''";

mysqli_query($dbc, $query);

// Step 4: Import contact information without duplications
$query = "INSERT IGNORE INTO hawkeye_contacts (hco_name, hco_company, hco_email, hco_phone)
          SELECT contact_name, company_name, contact_email, contact_phone
          FROM jewel_contacts";

mysqli_query($dbc, $query);

// Step 5: Ensure only one contact record per company
$query = "DELETE hco1
          FROM hawkeye_contacts hco1
          INNER JOIN hawkeye_contacts hco2 ON hco1.hco_company = hco2.hco_company
          WHERE hco1.hco_id > hco2.hco_id";

mysqli_query($dbc, $query);

// Step 6: Handle different contact people for the same company
$query = "UPDATE hawkeye_customer hc
          JOIN hawkeye_contacts hco ON hc.hc_name = hco.hco_company
          SET hc.hc_contact_id = hco.hco_id
          WHERE hc.hc_contact_id IS NULL";

mysqli_query($dbc, $query);

// Close the database connection
mysqli_close($dbc);

echo "Data migration and integration completed successfully!";
?>
