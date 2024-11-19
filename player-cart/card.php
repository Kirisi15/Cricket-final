<?php
include "dbConnect.php";


if (isset($_GET['playerId'])) {
    $playerId = $_GET['playerId'];
} else {
    echo "playerId is not set";
}

$sql = "SELECT * FROM player WHERE playerId=$playerId";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$teamName = $row['teamName'];

$sql_team = "SELECT * FROM team WHERE teamName='$teamName'";

$result_team = mysqli_query($conn, $sql_team);
$row_team = mysqli_fetch_assoc($result_team);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player's Card</title>
    <link rel="stylesheet" href="card-styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        nav {
            z-index: 100;
            display: block;
            top: 0;
            position: fixed;
            padding: 10px;
            background-color: #2a3a83;
            width: 100%;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .navbar {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .navbar li {
            position: relative;
        }

        .navbar li:hover {
            background-color: #1d67a3;
            border-radius: 10px;

        }

        .navbar a {
            color: #ffffff;
            text-decoration: none;
            padding: 14px 20px;
            display: block;
            font-family: 'Trebuchet MS', sans-serif;
        }

        .navbar a:hover {
            color: #ffffff;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            list-style-type: none;
            display: none;
            position: absolute;
            background-color: #2a3a83;
            min-width: 160px;
            top: 100%;
            z-index: 1;
            padding: 0;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .dropdown-content li:hover {
            background-color: #1d67a3;
        }

        .dropdown-content a {
            color: #ffffff;
            padding: 12px 16px;
            text-align: center;
            display: block;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Mobile Navigation */
        .nav-toggle {
            display: none;
        }




        @media (max-width: 768px) {
            .nav {
                padding: 0;
            }

            .nav-toggle {
                width: 96%;
                margin: 0;
                display: block;
                background-color: #2a3a83;
                color: #ffffff;
                border: none;
                padding: 0px;
                font-size: 30px;
                cursor: pointer;
                text-align: left;
            }

            .nav-toggle:hover {
                background-color: #2a3a83;
            }

            .navbar {
                flex-direction: column;
                align-items: flex-start;
                display: none;
                background-color: #2a3a83;
                padding: 0;
            }

            .navbar.active {
                display: flex;
            }

            .navbar li {
                width: 96%;

                border-bottom: 1px solid #1d67a3;
            }

            .navbar li:last-child {
                border-bottom: none;
            }

            .navbar a {
                width: 100%;
                text-align: left;
                margin: 0;
            }

            .dropdown-content {
                left: 0;
                transform: none;
                width: 100%;
            }

            .dropdown-content a {
                padding: 10px 20px;
            }

            .dropdown-content li:hover {
                background-color: #1d67a3;
                width: 100%;
            }

        }

        body {
            background-color: #edf5fe;
            color: #333;
        }




        a {
            color: #1d67a3;
        }

        a:hover {
            color: #134b7f;
        }

       


        body {
           
            background-image: url('<?php echo $row['cardBackgroundImage']; ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            
        }

  
.player-content {
    display: flex;
    flex-direction:column;
    align-items: center;
    justify-content: center;
    margin: 20px auto;
    padding: 20px;
    border-radius: 20px;
    
    color: white;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    max-width: 800px;
    text-align: center;
    font-family: Arial, sans-serif;
    margin-top: 100px;
}


.team-logo {
    border-radius: 50%;
    border: 4px solid #ffffff;
    background-color: #fff;
    padding: 5px;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
}

.team-logo:hover {
    transform: scale(1.1);
}


.player-image-and-description {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: space-around;
    gap: 20px;
    width: 100%;
}


.player-image img {
    border-radius: 15px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease;
    object-fit: cover;
}

.player-image img:hover {
    transform: scale(1.05);
}


.player-description {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 15px;
    padding: 20px;
    background: white;
    border-radius: 15px;
    color: #2a3a83;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    max-width: 400px;
}


.player-name-and-role {
    font-size: 26px;
    color: #2a3a83;
    margin: 0;
    font-weight: bold;
}

.player-name-and-role span {
    font-size: 18px;
    color: #555;
    display: block;
    margin-top: 5px;
}


.player-description h2 {
    font-size: 18px;
    color: #2a3a83;
    margin: 0;
    font-weight: 500;
}


.player-description h3 {
    font-size: 16px;
    color: #2a3a83;
    margin: 0;
    font-style: italic;
}


@media (max-width: 768px) {
    .player-image-and-description {
        flex-direction: column;
        align-items: center;
    }

    .player-description {
        max-width: 100%;
    }
}


.stat {
    margin: 20px auto;
    padding: 15px;
    border: 2px solid #2a3a83;
    border-radius: 10px;
    background-color: #f8f9fa;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
}


.stat-table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
}


.stat-table th {
    background-color: #2a3a83;
    color: white;
    font-size: 18px;
    padding: 10px;
    text-transform: uppercase;
}


.table-topic {
    background-color: #364f9f;
    color: white;
    font-size: 16px;
    padding: 8px;
    text-transform: capitalize;
}

.stat-table td, .stat-table th {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}


.stat-table tr:nth-child(even) {
    background-color: #f2f2f2;
}


.batting-table td:hover {
    background-color: #dbe3f5;
}

.bowling-table td:hover {
    background-color: #dbe3f5;
}


.cell {
    font-size: 14px;
    color: #2a3a83;
}


.batting-table, .bowling-table {
    width: 100%;
    border: none;
    margin: 10px auto;
    border-collapse: collapse;
}


.batting-table td, .batting-table th,
.bowling-table td, .bowling-table th {
    border: 1px solid #ddd;
}


.batting-table, .bowling-table {
    border-radius: 8px;
    overflow: hidden;
}

footer {
    background-color: #2a3a83; 
    color: #ffffff;
    padding: 20px;
    text-align: center;
    position: relative;
    margin-top: -30px; 
    display: flex;
    justify-content: center;
}

footer .footer-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-self: center;
}

footer .footer-content p {
    margin: 5px 0;
}

footer .social-icons {
    margin-top: 10px;
}

footer .social-icons a {
    color: #ffffff;
    margin: 0 10px;
    text-decoration: none;
    font-size: 24px;
    transition: color 0.3s ease;
}

footer .social-icons a:hover {
    color: #1d67a3;
}


 
    </style>
</head>

<body>

    <?php
  include "../header/header.php";

    echo "
<div class='main-part'>



<div class='player-content'>

 <img class='team-logo' src='/" . $row_team['teamLogo'] . "' width='150' height='150' alt='Team Logo'>

<div class='player-image-and-description'
<div class='player-image'>
<img src='" . $row['cardPlayersImages'] . "' width='400' height='200'>


<div class='player-description'>
<h1 class='player-name-and-role'>" . $row['playerName'] . "-" . $row['role'] . "</h1>
<h2>(" . $row['country'] . ")</h2>
<h3>Matches-" . $row['matches'] . "</h3>
</div>

</div>
</div>
";

    echo "
<div class='stat'>
<table class='stat-table'>
    <tr>
        <th colspan='2' style='text-align: center;'>
             Player's Recordings
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


include "../footer/footer.php";

    ?>


</body>

</html>