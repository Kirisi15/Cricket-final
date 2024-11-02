<?php
    @session_start();
    
    include 'dbConnect.php';

    if(isset($_POST['submit'])){
        //$gmail = $_POST['gmail'];
        $username = $_POST['teamUsername'];
        $password = $_POST['teamPassword'];

        $sql = "SELECT * FROM team WHERE teamUsername = '$username' && teamPassword = '$password'";

        $result=mysqli_query($conn,$sql);

     
       if(mysqli_num_rows($result)>0){  
        
        $row = mysqli_fetch_assoc($result);
        $teamName=$row['teamName'];
                
        $_SESSION['teamId'] = $row['teamId'];
        $_SESSION['teamUsername'] = $row['teamUsername'];

        header("Location: team.php?teamName=" . urlencode($teamName));


        }
        else{
            echo "Username/Password is incorrect";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reglogstyle.css">
    <h1>Team Login</h1>
</head>

<body>

    <form method = "POST" action = "">
        <label for = "teamUsername" > Username : </label>
        <input type = "text" name ="teamUsername" placeholder="Enter user name" required><br><br>

        <label for = "teamPassword" > Password : </label>
        <input type = "password" name ="teamPassword" placeholder = "Enter password" required><br><br>

        <input type = "submit" name = "submit" value = "Login">
    </form>
</body>
</html>