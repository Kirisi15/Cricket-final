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
        <lable for="teamScoreB">Winning team</lable>
        <select>
            <option>Team A</option>
            <option>Team B</option>
        </select><br>
        <button type="submit" name="update">UPDATE</button>
    </form>
    <?php
    include 'dbconnect';
        $scoreA=$_POST['scoreA'];
        $scoreB=$_POST['scoreB'];
        if(isset($_POST['update'])){
            //$sql="UPDATE matches SET scoreTeamA=scoreA,scoreTeamB=scoreB WHERE;"
        }
    ?>
</body>
</html>