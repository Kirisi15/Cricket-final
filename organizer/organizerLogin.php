<?php
    @session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
</head>
<body>
    <form method="post">
        <div class="">
            <h2>Organizer Login</h2>
            <table>
                <tr>
                    <td><lable for="organizerUsername">Username :</lable></td>
                    <td><input type="text"name="organizerUsername"></td>
                </tr>
                <tr>
                    <td><lable for="organizerPassword">Password :</lable></td>
                    <td><input type="password"name="organizerPassword"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="login">Login</button></td>
                </tr>
            </table>
        </div>
    </form>



    <?php
        include 'dbConnect.php';
        if (isset($_POST['login'])) {
            $username=$_POST['organizerUsername'];
            $password=$_POST['organizerPassword'];

            $sql="SELECT * FROM organizer WHERE organizerUsername='$username' && organizerPassword='$password'";
            $result=mysqli_query($conn,$sql);

            if(mysqli_num_rows($result)>0)
            {
                $row = mysqli_fetch_assoc($result);
                
                $_SESSION['teamId'] = $row['teamId'];
                $_SESSION['teamUsername'] = $row['teamUsername'];
                header('location:organizer.php')   ;         
            }
            else{
                echo "Error";
            }
        }
        
    ?>
</body>
</html>