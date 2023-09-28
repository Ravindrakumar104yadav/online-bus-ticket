<?php
include "include.php";

session_start();

// Validate input data
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$email = $_POST['Email'];
$username = $_POST['Username'];
$password = $_POST['Password'];
$security = $_POST['Security'];

if (empty($fname) || empty($lname) || empty($email) || empty($username) || empty($password) || empty($security)) {
    $_SESSION['reg_error'] = 'All fields are required!';
    header('Location: index4.php');
    exit();
}

// Hash the password
$hashedPassword = sha1($password);

// Check if the email is already registered
$db = new mysqli("localhost", "root", "", "bus booking system");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$checkEmailQuery = "SELECT * FROM `user` WHERE Email = ?";
$stmt = $db->prepare($checkEmailQuery);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['reg_error'] = 'Email already registered!';
    $stmt->close();
    $db->close();
    header('Location: index4.php');
    exit();
}

// Insert new user
$insertQuery = "INSERT INTO `user`(`Fname`, `Lname`, `Email`, `Username`, `Password`, `Security`) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $db->prepare($insertQuery);
$stmt->bind_param("ssssss", $fname, $lname, $email, $username, $hashedPassword, $security);

if ($stmt->execute()) {
    $_SESSION['reg'] = 'Registered successfully. Please log in!';
} else {
    $_SESSION['reg_error'] = 'Registration failed. Please try again later.';
}

$stmt->close();
$db->close();
header('Location: index4.php');
exit();
?>