
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

<title>Manage</title>
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
               <a href="homepage.php" class="sidebar__link ">
                  <i class="ri-pie-chart-2-fill"></i>
                  <span>Dashboard</span>
               </a>
               
               <a href="updates.php" class="sidebar__link active_link">
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
   </div>
</nav>
<!--=============== MAIN ===============-->
<main class="main container" id="main">
<table> 

<?php $sql = "SELECT * from patients";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<thead>
<tr>
        <th>#</th>
        <th>Name</th>
         <th>Lastname</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Condition</th>
         <th>Date</th>
       
    </tr>
</thead>
               <tbody>
<tr>

                     <td><?php echo htmlentities($cnt);?></td>
                     <td><?php echo htmlentities($result->firstName);?></td>
                     <td><?php echo htmlentities($result->lastName);?></td>
                     <td><?php echo htmlentities($result->age);?></td>
                     <td><?php echo htmlentities($result->gender);?></td>
                     <td><?php echo htmlentities($result->condition);?></td>
                     <td><?php echo htmlentities($result->date);?></td>
<td>
<a href="edit-class.php?classid=<?php echo htmlentities($result->id);?>"><i class="fa fa-edit" title="Edit Record"></i> </a> 
</td>
</tr>
<?php $cnt++; } } ?>
               </tbody>
</table>
</main>



<!--=============== MAIN JS ===============-->
<script src="sidebar/js/main.js"></script>
</body>
</html>
</head>
<body>
    
</body>
</html>
