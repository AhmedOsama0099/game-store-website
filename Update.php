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
    if(isset($_POST['update'])){
        
        $name=$_POST['name'];
        $price=$_POST['price'];
        $Description=$_POST['descreption'];
        //$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $id=$_POST[hidden];
        /*if($file){
            $updateQr="update  products set name='$name',price=$price,descreption='$Description',img='$file'  where id =$id";
            mysqli_query($connect, $updateQr);
            
        }*/
        //else{            
            $updateQr="update  products set name='$name',price=$price,descreption='$Description'  where id =$id";
            mysqli_query($connect, $updateQr);
        //}
        
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
    <title>Update</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="DB/validation.js"></script>
    <style>
        table{
            text-align: center;
        }
        td{
            text-align: center;
        }
        input{
            text-align: center;
        }
    </style>
</head>
<body class="updateStyle">
    <div class="main">
        
        <div class="updatecontainer">
			
            <div class="update-content">
                <form method="post" id="update-form" class="update-form" >
                    <h2>Update</h2>
					<br>
                    <?php
                        $query = "SELECT * FROM products ORDER BY id DESC";
                        $result = mysqli_query($connect, $query);
                        echo '
                         <table border=2 width=100%>
                        ';
                        echo "<tr>";
                            echo "<td>ID</td>";
                            echo "<td>NAME</td>";
                            echo "<td>descreption</td>";
                            echo "<td>price</td>";
                           // echo "<td>img</td>";
                            echo "<td>UPDATE</td>";
                        echo "</tr>";
                            
                        while($row = mysqli_fetch_array($result)){
                            echo"<form action =Update.php method=post enctype=multipart/form-data>";
                                echo "<tr>";
                                echo "<td>".$row["id"]."</td>";
                                echo "<td><input type=text name=name value=".$row["name"]."></td>";
                                echo "<td><input type=text name=descreption value=".$row["descreption"]."></td>";
                                echo "<td><input type=number name=price step=0.01 value=".$row["price"]."></td>";
                               // echo "<td><input type=file name=image id=image ></td>";
                                echo "<input type=hidden name=hidden value=".$row["id"].">";
                                echo "<td>"."<input type=submit name = update class=form-submit submit  value=UPDATE "."></td>";
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
                            <center><input type="submit" name="update" id="update" class="form-submit submit" value="update"/></center>
                        </div>
                    </div>-->
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

 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>