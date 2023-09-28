<?php
// Attempt to establish a connection to the MySQL server
$connec = mysqli_connect("localhost", "root", "");

// Check for connection errors
if (!$connec) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the database
$db_selected = mysqli_select_db($connec, "bus booking system");

// Check if the database selection was successful
if (!$db_selected) {
    die("Database selection failed: " . mysqli_error($connec));
}

// Connection and database selection were successful
echo "Connected to MySQL server and selected database successfully.";

// You can now execute queries or perform database operations here

// Close the database connection when done
mysqli_close($connec);
?>