<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches</title>
    <link rel="stylesheet" href="matchPage.css">
</head>
<body>
<nav>
        <ul class="navbar">
            <li><a href="../matchPage/matchPage.php">Matches</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="../rankPage/rank.php">Rankings</a></li>
            <li><a href="../teams/teams.php">Teams</a></li>
            <li><a href="../teamRegister/teamRegistration.php">Register Team</a></li>
            <li class="dropdown">
                <a href="#login">Login</a>
                <ul class="dropdown-content">
                    <li><a href="../teamLogin/teamLogin.php">Team Login</a></li>
                    <li><a href="../admin/adminLogin.php">Admin Login</a></li>
                    <li><a href="../organizer/organizerLogin.php">Organizer Login</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    
<?php
        include 'dbConnect.php';
        $today = date('Y-m-d');

        $upcomingMatchesSql = "SELECT * FROM matches WHERE date > ? ORDER BY date, time";
        $stmt = $conn->prepare($upcomingMatchesSql);
        $stmt->bind_param("s", $today);
        $stmt->execute();
        $upcomingResult = $stmt->get_result();

        $finishedMatchesSql = "SELECT * FROM matches WHERE date <= ? ORDER BY date DESC, time DESC";
        $stmtFinished = $conn->prepare($finishedMatchesSql);
        $stmtFinished->bind_param("s", $today);
        $stmtFinished->execute();
        $finishedResult = $stmtFinished->get_result();

        echo '<div class="match-group">';
        echo '<h2>Upcoming Matches</h2>';
        if ($upcomingResult->num_rows > 0) {
            while ($match = $upcomingResult->fetch_assoc()) {
                echo '<p><strong>' . $match['teamIdA'] . '</strong> vs <strong>' . $match['teamIdB'] . '</strong> on ' . $match['date'] . ' at ' . $match['time'] . ' in ' . $match['venue'] . '</p>';
            }
        } else {
            echo '<p>No upcoming matches.</p>';
        }
        echo '</div>';

        echo '<div class="match-group">';
        echo '<h2>Finished Matches</h2>';
        if ($finishedResult->num_rows > 0) {
            while ($match = $finishedResult->fetch_assoc()) {
                echo '<p><strong>' . $match['teamIdA'] . '</strong> vs <strong>' . $match['teamIdB'] . '</strong> on ' . $match['date'] . ' - Score: ' . $match['scoreTeamA'] . ' - ' . $match['scoreTeamB'] . ' - Winner: ' . $match['winningTeam'] . '</p>';
            }
        } else {
            echo '<p>No finished matches.</p>';
        }
        echo '</div>';

        $stmt->close();
        $stmtFinished->close();
        ?>

</body>
</html>