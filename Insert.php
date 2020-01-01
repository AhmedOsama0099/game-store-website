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
 if(isset($_POST["insert"]))  
 {
      $name=$_POST['name'];
      $price=$_POST['price'];
      $Description=$_POST['Description'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO products(img,name,descreption,price) VALUES ('$file','$name','$Description',$price)";  
      if(mysqli_query($connect, $query))  
      { 
 
          /* echo '<script>alert("Image Inserted into Database")</script>';*/
          header("location: Insert.php");exit;
           
      }
      
 } 
 
 ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="DB/validation.js"></script>
    <style>
     textarea{
      width: 100%;
      height: 70px;
     }
    </style>
</head>
<body class="insertStyle">
    <div class="main">
        
        <div class="insertcontainer">
			
            <div class="insert-content">
                <form method="post" id="insert-form" class="insert-form" enctype="multipart/form-data" >
                    <h2>Insert</h2>
                    <br>
                    <br>
                    <br> 
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Name" required/>
                    </div>
                    
                    <div class="form-group">
                        Select image:<input type="file" name="image" id="image" />
                    </div>
                    
                    <div class="form-group">
                        <input type="number" class="form-input" name="price" id="price" placeholder="Price" step="0.01"  required/>
                    </div>
                    
                    <div class="form-group">
                     <textarea class="form-input" name="Description" id="Description" placeholder="Description" required></textarea>
                        <!--<input type="text" class="form-input" name="Description" id="Description" placeholder="Description" required/>-->
                    </div>
					
                    <div class="form-group">
                        <center><input type="submit" name="insert" id="submit" class="form-submit submit" value="Insert" onclick="return mess();"/></center>
                    </div>
                    <br>
                    <br>
                    <script type="text/javascript">
                      function mess(){
                        alert ("inserted succesfully");
                        return true;
                      }
                    </script>
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