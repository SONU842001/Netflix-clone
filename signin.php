<?php  
session_start();
include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
   if(isset($_POST['login'])){
       
       $useremail=$_POST['email'];
       $password=$_POST['password'];
   
    $query="SELECT * FROM accounts WHERE email='$useremail' && password='$password'";
       $data=mysqli_query($connection,$query);
       $total=mysqli_num_rows($data);
        if($total==1)
        {
            $_SESSION['user_name']=$useremail;
            header("Location: index.php");
        }
        else{
            echo "Login Failed";
            
        }
    
    }
    ?>

<div>
        <form action="" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
             <h1>Signin</h1>
             <hr class ="mb-3">
             
             <label for="Emailaddress"><b>Email Address</b></label>
             <input  class="form-control"type="email" name="email" required> 

            <label for="password"><b>Password</b></label>
             <input class="form-control"type="password" name="password" required> 
             <hr class ="mb-3">
             <div><input class ="btn btn-primary"type="submit" name="login"value="Signin">
                <span><b>New user</b><a href="registration.php ">Signup</a> </span>
                   </div>
             </div>
             </div>
            </div>
        </form>
    </div>
</body>
</html>
