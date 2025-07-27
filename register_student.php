<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Check if the email already exists
    $check_sql = "SELECT * FROM students WHERE email='$email'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // Redirect with error message
        header("Location: index.html?success=email_exists");
        exit();
    } else {
        // Email not found, proceed with insert
        $sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
        if ($conn->query($sql) === TRUE) {
            header("Location: index.html?success=registered");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>
