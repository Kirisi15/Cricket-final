<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matchEdit</title>
</head>
<body>
    <?php
    
        include 'dbConnect.php';
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            echo $id;
            
        }
    

        $sql="SELECT * FROM matches WHERE matchId='$id'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        $teamIdA=$row['teamIdA'];
        $teamIdB=$row['teamIdB'];
       
            echo "
            <form method='post'>
                <label for='teamScoreA'>$teamIdA</lable>
                <input type='text' name='scoreA'><br>
                <label for='teamScoreB'>$teamIdB</lable>
                <input type='text' name='scoreB'><br>
                <label for='winningTeam'>Winning team</lable>
                <select name='winningTeam'>
                    <option>$teamIdA</option>
                    <option>$teamIdB</option>
                    <option>Draw</option>
                </select><br><br>
                <button type='submit' name='update'>UPDATE</button>
            </form>";
    
    
            if(isset($_POST['update'])){
                echo "Hi";
                $scoreA=$_POST['scoreA'];
                $scoreB=$_POST['scoreB'];
                $winningTeam=$_POST['winningTeam'];
                $sql1="UPDATE matches SET scoreTeamA='$scoreA',scoreTeamB='$scoreB',winningTeam='$winningTeam' WHERE matchId='$id'";
                mysqli_query($conn,$sql1);
            }
            
        
    ?>
</body>
</html>