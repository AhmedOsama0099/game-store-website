<?php include('DB/server.php');
    $db = new connection();
    $db->aa();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="DB/validation.js"></script>
</head>
<body class="signUpStyle">

    <div class="main">
		
        <div class="signUpcontainer">
			
            <div class="signup-content">
                <form method="post" id="signup-form" class="signup-form" onsubmit="return myFunction();">
                    <h2>Sign up </h2>
					<br>
					<br>
					<br>
                    <div class="form-group">
                        <input type="text" class="form-input" name="username" id="name" placeholder="User Name" required/>
                    </div>
					<div class="form-group">
                        <input type="number" class="form-input" name="age" id="age" placeholder="Age" required/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                    </div>
					
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>

                    </div>
                    <div class="form-group">
					    <input type="password" class="form-input" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required/>

                    </div>
                    	
                    <div class="form-group">
					
                        <center><input type="submit" name="signUp" id="submit" class="form-submit submit" value="Sign up"/></center>
                    </div>
					<br>
					<br>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>