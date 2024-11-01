<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
</head>
<body>

    <?php
        include 'dbConnect.php';
        if (isset($_POST['addOrganizer'])) {
            $username=$_POST['organizerUsername'];
            $password=$_POST['organizerPassword'];

            $sql="INSERT INTO organizer (organizerUsername,organizerPassword)
                    VALUES ('$username','$password')";
            $result=mysqli_query($conn,$sql);
            header("location:admin.php");
            
        }  
              
    ?>
    <form method="post">
        <div class="">
            <h2>Add Organizer</h2>
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
                    <td><button type="submit" name="addOrganizer">Add organizer</button></td>
                </tr>
            </table>
        </div>
    </form>



    
</body>
</html>