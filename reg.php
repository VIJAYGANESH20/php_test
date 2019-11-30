<?php

header("Cache-Control: no-store, no-cache, must-revalidate");

$servername = "localhost";
$username = "root";
$password = "";
$db = '';

// Create connection
$link = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

  if(isset($_POST['sub']))
{
    $sql = "INSERT INTO employee (eid, ename, email, enumber)
    VALUES ('".$_POST["eid"]."','".$_POST["ename"]."','".$_POST["email"]."','".$_POST["epno"]."')";

    $result = mysqli_query($link,$sql);

    include 'thanks.html';
}

}

?>
