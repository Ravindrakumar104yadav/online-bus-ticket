<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive</title>
    <link rel="stylesheet" href="./about.css">
</head>
<body>
    <header>
        <div class="contaner">
            <div id="branding">
                <h1><span class="highlight">Angel</span> Bus Services</h1>
            </div>
            <nav>
                <ul>
				<li class="current"><a href="generic.php">HOME</a></li>
                    <li ><a href="history1.php">Booking History</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="About">
    <?php
// include "include.php";

//$user=$_SESSION['user'];
//$Bus_id;
$bookingId = $_GET['id'];

// Create a MySQLi connection
$connec = new mysqli("localhost", "root", "", "bus booking system");

// Check for connection errors
if ($connec->connect_error) {
    die("Connection failed: " . $connec->connect_error);
}

$sel = "SELECT * FROM `booking` WHERE Booking_id = ?";
if ($stmt = $connec->prepare($sel)) {
    $stmt->bind_param("i", $bookingId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result === false || $result->num_rows == 0 || $result->num_rows > 1) {
        header('Refresh:5; url=generic.php');
        echo '<h3 style="text-align:center;"> <font color="red">Database Error </font></h3>';
        echo "<br>";
        echo '<p style="text-align:center">Redirecting to the home page in 5 seconds</p>';
    } else {
        while ($row = $result->fetch_assoc()) {
            $busId = $row['Bus_id'];

            $query2 = "SELECT * FROM `bus` WHERE Id = ?";
            if ($stmt2 = $connec->prepare($query2)) {
                $stmt2->bind_param("i", $busId);
                $stmt2->execute();
                $result2 = $stmt2->get_result();

                if ($result2->num_rows == 1) {
                    $row2 = $result2->fetch_assoc();

                    echo '<div class="container">';
                    echo '<table style="width:100%" align="center">';
                    echo "<tr>";
                    echo "<td>";
                    echo '<h4> <i>Date of Booking:</i></h4>';
                    echo "</td>";
                    echo "<td>";
                    echo $row['Date'];
                    echo "</td>";
                    echo "</tr>";
                    // Add other table rows for displaying bus information as needed
					echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Bus Name:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Name'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Origin:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Origin'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Destination:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Destination'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Arrival time:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Arrival_time'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Departure time:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Departure_time'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Date of journey:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row2['Date'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>No of seats:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Seats_no'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Total fare:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Total_fare'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Bank:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Bank'];
		echo "</td>";
	echo "</tr>";
	echo "<tr>";
		echo "<td>";
		echo '<h4> <i>Payment method:</i></h4>';
		echo "</td>";

		echo "<td>";
		echo $row['Payment_method'];
		echo "</td>";
	echo "</tr>";
                    echo "</table>";
                    echo "</div>";
                }
                $stmt2->close();
            }
        }
    }
    $stmt->close();
}

// Close the MySQLi connection
$connec->close();
?>	

    </section>
    

    

    

    <footer>
        <p>Angel Bus Services, copyright &copy; 2023</p>
    </footer>


    
</body>
</html>