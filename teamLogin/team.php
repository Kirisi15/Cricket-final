<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
</head>
<body>
    <?php
    include 'dbConnect.php';
        if (isset($_GET['teamName'])) {
            $teamName = $_GET['teamName'];
            echo $teamName;
            $sql="SELECT * FROM player WHERE teamName='$teamName' ";
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<br>";
                    echo $row['playerName'];
                }
            }
        echo "<br>";
        echo "<a href='playerRegistration.php?teamName=.$teamName.'> Add players </a>";
        }
    ?>
</body>
</html>