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
    <?php session_start();?>

<center><i><font  size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>

<center>	<h2>Your Profile</h2> </center>

<?php
// include "include.php";
//$user=$_SESSION['user'];
//$Bus_id;

// Create a MySQLi connection
$connec = new mysqli("localhost", "root", "", "bus booking system");

// Check for connection errors
if ($connec->connect_error) {
    die("Connection failed: " . $connec->connect_error);
}

$sel = "SELECT * FROM `user` WHERE Username='" . $_SESSION['user'] . "'";
$result = $connec->query($sel);

if ($result === false || $result->num_rows == 0 || $result->num_rows > 1) {
    header('Refresh:5; url=generic.php');
    echo '<h3 style="text-align:center;"> <font color="red">Database Error </font></h3>';
    echo "<br>";
    echo '<p style="text-align:center">Redirecting to the home page in 5 seconds</p>';
} else {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="container">';
        echo '<table style="width:100%" align="center">';
        echo "<tr>";
        echo "<td>";
        echo '<h4> <i>First Name:</i></h4>';
        echo "</td>";
        echo "<td>";
        echo $row['Fname'];
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo '<h4> <i>Last Name:</i></h4>';
        echo "</td>";
        echo "<td>";
        echo $row['Lname'];
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo '<h4> <i>Username:</i></h4>';
        echo "</td>";
        echo "<td>";
        echo $row['Username'];
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo '<h4> <i>Email:</i></h4>';
        echo "</td>";
        echo "<td>";
        echo $row['Email'];
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo '<h4> <i>Elementary/Primary school:</i></h4>';
        echo "</td>";
        echo "<td>";
        echo $row['Security'];
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        echo "</div>";
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