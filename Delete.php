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
    <title>Delete</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="DB/validation.js"></script>
</head>
<body class="deleteStyle">
    <div class="main">
        
        <div class="deletecontainer">
			
            <div class="delete-content">
                <form method="post" id="delete-form" class="delete-form" onsubmit="return myFunction();">
                    <h2>Delete</h2>
					<br>
                    <?php
                        $query = "SELECT id ,name  FROM products ORDER BY id DESC";
                        $result = mysqli_query($connect, $query);
                        echo '
                         <table border=2 width=100%>
                        ';
                        echo "<tr>";
                            echo "<td>ID</td>";
                            echo "<td>NAME</td>";
                            echo "<td>DELETE</td>";
                            echo "</tr>";
                            
                        while($row = mysqli_fetch_array($result)){
                            echo"<form action =Delete.php method=post>";
                                echo "<tr>";
                                echo "<td>".$row["id"]."</td>";
                                echo "<td>".$row["name"]."</td>";
                                echo "<input type=hidden name=hidden value=".$row["id"].">";
                                echo "<td>"."<input type=submit name = delete class=form-submit submit value=DELETE "."></td>";
                                echo "</tr>";
							echo "</form>";
                        }
                        echo '
                         </table>
                        ';
                    ?>
                    <!--<div class="form-group">
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
                            <center><input type="submit" name="delete" id="delete" class="form-submit submit" value="Delete"/></center>
                        </div>
                    </div>
					<br>
					<br>-->
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>