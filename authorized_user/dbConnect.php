<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cricket";

$conn=new mysqli($servername,$username,$password,$dbname);


if($conn->connect_error)
{
    die("connection fail".$conn->connect_error);
}
else{
    echo "connected successfully";
}
?>