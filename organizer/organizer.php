<<<<<<< HEAD
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
        echo "<form method='post'><button type='submit' name='logOut'>Log Out</button></form>";
        if (isset($_POST['logOut'])) {
        
            header('location:../index.php')   ;         
        }
?>
</body>
=======
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
>>>>>>> facc688ba34be12b18cd15f592637efd7526515a
</html>