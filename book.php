<?php


session_start();

// Create a MySQLi connection
$connec = new mysqli("localhost", "root", "", "bus booking system");

// Check for connection errors
if ($connec->connect_error) {
    die("Connection failed: " . $connec->connect_error);
}

$ins = "INSERT INTO `booking`(`user`,`Bus_id`,`Seats_no`,`Total_fare`,`Bank`,`Payment_method`) VALUES (?, ?, ?, ?, ?, ?)";
$req = $_SESSION['Seats_no'];
$id = $_SESSION['Bus_id'];

// Prepare the INSERT statement
if ($stmt = $connec->prepare($ins)) {
    $stmt->bind_param("siiiss", $_SESSION['user'], $_SESSION['Bus_id'], $_SESSION['Seats_no'], $_SESSION['Total_fare'], $_POST['Bank'], $_POST['Payment_method']);
    // $stmt->execute();
    $stmt->close();

    // Update bus seats
    $upd = "UPDATE bus SET seats = seats - ? WHERE Id = ?";
    if ($stmt = $connec->prepare($upd)) {
        $stmt->bind_param("ii", $req, $id);
        $stmt->execute();
        $stmt->close();

        // Payment successful
        $_SESSION['pay'] = 'Payment successful...';
        header('location: generic.php');
    } else {
        echo "Error updating bus seats: " . $connec->error;
    }
} else {
    echo "Error inserting into booking: " . $connec->error;
}

// Close the MySQLi connection
$connec->close();
?>