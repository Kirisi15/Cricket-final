<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
</head>
<body>
    <form method="post" action="addOrganizer.php">
        <div class="">
            <h2>Admin Login</h2>
            <table>
                <tr>
                    <td><lable for="organizerUsername">Organizer Username :</lable></td>
                    <td><input type="text"name="organizerUsername"></td>
                </tr>
                <tr>
                    <td><lable for="organizerPassword">Organizer Password :</lable></td>
                    <td><input type="password"name="organizerPassword"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="register">Register</button></td>
                </tr>
            </table>
        </div>
    </form>



    <?php
        include 'dbConnect.php';
        if (isset($_POST['register'])) {
            $organizerusername=$_POST['organizerUsername'];
            $organizerpassword=$_POST['organizerPassword'];

            $sql="INSERT INTO organizer(organizerUsername,organizerPassword)
                    VALUES ('$organizerusername','$organizerpassword')";
            $result=mysqli_query($conn,$sql);

            if($result)
            {
                echo "Organizer added sucessfully";         
            }
            else{
                echo "Error";
            }
        }
        
    ?>
</body>
</html>