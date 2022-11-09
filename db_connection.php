<?php
//Local server information
$server = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "backstage";

//Try to make the DB connection
try {
    //Connection
    $conn = new PDO("mysql:host=$server;dbname=$db_name", $username, $password);

    //Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>