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
                    <li ><a href="index.php">HOME</a></li>
                    <li class="current"><a href="About.php">ABOUT</a></li>
                    <li><a href="index4.php">USER</a></li>
                    <li><a href="Alert.php">ALERT</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="About">

    <?php
// include "include.php";
$req = $_POST["Seats"];
$Bus_id;
$sel = "SELECT * FROM `bus` WHERE Origin='" . $_POST["Origin"] . "' AND Destination='" . $_POST["Destination"] . "' AND Date='" . $_POST["Date"] . "' AND Seats >= " . $_POST["Seats"];

// Create a MySQLi connection
$connec = new mysqli("localhost", "root", "", "bus booking system");

// Check for connection errors
if ($connec->connect_error) {
    die("Connection failed: " . $connec->connect_error);
}

$result = $connec->query($sel);

if ($result === false || $result->num_rows == 0) {
    echo '<h3 style="text-align:center;"> <font color="red">No available Buses </font></h3>';
    echo "<br>";
} else {
    echo '<h3 style="text-align:center;"> <font color="red"><center>Available Buses </center></font></h3>';
    echo '<table align="center" border=1 >
    <tr>
    <th> Id </th>
    <th> Name of the bus</th>
    <th> Available seats </th>
    <th> Origin </th>
    <th> Destination </th>
    <th> Date of journey</th>
    <th> Arrival time </th>
    <th> Departure time </th>
    <th> Fare </th>
    <th> Book </th>
    </tr>';
    
    while ($row = $result->fetch_assoc()) {
        $Bus_id = $row['Id'];
        $Total_fare = $row['Fare'] * $req;
        echo "<tr>";
        echo "<td>" . $row['Id'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Seats'] . "</td>";
        echo "<td>" . $row['Origin'] . "</td>";
        echo "<td>" . $row['Destination'] . "</td>";
        echo "<td>" . $row['Date'] . "</td>";
        echo "<td>" . $row['Arrival_time'] . "</td>";
        echo "<td>" . $row['Departure_time'] . "</td>";
        echo "<td>" . $row['Fare'] . "</td>";
        echo "<td>";
        echo '<a href="payment1.php?Seats_no=' . $req . '&Bus_id=' . $Bus_id . '&Total_fare=' . $Total_fare . '">Book Now</a>';
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
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