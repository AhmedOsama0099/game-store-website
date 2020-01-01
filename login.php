<?php include('DB/server.php');
    session_start();
unset($_SESSION['email']);
unset($_SESSION['type']);
    $db = new connection();
    $db->aa();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $("#hidden").hide();
              
              $("#button").click(function(){
                $("#hidden").show();
                $("#button").hide();
                $("#signUp").hide();
              });
              
            });
        </script>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="DB/validation.js"></script>
</head>
<body class="loginStyle">
    <div class="main">
        <div class="container">
            <div class="login-content">
                <form method="post" id="login-form" class="login-form">
                    <div id ="hidden">
                        <h2>Login</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required/>
                        </div>
                       <div class="form-group">
                            <center><input type="submit" name="login" id="submit" class="form-submit submit" value="Login"/></center>
                        </div>
                    </div>
                    <div class="form-group">
                            <center><input type="button" name="login" id="button" class="form-submit submit" value="Login"/></center>
                        </div>
                    <div class="form-group">
                        <a href="signUp.php"><center><input type="button" name="signUp" id="signUp" class="form-submit submit" value="signUp"/></center></a>
                        
                    </div>
					
                </form>
            </div>
        </div>

    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>