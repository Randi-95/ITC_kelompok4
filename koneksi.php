<?php
$username = "root";
$password = "";
$host = "localhost";
$database = "forum";

return new PDO("mysql:host=$host; dbname=forum", $username, $password);

?>
