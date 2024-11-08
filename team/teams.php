
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<<<<<<< HEAD
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
=======
<link rel="stylesheet" href="teams-style.css">
>>>>>>> 27f21e5b0118289312a058b014885e353b2acd64

<body>

  <header>

<<<<<<< HEAD


=======
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
>>>>>>> 27f21e5b0118289312a058b014885e353b2acd64


  </header>
  
<?php

include "dbConnect.php";

$sql = "SELECT * FROM team";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

<<<<<<< HEAD
  echo"<ul class='logo-list'";
=======
  echo"<ul class='logo-list'>";
>>>>>>> 27f21e5b0118289312a058b014885e353b2acd64

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

<<<<<<< HEAD
=======
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

<script>

const images = [
        'http://localhost/Cricket-final/background-images/b-image01.png',
        'http://localhost/Cricket-final/background-images/b-image02.png',
        'http://localhost/Cricket-final/background-images/b-image03.png',
        'http://localhost/Cricket-final/background-images/b-image04.png',
    ];

  let currentIndex = 0;

  function changeBackground(){

    currentIndex = (currentIndex + 1) % images.length;
    document.body.style.backgroundImage = `url('${images[currentIndex]}')`;

  }

  document.body.style.backgroundImage = `url('${images[currentIndex]}')`;

  setInterval(changeBackground,5000);


 </script> 
>>>>>>> 27f21e5b0118289312a058b014885e353b2acd64

</body>
</html>