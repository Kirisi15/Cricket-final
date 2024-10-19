<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matchEdit</title>
</head>
<body>
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
            <form method='post'><button type='submit' name='add'>Add</button></form>";

            if(isset($_POST['add'])){
                
                
            }

        ?>
    
    
</body>
</html>