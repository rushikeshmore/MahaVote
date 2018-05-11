<?php
$servername="localhost";
$username="root";
$password="";
$db="vooting":
$con=mysqli_connect("$servername","$username","$password","vooting");
if(!$con)
{
    die("connection failed:".mysqli_connect_error());
}
?>