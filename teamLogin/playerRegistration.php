<?php
    include 'dbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Registration</title>
    <link rel="stylesheet" href="playerRegistration.css"> 
</head>
<body>
    <div class="register">
        <h1>Player Registration</h1>
        <form enctype="multipart/form-data" method="POST" action="playerInsert.php">

            <label for="playerName"></label>
            <input type="text" name="playerName" placeholder="Enter player name" required>

            <label for="contactNumber"></label>
            <input type="tel" name="contactNumber" placeholder="Enter contact number" required>

            <label for="playerImage"></label>
            <input type="file" name="playerImage" required>

            <?php if (isset($_GET['teamName'])) {
                $teamName = $_GET['teamName'];
                echo "
                    <label for='teamName'>Team Name:</label>
                    <input type='text' name='teamName' value='$teamName' placeholder='Enter team name' required>
                ";
            } ?>

            <label for="role">Role:</label>
            <select name="role" required>
                <option value="batter">Batter</option>
                <option value="bowler">Bowler</option>
                <option value="wicketkeeper">Wicket Keeper</option>
                <option value="all-rounder">All-Rounder</option>
            </select>

            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</body>
</html>
