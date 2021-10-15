<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" " method="post" enctype="multipart/form-data">
    <input type="file" name="user_image" value=" ">
    <input type="submit" name="submit" value ="upload_file">
    </form>
</body>
</html>
<?php 

$filename = $_FILES["user_image"]["name"];
            $tempname=$_FILES["user_image"]["tmp_name"];
            
            $folder="images".$filename;
            echo $folder;
            if(move_uploaded_file($tempname,$folder))
            {
                echo "<img src='$folder' height='100' width='100'/>";
            echo "file is uploaded";}
            else
            echo "sorry try again";


?>
