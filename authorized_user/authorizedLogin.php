<?php
    include 'dbConnect.php';

    if(isset($_POST['submit'])){
        $gmail = $_POST['gmail'];
        $username = $_POST['authorizedUsername'];
        $password = $_POST['authorizedPassword'];

        $sql = "SELECT gmail, authorizedUsername, authorizedPassword FROM authorized_users WHERE gmail = $gmail &&  authorizedUsername = $username && authorizedPassword = $password";

        $result = $conn->query($sql);

        if($result->num_rows() >0){
            header("Location : teamRegistration.php");
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
    <h1>Login Player</h1>
</head>

<body>

    <form method = "POST" action = "">

        <label for = "gmail" > Gmail: </label>
        <input type = "email" name ="gmail" placeholder = "Enter your email" required><br><br>

        <label for = "authorizedUsername" > Username : </label>
        <input type = "text" name ="authorizedUsername" placeholder="Enter user name" required><br><br>

        <label for = "authorizedPassword" > Password : </label>
        <input type = "password" name ="authorizedPassword" placeholder = "Enter password" required><br><br>

        <input type = "submit" name = "submit" value = "Login">

        <a href="authorizedRegistration.php">didn't registered yet</a>

    </form>
</body>
</html>