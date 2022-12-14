<?php
$host = "";
$db = "";
$port = "";
$user = "";
$password = "";
function connect(string $host, string $db, string $port, string $user, string $password): PDO
{
    try {
        $dsn = "pgsql:host=$host;port=$port;dbname=$db";
        return new PDO(
            $dsn,
            $user,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


$conn = connect($host, $db, $port, $user, $password);
?>