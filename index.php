<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rxcel</title>
    <link rel="stylesheet" href="sidebar/css/styles.css">


</head>
<body>
<a href="signup.php">
    <img src="img/logo.png" alt="Rxcel Logo" style="width:200px;height:auto;margin: 10px;">
</a>
<div class="background">
        <div class="booking-form">
            <h2>Symptoms</h2>
            <form action="symptoms.php" id="symptoms" method="POST">
                <label for="firstName">Name:</label>
                <input type="text" name="firstName" id="firstName" placeholder="Enter your Firstname" required>
 
                <label for="lastName">Surname:</label>
                <input type="text" name="lastName" id="lastName" placeholder="Enter your Fastname" required>

                <label for="email">Age:</label>
                <input type="text" name="age" id="age" placeholder="Enter your Age" required>
               <div class="gender">
                     <label for="gender">Gender:</label>
                     <input type="radio" name="gender" id="male" value="male" required>
                     <label for="male">Male</label>
                     <input type="radio" name="gender" id="female" value="female" required>
                     <label for="female">Female</label>
               </div>
                <label for="departure-date">Condition:</label>
                <input type="text" name="condition" id="condition" placeholder="Enter your Condition" required>
               
                <label for="return-date">Date Today:</label>
                <input type="date" name="date" id="date" required>

                <button name="symptoms" type="submit">Submit</button>
            </form>
        
      
      
        </div>
</body>
</html>