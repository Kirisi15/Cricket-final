<?php
    include 'dbConnect.php';
    
    if(isset($_POST['submit'])){
        $username = $_POST['teamUsername'];
      
        $paymentstatus = $_POST['paymentStatus'];
        $managername = $_POST['managerName'];
        $teamlogo = $_POST['teamLogo'];
        $teamname = $_POST['teamName'];
        
        $sql = "INSERT INTO team (teamUsername, paymentStatus, managerName, teamLogo, teamName) VALUES ('$username', '$paymentstatus', '$managername', '$teamlogo', '$teamname')";

        if($conn->query($sql)=== true){
            echo " inserted successfully";
        }
        else{
            echo " error";
        }
    }
?>