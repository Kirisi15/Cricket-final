<?php
    include 'dbConnect.php';
    
    if(isset($_POST['submit'])){
        $playername = $_POST['playerName'];
        $contactnumber = $_POST['contactNumber'];
        $playerimagename = $_FILES['playerImage']['name'];
        $playerimagetmpname = $_FILES['playerImage']['tmp_name'];
        $teamname = $_POST['teamName'];
        $role = $_POST['role'];

        $extension=end(explode(".",$playerimagename));
        $newimagetmpname=uniqid("",true).".".$extension;
        $imagetmp="./upload_images/".$newimagetmpname;
        move_uploaded_file($playerimagetmpname,$imagetmp);
        
        $sql = "INSERT INTO player (playerName, contactNumber, playerImage, teamName, role) VALUES ('$playername', '$contactnumber', '$newimagetmpname', '$teamname', '$role')";

        if($conn->query($sql)=== true){
            echo "inserted successfully";
            header("Location: teamLogin.php");
        }
        else{
            echo " error";
        }
    }
?>