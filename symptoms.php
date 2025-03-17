<?php
    include ("connect.php");
    if(isset($_POST['symptoms'])){
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $age = htmlspecialchars($_POST["age"]);
    $gender = htmlspecialchars($_POST["gender"]);
    $condition = htmlspecialchars($_POST["condition"]);
    $date = htmlspecialchars($_POST["date"]);

        $sql = "INSERT INTO `patients`(`firstName`, `lastName`,`age`,`gender`,`condition`,`date`)
     VALUES ('$firstName','$lastName','$age','$gender','$condition','$date')";
     if ($conn->query($sql) == TRUE) {
        header("Location: index.php");
        echo "New record created successfully";}
    
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>