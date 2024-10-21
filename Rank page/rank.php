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
        
    }
}
?>
</body>
</html>