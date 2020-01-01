<?php
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
?>
<!DOCTYPE html>
<html>
   
    </head>
  
  <style>
    
  .item{
      display: inline-block;
      margin-left: 60px;
      margin-top:100px;

}

#image{
  height: 100%;
  width: 100%;
  margin-top: 250px;
  text-align: center;
  }
.CCMSStyle{

background-image:url("images/ccms.jpg");


}
p {
  line-height: 1.2;
  margin: 0;
  padding: 0;
  font-weight: bold;
  color: #fff;
  font-family: 'Poppins';
  font-size: 36px;
  margin-bottom: 10px; }

a{
text-decoration: none;

}input[type=submit]{
  background-color: rgb(120,120,120);
  border: none;
  color: white;
  padding: 16px 32px;
 margin: 30px
}

  </style>
    </head>
    <body class="CCMSStyle">
            <form method=get>
              <input type="submit"  name="logout" value="LOGOUT">
            </form>
								
           <div id="image">
            
            <div class="item">
             <a href="Update.php"> <img src="images/update.png" width=200 height=150   border-radius= 50%;/> <p>Update</p></a>
             
            </div>
          
          
            <div class="item">
             <a href="Delete.php"> <img src="images/delete.png" width=200 height=150  border-radius= 50%;/>  <p>Delete</p></a>
            
            </div>
            
            <div class="item">
            <a href="Insert.php">  <img src="images/insert.png" width=200 height=150  border-radius=50%/><p>Insert</p></a>
              
             </div>
            <div class="item">
            <a href="addAdmin.php" > <img src="images/Add.png" width=200 height=150  border-radius=50%/><p>Add admin</p></a>
             </div>
            
            
            
            
    
    </div>
    

    </body>
</html>