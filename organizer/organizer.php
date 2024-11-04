<?php
    @session_start();

    $organizerId = $_SESSION['organizerId'];

    if(!isset($teamId)){
        header("location:organizerLogin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <div class="navbar">
            <img src = "./images/logo1.png" alt = "Logo" class = "logo">

            <nav>
                <ul>
                    <li><a href="../cricket final/index.php">Home</a></li>
                    <li><a href="../Cricket final/matchPage/matchPage.php">Matches</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="../cricket final/rankPage/rank.php">Rankings</a></li>
                    <li><a href="../cricket final/teams/teams.php">Teams</a></li>
                    <li><a href="../cricket final/teamRegister/teamRegistration.php">Register Team</a></li>
                    <li class="dropdown">
                    <a href="#login">Login</a>
                        <ul class="dropdown-content">
                            <li><a href="../cricket final/teamLogin/teamLogin.php">Team Login</a></li>
                            <li><a href="../cricket final/admin/adminLogin.php">Admin Login</a></li>
                            <li><a href="../cricket final/organizer/organizerLogin.php">Organizer Login</a></li>
                        </ul>
                    </li>
                <ul>
            <nav>
            
        </div>
    </header>
    <form method='post'>
        <button type="submit"name="addMatch">Add Match</button>
    </form>
    <?PHP
        include 'dbConnect.php';
        if(isset($_POST['addMatch']))
        {
            header('location:addMatch.php');
            exit();
        }
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
                        </form>";

                    echo "</tr>";
                }
            echo "</table>";
        }
?>
</body>
</html>