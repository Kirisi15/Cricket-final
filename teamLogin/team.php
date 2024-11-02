<?php
    @session_start();

    $teamId = $_SESSION['teamId'];

    if(!isset($teamId)){
        header("location:teamLogin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team</title>
</head>
<body>
<a href='playerRegistration.php'> Add players </a>
</body>
</html>