<?php
$host = 'localhost'; // Database host
$db = 'digital_literacy'; // Database name
$user = 'root'; // Database user
$pass = ''; // Database password (fill in if applicable)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
