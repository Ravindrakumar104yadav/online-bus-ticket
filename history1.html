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
		session_start();

			if(isset($_SESSION['del']))
		{
			echo '<p class="message"> <font size="4" color="MediumMagenta"><center> <i>';
			echo $_SESSION['del'];
			echo $_SESSION['refund'];
			echo $_SESSION['mesg'];
			echo "</i></center></font></p>";
			unset($_SESSION['del']);
		}
	/*	echo '<h3 style="text-align:left;"> <font color="red"> <i> Hello ';
		echo $_SESSION['user'];
		echo "</i> </font>";
		echo '</h3>';*/
		?>

		<center><i><font size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
		
		<center>	<h2>Booking History</h2> </center>

		<?php
// include "include.php";
//$user=$_SESSION['user'];
$Bus_id;

// Create a MySQLi connection
$connec = new mysqli("localhost", "root", "", "bus booking system");

// Check for connection errors
if ($connec->connect_error) {
    die("Connection failed: " . $connec->connect_error);
}

$sel = "SELECT * FROM `booking` WHERE user='" . $_SESSION['user'] . "'";
$result = $connec->query($sel);

if ($result === false) {
    echo "Error: " . $connec->error;
} else {
    $rows = $result->num_rows;
    if ($rows == 0) {
        echo '<h3 style="text-align:center;"> <font color="red">You have not booked any buses </font></h3>';
        echo "<br>";
    } else {
        echo '<table align="center" border=1 >
        <tr>
        <th> Date and Time</th>
        <th> Bus id  </th>
        <th> No of seats</th>
        <th> Total fare </th>
        <th> Bank </th>
        <th> Payment method </th>
        <!--<th> Cancel now </th> -->
        <th> View Ticket</th>
        </tr>';

        while ($row = $result->fetch_assoc()) {
            $Date = $row['Date'];
            $Fare = $row['Total_fare'];
            $id = $row['Bus_id'];
            $req = $row['Seats_no'];
            $book_id = $row['Booking_id'];

            echo "<tr>";
            echo "<td>" . $row['Date'] . "</td>";
            echo "<td>" . $row['Bus_id'] . "</td>";
            echo "<td>" . $row['Seats_no'] . "</td>";
            echo "<td>" . $row['Total_fare'] . "</td>";
            echo "<td>" . $row['Bank'] . "</td>";
            echo "<td>" . $row['Payment_method'] . "</td>";
            //	echo "<td>";
            //	echo '<a href="cancel.php?Date='.$Date.' & Fare='.$Fare.'& id='.$id.'& req='.$req.'">Cancel Now</a>';
            //	echo "</td>";
            echo "<td>";
            echo '<a href="view_ticket1.php?id=' . $book_id . '">View Ticket</a>';
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
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