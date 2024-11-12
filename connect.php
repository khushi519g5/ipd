<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');

    if($conn->connect_error){
        die("Connection Failed: " . $conn->connect_error);
    } else {
        // Updated table and column names (no hyphens)
        $stmt = $conn->prepare("INSERT INTO registration (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password);
        $execval = $stmt->execute();

        if ($execval) {
            echo "Registration successful!";
        } else {
            echo "Error in registration.";
        }

        $stmt->close();
        $conn->close();
    }
?>
