<?php
    include 'dbConnect.php';
    include 'teamInsert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="teamRegistration.css">

</head>
<body>
    <div class="register">
    <h1>Team Registration</h1>
        <form method = "POST" action = "teamInsert.php">

            <label for = "teamUsername" >  </label>
            <input type = "text" name ="teamUsername" placeholder = "Create username" required><br><br>

            <label for = "teamPassword" ></label>
            <input type = "password" name ="teamPassword" placeholder = "Create password" required><br><br>

            <label for = "paymentStatus" >Payment</label>
            <input type="radio" name="paymentStatus" value="1"> Yes
            <input type="radio" name="paymentStatus" value="0"> No<br><br><br>

            <label for = "managerName" ></label>
            <input type = "text" name ="managerName" placeholder = "Enter manager name" required><br><br>

            <label for = "teamLogo" ></label>
            <input type = "file" name ="teamLogo" required><br>

            <label for = "teamName" ></label>
            <input type = "text" name ="teamName" placeholder = "Enter team name" required><br><br>

            <input type="submit" name="submit" value="Register"> <br><br>
            
        </form>
    </div>
</body>
</html>