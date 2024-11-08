
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>

body {
      display: flex;
      justify-content: center; /* Horizontally center the content */
      align-items: center; /* Vertically center the content */
      height: 100vh; /* Full viewport height */
      color: ;
    }

  ul{

list-style: none;
display: flex;
flex-wrap: wrap;
gap: 10px;
justify-content: center; /* Centers the items within the ul */
    

}

*{
margin:0;
}

.logo{
  border: solid 2px;
}

</style>

<body>

  <header>





  </header>
  
<?php

include "dbConnect.php";

$sql = "SELECT * FROM team";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

  echo"<ul class='logo-list'";

  while ($row = mysqli_fetch_assoc($result)) {
echo"<li>";   
echo "<div class='logo'>";
echo "<a href='/Cricket-final/players/".$row['teamUsername'].".php'>";
echo "<img src='/".$row['teamLogo']."' width=200 height=200>
      </a>";
echo "</div>";
echo"</li>";

    
}
echo "</ul>";

}


?>


</body>
</html>