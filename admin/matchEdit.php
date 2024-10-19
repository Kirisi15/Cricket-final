<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matchEdit</title>
</head>
<body>
    <form method="post">
        <lable for="teamScoreA">Team A</lable>
        <input type="text" name="scoreA"><br>
        <lable for="teamScoreB">Team B</lable>
        <input type="text" name="scoreB"><br>
        <lable for="winningTeam">Winning team</lable>
        <select name="winningTeam">
            <option>Team A</option>
            <option>Team B</option>
        </select><br>
        <button type="submit" name="update">UPDATE</button>
    </form>
    <?php
    include 'dbConnect.php';
    
        $scoreA=$_POST['scoreA'];
        $scoreB=$_POST['scoreB'];
        $winningTeam=$_POST['winningTeam'];
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            echo $id;
            $sql="UPDATE matches SET scoreTeamA='$scoreA',scoreTeamB='$scoreB',winningTeam='$winningTeam'WHERE matchId='$id'";
            mysqli_query($conn,$sql);
            
        }
    ?>
</body>
</html>