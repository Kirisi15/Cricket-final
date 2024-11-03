<?php
    @session_start();

    $teamId = $_SESSION['teamId'];

    if(!isset($teamId)){
        header("location:teamLogin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
    <link rel="stylesheet" href="team.css"> <!-- Link to the CSS file -->
</head>
<body>
    <h1>Your Team</h1> <!-- Add a heading for clarity -->
    <?php
    include 'dbConnect.php';
        if (isset($_GET['teamName'])) {
            $teamName = $_GET['teamName'];
            echo "<h2>$teamName</h2>"; // Display team name as a heading
            $sql = "SELECT * FROM player WHERE teamName='$teamName'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo '<div class="player-container">'; // Start player container
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="player">';
                    echo "<img src='../teamLogin/upload_images/$row[playerImage].jpg' alt='{$row['playerName']}'>";
                    echo "<p>{$row['playerName']}</p>";
                    echo '</div>'; // Close player card
                }
                echo '</div>'; // End player container
            } else {
                echo '<p>No players found for this team.</p>'; // Message for no players
            }
            echo "<a href='playerRegistration.php?teamName=$teamName'>Add players</a>"; // Link to add players
        }
    ?>
</body>
</html>
