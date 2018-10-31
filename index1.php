<?php 

$servername = "localhost";
$username = "root";
$password = "admin";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE IF NOT EXISTS musicDB";
    $conn->exec($sql);
    $sql = "use musicDB";
    $conn->exec($sql);
    $sql = "CREATE TABLE IF NOT EXISTS ARTISTS (
                ID int(11) AUTO_INCREMENT PRIMARY KEY,
                artistname varchar(30) NOT NULL)";
    $conn->exec($sql);
    echo "DB created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}


if(isset($_POST['submit'])){
    echo "true";

}
?>