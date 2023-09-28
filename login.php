<?php


// Create a MySQLi connection
$mysqli = new mysqli("localhost", "root", "", "bus booking system");

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Sanitize user input to prevent SQL injection (consider using prepared statements)
$username = $mysqli->real_escape_string($_POST['Username']);
$pass = sha1($mysqli->real_escape_string($_POST['Password']));

// Construct the SQL query
$sel = "SELECT * FROM `user` WHERE Username = '$username' AND Password = '$pass'";

// Execute the query
$result = $mysqli->query($sel);

if ($result === false || $result->num_rows == 0) {
    // Invalid username or password
    session_start();
    $_SESSION['error'] = 'Invalid username or password';
    header('Location: index4.php');
} else {
    // Valid login
    session_start();
    $_SESSION['user'] = $_POST["Username"];
    header('Location: generic.php');
}

// Close the MySQLi connection
$mysqli->close();
?>

