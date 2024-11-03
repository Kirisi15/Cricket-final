<?php
include "dbConnect.php";


if(isset($_GET['playerId'])){
  $playerId = $_GET['playerId'];
}else{
  echo"playerId is not set";
}

$sql="SELECT * FROM player WHERE playerId=$playerId";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$teamName = $row['teamName'];

$sql_team="SELECT * FROM team WHERE teamName='$teamName'";

$result_team = mysqli_query($conn,$sql_team);
$row_team = mysqli_fetch_assoc($result_team);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="card-styles.css">
  <style>
       
       body {
            display: flex;                      
            flex-direction: column;     
            justify-content: space-between;    
            min-height: 100vh;      
            margin: 0;                          
            background-image: url('<?php echo $row['cardBackgroundImage']; ?>');
            background-size: cover;      
            background-repeat: no-repeat; 
            background-position: center;
            background-color: white; 
        }


        .batting-table, .bowling-table {
           width: 100%;
           margin: 5px;
           
          }

          .batting-table tr, .bowling-table {
           text-align: left; 
           font-family:Arial, Helvetica, sans-serif;
           font-size: 13px;
          }

          .table-topic{

            background-color:<?php echo $row_team['color1']?> ;
            border-radius: 10px;
            
          }

          .cell{

            background-color:<?php echo $row_team['color2']?> ;            
            border-radius: 10px;
            padding-left: 10px;            

          }

          .stat-table{

            width:fit-content;
          }

         .player-description{
          display: flex;
          flex-direction:column;
          align-items: center;
          font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
         }

         .player-content {
            display: flex;
            flex-direction: row;
            justify-content:space-around;
            align-items: center;            
            padding: 20px;
                                
        }

        

         .player-image{
          text-align: center;
         }

         .stat{
          text-align: center;
         }

         .lpl{
          color: rgb(60, 16, 66);
          font-weight: bold;
         }

         .l2025{
            color:rgb(50, 50, 50,1)
         }

         .lpl2025{
          margin-top: -100px;
          margin-bottom: 30px;
          display: flex;
          flex-direction: row;
          align-items: center;
          justify-content: center;
         }

       

    </style>
</head>
<body>
<header>

<div class='logo'>
  <img class='player-image' src='/Cricket-final/LPL-LOGO/LPL_LOGO.jpg' height=80px width=80px>

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

echo "
<div class='main-part'>

<div class='lpl2025'>

<img src='http://localhost/Cricket-final/LPL-LOGO/lpl.png' width=100 height=100>

<h1 class='lpl'>LANKA PREMIER LEAGUE</h1>

<h1 class='l2025'> 2025</h1>

</div>

<div class='player-content'>

<div class='player-image'>
<img src='" . $row['cardPlayersImages'] . "' width='400' height='200'>


<div class='player-description'>
<h1 class='player-name-and-role'>".$row['playerName']."-".$row['role']."</h1>
<h2>(".$row['country'].")</h2>
<h3>Matches-".$row['matches']."</h3>
</div>

</div>"
;

echo "
<div class='stat'>
<table class='stat-table'>
    <tr>
        <th colspan='2' style='text-align: center;'>
            <img src='/" . $row_team['teamLogo'] . "' width='300' height='200' alt='Team Logo'>
        </th>
    </tr>
    <tr>
        <td>
            <table class='batting-table'>
                <tr>
                    <th colspan='2' style='text-align: center;' class='table-topic'>Batting</th>
                </tr>
                <tr>
                    <th class='cell'>Batting Style</th>
                    <td class='cell'>" . $row['battingStyle'] . "</td>
                </tr>
                <tr>
                    <th class='cell'>Average</th>
                    <td class='cell'>" . $row['battingAverage'] . "</td>
                </tr>
                <tr>
                    <th class='cell'>Strike Rate</th>
                    <td class='cell'>" . $row['strikeRate'] . "</td>
                </tr>
                
            </table>
        </td>
        <td>
            <table class='bowling-table'>
                <tr>
                    <th colspan='2' style='text-align: center;' class='table-topic'>Bowling</th>
                </tr>
                <tr>
                    <th class='cell'>Bowling Style</th>
                    <td class='cell'>" . $row['bowlingStyle'] . "</td>
                </tr>
                <tr>
                    <th class='cell'>Wickets</th>
                    <td class='cell'>" . $row['wickets'] . "</td>
                </tr>
                <tr>
                    <th class='cell'>Economy</th>
                    <td class='cell'>" . $row['economy'] . "</td>
                </tr>
                <tr>
                    <th class='cell'>Average</th>
                    <td class='cell'>" . $row['bowlingAverage'] . "</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</div>
</div>
</div>
";
?>








<footer>

<div class='footer-left-side'>
<div class="slclogo">  
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
</body>
</html>