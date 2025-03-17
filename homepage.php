
<?php
session_start();
include("connect.php");
include("config.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebarnav.css">
       <!--=============== REMIXICONS ===============-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

<!--=============== CSS ===============-->
        <link rel="stylesheet" href="sidebar/css/styles.css">

<title>Admin</title>
</head>
<body>
<!--=============== HEADER ===============-->
<header class="header" id="header">
   <div class="header__container">
      
      <button class="header__toggle" id="header-toggle">
         <i class="ri-menu-line"></i>
      </button>
   </div>
</header>

<!--=============== SIDEBAR ===============-->
<nav class="sidebar" id="sidebar">
   <div class="sidebar__container">
      <div class="sidebar__user">
         <div class="sidebar__img">
            <img src="assets/img/perfil.png" alt="image">
         </div>
<!--================SIDEBAR INFO============-->
         <div class="sidebar__info">
         <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstname'].' '.$row['lastname'];
        }
       }
       ?>
         </div>
      </div>

      <div class="sidebar__content">
         <div>
            <h3 class="sidebar__title">MANAGE</h3>

            <div class="sidebar__list">
               <a href="#" class="sidebar__link active_link">
                  <i class="ri-pie-chart-2-fill"></i>
                  <span>Dashboard</span>
               </a>

               <a href="updates.php" class="sidebar__link">
                  <i class="ri-arrow-up-down-line"></i>
                  <span>Manage</span>
               </a>

               <button>
               <i class="ri-moon-clear-fill sidebar__link sidebar__theme" id="theme-button">
               <span>Theme</span>
                </i>
               </button>

               <a href="logout.php">
               <button class="sidebar__link">
               <i class="ri-logout-box-r-fill"></i>
               <span>Log Out</span>
               </button>
               </a>
   
            </div>
         </div>
      </div>
   </div>
</nav>

<!--=============== MAIN ===============-->
<main class="main container" id="main">


<section class="section">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                       
<?php
$sql1 ="SELECT id from patients ";
$query1 = $dbh -> prepare($sql1);
$query1->execute();
$results1=$query1->fetchAll(PDO::FETCH_OBJ);
$totalPatients=$query1->rowCount();
?>

                                            <span class="number counter"><?php echo htmlentities($totalPatients);?></span>
                                            <span class="name">Patients</span>
                                            <span class="bg-icon"><i class="ri-arrow-up-down-line"></i></span>
                                    </div>      
                                 </div>
                              </div>
</section>

                               

</main>



<!--=============== MAIN JS ===============-->
<script src="sidebar/js/main.js"></script>
</body>
</html>
</head>
<body>
    
</body>
</html>
