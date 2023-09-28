<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive</title>
    <link rel="stylesheet" href="./index4.css">
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
                    <li ><a href="About.php">ABOUT</a></li>
                    <li class="current"><a href="index4.php">USER</a></li>
                    <li><a href="Alert.php">ALERT</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    


    <section class="main">
				<form class="form-4" action="login.php" method ="POST" >
				    <h1>Login</h1>
				    <p>
				        <label for="">Username</label>
				        <input type="text" class="form-control" name="Username" placeholder="eg:Ravindra@12" required>
				    </p>
				    <p>
				        <label for="">Password</label>
				        <input type="password" class="form-control" name='Password' placeholder="eg:Ravindra@12" required>
				    </p>

				    <p>
				        <input type="submit" class="btn btn-primary" name="submit" value="Continue">
				    </p>
				    <p>
			    	<!-- <a href="#" > Forgot password?</a>  -->
				    	<!-- &nbsp; -->
				    	<a href="register1.php" style="color: aqua; text-decoration:none;" > Register Now</a>

				    </p>

				</form>​

	</section>
    

    

    

    <footer>
        <p>Angel Bus Services, copyright &copy; 2023</p>
    </footer>


    
</body>
</html>