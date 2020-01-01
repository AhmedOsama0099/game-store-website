<?php
session_start();

/*session_start();*/

   /* $username = "";
    $email    = "";*/
   class connection{
    function aa(){
       $db = mysqli_connect('localhost', 'root', '12345678', 'itproject');
    
    if (isset($_POST['signUp'])) {
         $email=$_POST['email'];
         $username=$_POST['username'];
         $password=$_POST['password'];
         $age=$_POST['age'];
         $user_check_query = "SELECT * FROM users WHERE email='$email'";
         $result = mysqli_query($db, $user_check_query);
         $user = mysqli_fetch_assoc($result);
        if ($user) { // if user exists
                $message = "user already exist";
                echo "<script type='text/javascript'>alert('$message');</script>";
               
        }
        else{
            $query = "INSERT INTO users(email,username,pw,age,type)
                    VALUES ('$email','$username','$password',$age,'normal')";
            mysqli_query($db, $query);
            echo("<script>location.href = 'login.php';</script>");
            exit;
        }
        

    
  }
  if (isset($_POST['addAdmin'])) {
         $email=$_POST['email'];
         $username=$_POST['username'];
         $password=$_POST['password'];
         $age=$_POST['age'];
         $user_check_query = "SELECT * FROM users WHERE email='$email'";
         $result = mysqli_query($db, $user_check_query);
         $user = mysqli_fetch_assoc($result);
        if ($user) { // if user exists
                $message = "user already exist";
                echo "<script type='text/javascript'>alert('$message');</script>";
               
        }
        else{
            $query = "INSERT INTO users(email,username,pw,age,type)
                    VALUES ('$email','$username','$password',$age,'admin')";
            mysqli_query($db, $query);
            echo("<script>location.href = 'CCMS.PHP';</script>");
            exit;
        }
        

    
  }
  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user_check_query = "SELECT * FROM users WHERE email='$email' and pw='$password'";
         $result = mysqli_query($db, $user_check_query);
         $user = mysqli_fetch_assoc($result);
        if($user){
          
          if($user['type']=='normal'){
            $_SESSION["email"] = $email;
            $_SESSION["type"]='normal';
            echo("<script>location.href = 'home.php';</script>");
            exit;
          }
          else{
            $_SESSION["email"] = $email;
            $_SESSION["type"]='admin';
            echo("<script>location.href = 'CCMS.php';</script>");
            exit;
          }
        }
        else{
            $message = "No such email or password";
                echo "<script type='text/javascript'>alert('$message');</script>";
        
        }
  }
    }
   }
   
?>