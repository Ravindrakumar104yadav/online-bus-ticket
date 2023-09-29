<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive</title>
    <link rel="stylesheet" href="./register1.css">
</head>
<body>
    <header>
        <div class="contaner">
            <div id="branding">
                <h1><span class="highlight">Angel</span> Bus Services</h1>
            </div>
            <nav>
                <ul>
                <li ><a href="index4.html">HOME</a></li>
                    <li ><a href="About.php">ABOUT</a></li>
                    <li class="current"><a href="index4.php">USER</a></li>
                    <li><a href="Alert.php">ALERT</a></li>
                    <li><a href="Contact.php">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section id="About">
    <form action="register.php" method ="POST" class="form-4" >
				 <h1>Register</h1>
	First name
<input class="form-control" name="Fname" placeholder="eg:Johann" type="text" required>
	Last name
<input class="form-control" name="Lname" placeholder="eg:Bach" type="text">
 Email
<input class="form-control" name="Email" placeholder="eg:johannes@yaho.com" type="text" required>

	Username
<input class="form-control" name="Username" placeholder="choose a username" type="text" required>

    Password
<input class="form-control" name="Password" placeholder="choose a password" type ="password" required>
  Name of your primary school?
<input class="form-control" name="Security" placeholder="please answer the security question" type ="text" required>

 <input type="submit" class="btn btn-primary" name="sub" value="Register">
</form>

    </section>
    

    

    

    <footer>
        <p>Angel Bus Services, copyright &copy; 2023</p>
    </footer>


    
</body>
</html>