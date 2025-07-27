<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $copies = $_POST['copies'];

    $sql = "INSERT INTO books (title, author, genre, copies) VALUES ('$title', '$author', '$genre', $copies)";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.html?success=book_added");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
