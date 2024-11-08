<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matchEdit</title>
    <link rel="stylesheet"href="addMatch.css">
</head>
<body>
    <form method='post'>
        <label>Team 1:</label>
        <select name="team1">
            <?php
                include 'dbConnect.php';
                $sql="SELECT * FROM team where paymentStatus=1";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<option>".$row['teamName']."</option>";
                }
            
            echo "</select><label>Team 2:</label>
                <select name='team2'>";
                include 'dbConnect.php';
                $sql="SELECT * FROM team where paymentStatus=1";
                $result=mysqli_query($conn,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<option>".$row['teamName']."</option>";
                }
                echo "</select>
                <label for='venue'>Venue</label>
                <input type='text' name='venue'>
                <label for='date'>Date</label>
                <input type='date' name='date'>
                <button type='submit' name='add'>Add</button></form>";

                if($_SERVER['REQUEST_METHOD'] === 'POST'&&isset($_POST['add'])){
                $team1=$_POST['team1'];
                $team2=$_POST['team2'];
                $venue=$_POST['venue'];
                $date=$_POST['date'];

                
                    $sql="INSERT INTO matches(organizerId,teamIdA,teamIdB,venue,date)
                    VALUE('10','$team1','$team2','$venue','$date')";

                    mysqli_query($conn,$sql);
                    
                }

            ?>
    
    
</body>
</html>