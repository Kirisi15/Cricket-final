<?php
    @session_start();

    $adminId = $_SESSION['adminId'];

    if(!isset($adminId)){
        header("location: adminLogin.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet"href="admin.css">
</head>
<body>
    <form method='post'><button name='addOrganizer'>Add Organizer</button></form>
    <?PHP
    if (isset($_POST['addOrganizer'])) {
        
            header('location:addOrganizer.php')   ;         
        
    }
        include 'dbConnect.php';     
        $sql="SELECT * FROM matches";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            echo "<table>
                    <th>matchId</th>
                    <th>organizerId</th>
                    <th>teamIdA</th>
                    <th>teamIdB</th>
                    <th>date</th>
                    <th>time</th>
                    <th>venue</th>
                    <th>scoreTeamA</th>
                    <th>scoreTeamB</th>
                    <th>winningTeam</th>";
                while($row=mysqli_fetch_assoc($result))
                {
                    $matchId=$row['matchId'];
                    echo "<tr>";
                    echo "<td>".$row['matchId']."</td>
                        <td>".$row['organizerId']."</td>
                        <td>".$row['teamIdA']."</td>
                        <td>".$row['teamIdB']."</td>
                        <td>".$row['date']."</td>
                        <td>".$row['time']."</td>
                        <td>".$row['venue']."</td>
                        <td>".$row['scoreTeamA']."</td>
                        <td>".$row['scoreTeamB']."</td>
                        <td>".$row['winningTeam']."</td>
                        <td><a href='matchEdit.php?id=".$matchId."'><button type='submit' name='edit'>EDIT</a></form>";

                    echo "</tr>";
                }
            echo "</table>";
        }
        echo "<form method='post'><button type='submit' name='logOut'>Log Out</button></form>";
        if (isset($_POST['logOut'])) {
        
            header('location:../index.php')   ;         
        }
       
?>

</body>
</html>