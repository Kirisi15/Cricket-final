
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>



.player-container {
    
    background-color:rgb(225, 225, 225); 
    color: rgb(80, 80, 80);
      border: 1px solid ;
      border-color: rgb(225, 225, 225);
    

    }



ul{

list-style: none;
display: flex;
flex-wrap: wrap;
gap: 10px;

}

*{
margin:0;
}

.description{
  text-align: center;
 
}

</style>


</head>
<body>
  
<?php

include "dbConnect.php";

$sql = "SELECT * FROM player WHERE teamName = 'Colombo Strikers'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

echo "<ul class= players>";
  while ($row = mysqli_fetch_assoc($result)) {
  
echo"<li class='player'>";    
echo"<div class=player-container>";
echo "<image src='/".$row['playerImage']."' width =200 height =200><br>";
echo"<div class ='description'>";
echo"<h4>".$row['playerName']."</h4>
     <h5>".$row['role']."</h5>";


echo "</div>";
echo "</div>";

echo"</li>";

}

echo "</ul";

}


?>

</body>
</html>