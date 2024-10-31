<?php
    include 'dbConnect.php';

    if(isset($_POST['submit'])){
        //$gmail = $_POST['gmail'];
        $username = $_POST['authorizedUsername'];
        $password = $_POST['authorizedPassword'];

        $sql = "SELECT authorizedUsername, authorizedPassword FROM authorizeduser WHERE authorizedUsername = '$username' && authorizedPassword = '$password'";

        $result=mysqli_query($conn,$sql);
        if($result){
       if(mysqli_num_rows($result)>0){
            header("location:teamRegistration.php");
        }}
        else{
            echo "Not successfully";
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
    <h1>Authorizer Login</h1>
</head>

<body>

    <form method = "POST" action = "">

        

        <label for = "authorizedUsername" > Username : </label>
        <input type = "text" name ="authorizedUsername" placeholder="Enter user name" required><br><br>

        <label for = "authorizedPassword" > Password : </label>
        <input type = "password" name ="authorizedPassword" placeholder = "Enter password" required><br><br>

        <input type = "submit" name = "submit" value = "Login">

        <a href="authorizedRegistration.php">didn't registered yet</a>

    </form>
</body>
</html>