<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $issue_id = $_POST['issue_id'];
    $return_date = date('Y-m-d');

    // Get book_id from the issue
    $getBook = mysqli_query($conn, "SELECT book_id FROM issues WHERE issue_id = $issue_id AND returned = 0");
    $row = mysqli_fetch_assoc($getBook);
    $book_id = $row['book_id'];

    $sql = "UPDATE issues SET return_date = '$return_date', returned = 1 WHERE issue_id = $issue_id";
    $update = "UPDATE books SET available_copies = available_copies + 1 WHERE book_id = $book_id";

    if (mysqli_query($conn, $sql) && mysqli_query($conn, $update)) {
        echo "Book returned successfully!";
    } else {
        echo "Failed to return book.";
    }
}
if (mysqli_query($conn, $sql) && mysqli_query($conn, $update)) {
    header("Location: dashboard.php?success=returned");
    exit;
}

?>
