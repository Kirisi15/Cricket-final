<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
include 'dbConnect.php';


$sql="SELECT * FROM team WHERE paymentStatus=1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
{
   
    while($row=mysqli_fetch_assoc($result))
    {
        $count=0;
        $teamUsername=$row['teamUsername'];
        $sql1="SELECT * FROM matches WHERE winningTeam='$teamUsername'";
        $result1=mysqli_query($conn,$sql1);
        while($row1=mysqli_fetch_assoc($result1))
        {
            $count+=1;
        }
        echo $teamUsername."-".$count."<br>";
    }
   
}
?>
</body>
</html>