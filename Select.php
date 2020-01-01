<?php include('DB/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $("#hidden").hide();
              $("#showProduct").click(function(){
                $("#hidden").show();
                });
            });
        </script>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="DB/validation.js"></script>
</head>
<body class="selectStyle">
    <div class="main">
        
        <div class="selectcontainer">
			
            <div class="select-content">
                <form method="post" id="select-form" class="select-form" onsubmit="return myFunction();">
                    <h2>Select</h2>
					<br>
                    <div class="form-group">
                        <label>Products </label>
                        <br>
                        <textarea></textarea>
                    </div>
                    
                    <div class="form-group">
                        <center><input type="button" name="showProduct" id="showProduct" class="form-submit submit" value="Show Products"/></center>
                    </div>
					<div id="hidden">
                        <div class="form-group">
                            <input type="number" class="form-input" name="id" id="id" placeholder="Product ID"  required/>
                        </div>
                        
                        <div class="form-group">
                            <center><input type="submit" name="select" id="select" class="form-submit submit" value="select"/></center>
                        </div>
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