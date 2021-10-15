<?php  include 'database.php' ;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>User Registration</title>
</head>
<body>
    <div>
        <?php
          if(isset($_POST['create'])){
          $fname       =$_POST['firstName'];
          $lname       =$_POST['lastName'];
          $Email    =$_POST['emailaddress'];
          $phone       =$_POST['phonenumber'];
          $Password  =$_POST['password'];
            // Get image name
            $filename = $_FILES["user_image"]["name"];
            $tempname=$_FILES["user_image"]["tmp_name"];
            
            $folder="images/".$filename;
            
            if(move_uploaded_file($tempname,$folder))
            {
                echo "<img src='$folder' height='100' width='100'/>";
            }
            
              
              $query="INSERT INTO accounts   (fname,lname,email,phone,password,user_image)";
              $query.="VALUES('{$fname}','${lname}','{$Email}','{$phone}','{$Password}','{$folder}')";
              
              
              
              if (mysqli_query($connection, $query)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $query . "<br>" . mysqli_error($connection);
              }

          
          }
        ?>
    </div>
    
        <div>
        <form action="registration.php" method="post" enctype="multipart/form-data">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
             <h1>Registration Form</h1>
             <hr class ="mb-3">
             <label for="firstName"><b>First Name</b></label>
             <input class="form-control"type="text" name="firstName" required> 

             <label for="lastName"><b>Last Name</b></label>
             <input class="form-control"type="text" name="lastName" required>  

             <label for="Emailaddress"><b>Email Address</b></label>
             <input  class="form-control"type="email" name="emailaddress" required> 

             <label for="phone number"><b>Phone Number</b></label>
             <input  class="form-control"type="text" name="phonenumber" required> 

             <label for="password"><b>Password</b></label>
             <input class="form-control"type="password" name="password" required> 
             <hr class ="mb-3">
             <div class="signup__field">  
               <label class="signup__label_image" for="user_image">Image</label>
                <input class="signup__input" type="file" name="user_image" >
  </div>
             <div><input class ="btn btn-primary"type="submit" name="create"value="Sign Up">
                <span><b>Already Account</b><a href="signin.php ">Signin</a> </span>
                   </div>

             </div>
             </div>
            </div>
        </form>
    </div>
</body>
</html>
