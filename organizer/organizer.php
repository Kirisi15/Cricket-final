<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post'>
        <button type="submit"name="addMatch">Add Match</button>
    </form>
    <?PHP
        include 'dbConnect.php';
        if(isset($_POST['addMatch']))
        {
            header('location:addMatch.php');
            exit();
        }
        
        
        

        
            

    ?>
</body>
</html>