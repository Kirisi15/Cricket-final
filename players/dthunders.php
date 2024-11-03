<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>


<link rel="stylesheet" href="players-style.css">


</head>
<body>
<header>

<div class='logo'>
  <img src='/Cricket-final/LPL-LOGO/LPL_LOGO.jpg' height=80px width=80px>

  <div class='logos-LPL25'>
 
  <img class='logos' src='/Cricket-final/LPL-LOGO/logos.png' height=50px width=260px>
   <ul class="topic"><li>LANKA</li>  <li>PREMIER</li> <li>LEAGUE</li> <li style="color:white;">2025</li></ul>

  </div>

</div>

<div class="right-part">

<span class="followUs">follow Us</span>

<div class="social-media">

<a href='https://x.com/LPLT20/status/1602578678139195393'><img class="x" src='/Cricket-final/social-media/x.png'></a>

<a href='https://www.instagram.com/lplt20/reel/C8elNRZhvDT/'><img class="insta" src='/Cricket-final/social-media/insta.png'></a>

<a href='https://web.facebook.com/LPLT20/'><img class="fb" src='/Cricket-final/social-media/fb.png' height=37></a>
</div>

<a href='https://srilankacricket.lk/'><img class='slc-logo' src='/Cricket-final/SLC-LOGO/SLC_LOGO.png' height=50px width=50px></a>


</div>


</header>
  
<?php

include "dbConnect.php";

$sql = "SELECT * FROM team WHERE teamId = '4'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

echo"<div class='team-players'>";
echo"<div class='team'>";
echo"<img src='/".$row['teamLogo']."' width=100 height=100>";
echo"<div class='team-name'>".$row['teamName']."</div>";
echo"</div>";

$sql = "SELECT * FROM player WHERE teamName = 'Dambulla Thunders'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

echo "<ul class= players style='margin-bottom: 10px;'>";
  while ($row = mysqli_fetch_assoc($result)) {
  
echo"<a href='../player-cart/card.php?playerId=".$row['playerId']."' style='text-decoration: none'>";    
echo"<li class='player'>";    
echo"<div class=player-container>";
echo "<image src='/".$row['playerImage']."' width =200 height =200><br>";
echo"<div class ='description'>";
echo"<h4>".$row['playerName']."</h4>
     <h5>".$row['role']."</h5>";

echo "</div>";
echo "</div>";

echo"</li>";
echo "</a>";
}

echo "</ul>";

}

?>


</div>


<div class='der'>
<footer>
<div class='footer-left-side'>
                <div class='slclogo'>  
                <img src='/Cricket-final/SLC-LOGO/SLC_LOGO02.png' height=60 width=60>
                </div>
                <div class='contact-details'>
                <adress>
                ADDRESS:
                Sri Lanka Cricket
                No 35, Maitland Place,
                Colombo 07, Sri Lanka.</adress><br>

                <email>EMAIL: info@srilanka</email><br>
                <number>PHONE NUMBER: +94112681601-4</number><br>
                <fax>FAX: +94112697405</fax>
                </div>
              </div>

              <div class='src'><p>©SriLankaCricket</p></div>

            <div class='sponser'>
              <img src='/Cricket-final/SPONSERS-LOGO/itw.png' height=30 width=50></sponser>
              <img src='/Cricket-final/SPONSERS-LOGO/suquick.png' height=30px width=50px></sponser>
              <img src='/Cricket-final/SPONSERS-LOGO/sony.png' height=30 width=35>
            </div>

</footer>

</div>




        
</body>
</html>