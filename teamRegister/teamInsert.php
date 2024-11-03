<?php
    include 'dbConnect.php';
    
    if(isset($_POST['submit'])){
        $username = $_POST['teamUsername'];
        $password=$_POST['teamPassword'];
        $paymentstatus = $_POST['paymentStatus'];
        $managername = $_POST['managerName'];
        $teamlogo = $_POST['teamLogo'];
        $teamname = $_POST['teamName'];

        $sql="SELECT * FROM team WHERE teamUsername='$username'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "Username already exist";
        }
        $sql="SELECT * FROM team WHERE teamName='$teamname'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo "Teamname already exist";
        }
        else
        {
        
            $sql = "INSERT INTO team (teamUsername,teamPassword, paymentStatus, managerName, teamLogo, teamName) VALUES ('$username','$password', '$paymentstatus', '$managername', '$teamlogo', '$teamname')";

            if($conn->query($sql)=== true){
                //echo " inserted successfully";
                header("location:../index.php");
            }
            else{
                echo " error";
            }
        }
    }
?>