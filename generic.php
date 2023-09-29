<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive</title>
    <link rel="stylesheet" href="./generic.css">
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

    <section class="main">
    <?php
		session_start();
		if(isset($_SESSION['pay']))
		{
			echo '<p class="message"> <font size="5" color="MediumVioletRedMagenta"> <center><i>';
			echo $_SESSION['pay'];
			echo "</i></center></font></p>";
			unset($_SESSION['pay']);
		}
		if(isset($_SESSION['updt']))
		{
			echo '<p class="message"> <font size="5" color="MediumMagenta"> <center><i>';
			echo $_SESSION['updt'];
			echo "</i></center></font></p>";
			unset($_SESSION['updt']);
		}
		// echo '<h3 style="text-align:left;"> <font color="red"> <i> Hello ';
		// echo $_SESSION['user'];
		// echo "</i> </font>";
		echo '</h3>';
		?>
		
		<center><i><font size="35"><strong>Hello <?php echo $_SESSION['user']?></font></i></strong></center>
                
				<form class="form-4" action="bus_details1.php" method ="POST" >
                
                <div>
                <label for="">From</label>
                <input class="form-control" placeholder="Enter a city" type="text" name="Origin" >
                </div>
                
                
                <div>
                <label for="">To</label>
                <input class="form-control" type="text" placeholder="Enter a city" name="Destination" >
                </div>
                
                
                <div>
                <label for="">Date of journey</label>
                <input class="form-control" type="text" placeholder="yyyy-dd-mm" name="Date" >
                </div>
                
                 
                
                <div>
                <label for="">No of seats</label>
                <input class="form-control" type="text" placeholder="Enter no of seats you want to book" name="Seats" >
                </div>
                
                
                
                <div>
                <input class="btn btn-primary" type="submit" value="Submit">
                </div>
                

				</form>​

	</section>
    
    
    

    

    

    <footer>
        <p>Angel Bus Services, copyright &copy; 2023</p>
    </footer>


    
</body>
</html>