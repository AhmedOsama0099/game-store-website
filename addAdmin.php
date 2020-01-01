<?php 
    $connect = mysqli_connect("localhost", "root", "12345678", "itproject");
  session_start();
            if (isset($_GET['logout'])) 
           {
               session_destroy();
               unset($_SESSION['email']);
               unset($_SESSION['type']);
               header("location: login.php");
           }
           if(!isset($_SESSION['email']))
        {
            header('location: LogIn.php');
        }
        if($_SESSION['type']!='admin'){
         header('location: LogIn.php');
        }
    if(isset($_POST['delete'])){
        
        $deleteQr="delete from products where id =$_POST[hidden]";
        mysqli_query($connect, $deleteQr);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Admin </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="DB/validation.js"></script>
</head>
<body class="addAdminStyle">
    <div class="main">
        
        <div class="addAdmincontainer">
			
            <div class="addAdmin-content">
                <form method="post" id="addAdmin-form" class="addAdmin-form" onsubmit="return myFunction();">
                    <h2>Add Admin</h2>
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
                        <center><input type="submit" name="addAdmin" id="submit" class="form-submit submit" value="Add Admin"/></center>
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