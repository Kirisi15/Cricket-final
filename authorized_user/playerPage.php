<?php
    include 'playerRegistration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <h3> Player Details </h3>
        <table border = "1"  >
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Contact number</th>
                <th>Team Name</th>
                <th>player role</th>
            </tr>
            <?php
        
                    $sql = "SELECT * FROM player";
                    $result = $conn->query($sql);
                    
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        echo"<tr>
                                <td><img src='upload_images/".$row['playerImage']."' alt='Player Image'></td>
                                <td>".$row['playerName']."</td>
                                <td>".$row['contactNumber']."</td>
                                <td>".$row['teamName']."</td>
                                <td>".$row['role']."</td>
                            </tr>";
                        }
                    }

            ?>
                
            
        </table>
    </form>
</body>
</html>