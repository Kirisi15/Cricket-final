<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='../style.css'>
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

$teamPoints=array();
$sortedTeamPoints=array();
$sql="SELECT * FROM team WHERE paymentStatus=1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
   
    while($row=mysqli_fetch_assoc($result))
    {
        $count=0;
        $teamName=$row['teamName'];
        $sql1="SELECT * FROM matches WHERE winningTeam='$teamName'";
        $result1=mysqli_query($conn,$sql1);
        while($row1=mysqli_fetch_assoc($result1))
        {
            $count+=1;
        }
        array_push($teamPoints,"$count=>$teamName");

        
       // echo $teamUsername."-".$count."<br>";
    }
    asort($teamPoints);
    
    rsort($teamPoints);
    
    echo implode("<br>", $teamPoints);
    echo $teamPoints[0];
    
   
}
?>
</body>
</html>