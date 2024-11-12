<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash password

    try {
        $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$name, $email, $password]);
        echo "Registration successful!";
    } catch (PDOException $e) {
        if ($e->getCode() === '23000') {
            echo "Email is already registered!";
        } else {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
