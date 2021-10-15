

<?php session_start(); ?>
<?php  include 'database.php'; ?>




<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Trailer</title>
<link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
 <div id="home" class="navbar">
     <div class="navbar-container">
         <div class="logo-container"><h1 class="logo">Flakes</h1></div>
         <div class="menu-container">
           <ul class="menu-list">
               <li class="menu-list-item active"><a href="#Home" >Home</a></li>
               <li class="menu-list-item"><a href="#Movies">Movies</a></li>
               <li class="menu-list-item"><a href="#Series">Series</a></li>
               <li class="menu-list-item"><a href="#Popular">Popular</a></li>
               <li class="menu-list-item"><a href="#Trends">Trends</a></li>
               </ul>  
              </div>






              <!-- search container starts -->
              <div class ="search-container">
                <form action="">
                  <input class=" search-input"type="search" placeholder="search">
                  <button class="search-button"type="submit"><i class="fa fa-search" ></i></button>
                </form>
              </div>

              <!-- search container ends -->




        
          
         <!-- Profile container starts -->
         <div class="profile-container">
         <?php
            if($_SESSION['user_name']){
                echo"<a class='logout' href='logout.php'>logout</a>";
            }else{
                echo "<a href='registration.php'>login/Signup</a>";
            }
            $user_profile=$_SESSION['user_name'];
            $query="SELECT * FROM accounts WHERE email='$user_profile'";
             
              $data=mysqli_query($connection,$query);
               $result=mysqli_fetch_assoc($data);


               //Profile-user image with session 


               if($_SESSION['user_name']){
                $folder=$result['user_image'];
                 echo "<img class='profile-picture' src='$folder'  />";}
                 

            ?>



            <!-- Profile-user name with session  starts-->
             
                
             <div class="profile-text-container">
             
                 <span class="profile-text">
                 
                 <?php
                 echo $result['fname'];
                 
                 ?>
                 </span>
                
             </div>
                
               <!-- Profile-user name with session  ends-->  
                
             

         </div>
     </div>
    
 </div> 
 <!-- navigation bar ends-->


 <!-- side -bar starts -->
 <div class="sidebar"> 
    <a href="#Home"><i class="left-menu-icon fas fa-home"></i></a>
    <i class="left-menu-icon fas fa-search"></i>
    <i class="left-menu-icon fas fa-users"></i>
    <i class="left-menu-icon fas fa-bookmark"></i>
    <i class="left-menu-icon fas fa-tv"></i>
    <i class="left-menu-icon fas fa-hourglass-start"></i>
    <i class="left-menu-icon fas fa-cart-plus"></i>
 </div> 
<!-- side -bar ends -->

<!-- home page starts -->

 <div id= "Home"  class="container">
     <div class="content-container">
         <div class="featured-content"
         style="background: linear-gradient(to bottom,rgba(0,0,0,0) ,#151515) ,url('img/f-1.jpeg');">
         <img class="featured-title" src="img/f-t-1.png" alt="">
         <p class="featured-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius voluptates optio culpa beatae impedit deserunt vel! Repellat nostrum illo ullam excepturi fugiat esse ipsam nemo aspernatur quos dolorum! Quisquam, illo.</p>
         <button class="featured-button">WATCH NOW</button>
        </div>
        <div class="movie-list-container">
            <h1 id="Movies"class="movie-list-title">NEW RELEASES</h1>
             <div class="movie-list-wrapper">
               <div class="movie-list">
                   <div class="movie-list-item">
                       <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                       <span class="movie-list-item-title">Her</span>
                       <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                         <button class="movie-list-item-button">Watch</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing   </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
               </div> 
               <i class="fas fa-chevron-right arrow"></i>
             </div>
        </div>
        <div  id="Series" class="movie-list-container">
            <h1 class="movie-list-title">WEB SERIES</h1>
             <div class="movie-list-wrapper">
               <div class="movie-list">
                   <div class="movie-list-item">
                       <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                       <span class="movie-list-item-title">Her</span>
                       <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                         <button class="movie-list-item-button">Watch</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing   </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
               </div> 
               <i class="fas fa-chevron-right arrow"></i>
             </div>
        </div>
        <div id="Popular"class="featured-content"
         style="background: linear-gradient(to bottom,rgba(0,0,0,0) ,#151515) ,url('img/f-2.jpeg');">
         <img class="featured-title" src="img/f-t-2.png" alt="">
         <p class="featured-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eius voluptates optio culpa beatae impedit deserunt vel! Repellat nostrum illo ullam excepturi fugiat esse ipsam nemo aspernatur quos dolorum! Quisquam, illo.</p>
         <button class="featured-button">WATCH NOW</button>
        </div>
        <div id ="Trends" class="movie-list-container">
            <h1 class="movie-list-title">TRENDING MOVIE</h1>
             <div class="movie-list-wrapper">
               <div class="movie-list">
                   <div class="movie-list-item">
                       <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                       <span class="movie-list-item-title">Her</span>
                       <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                         <button class="movie-list-item-button">Watch</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing   </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
               </div> 
               <i class="fas fa-chevron-right arrow"></i>
             </div>
        </div>
        
        <div class="movie-list-container">
            <h1 class="movie-list-title">TRENDING WEB SERIES</h1>
             <div class="movie-list-wrapper">
               <div class="movie-list">
                   <div class="movie-list-item">
                       <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                       <span class="movie-list-item-title">Her</span>
                       <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                         <button class="movie-list-item-button">Watch</button>
                    </div>
                    <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing   </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing  </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
                     <div class="movie-list-item">
                        <img class="movie-list-item-img" src="img/1.jpeg" alt="">
                        <span class="movie-list-item-title">Her</span>
                        <p class="movie-list-item-desc">Lorem ipsum, dolor sit amet consectetur adipisicing </p>
                          <button class="movie-list-item-button">Watch</button>
                     </div>
               </div> 
               <i class="fas fa-chevron-right arrow"></i>
             </div>
        </div>
     </div>
 </div>
 
    <script src="js/main.js"></script>
</body>
</html>
