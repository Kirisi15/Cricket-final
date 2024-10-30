<?php
    include 'dbConnect.php';
    if(isset($_POST['submit'])){
        $gmail = $_POST['gmail'];
        $username = $_POST['authorizedUsername'];
        $password = $_POST['authorizedPassword'];

        $sql = "INSERT INTO authorizeduser (gmail, authorizedUsername, authorizedPassword,teamId) VALUES ('$gmail', '$username', '$password',1)";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("location:authorizedLogin.php");
        }

    }
?>