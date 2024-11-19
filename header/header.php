<?php  echo "

    <nav>
        <button class='nav-toggle' onclick='toggleNav()'>☰</button>
        <ul class='navbar'>
            <li><a href='index.php'>Home</a></li>
            <li><a href='#matches'>Matches</a></li>
            <li><a href='#news'>News</a></li>
            <li><a href='rankings.php'>Rankings</a></li>
            <li class='dropdown'>
                <a href='#login'>Login</a>
                <ul class='dropdown-content'>
                    <li><a href='team-login.php'>Team Login</a></li>
                    <li><a href='admin-login.php'>Admin Login</a></li>
                    <li><a href='organizer-login.php'>Organizer Login</a></li>
                </ul>
            </li>
        </ul>
    </nav>

 "; 
 ?>