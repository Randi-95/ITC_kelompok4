<?php
$username = "root";
$password = "";
$host = "localhost";

return new PDO("mysql:host=$host; dbname=forum", $username, $password);

?>
