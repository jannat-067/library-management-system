<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "UPDATE students SET approved = 1 WHERE student_id = $id";
    mysqli_query($conn, $sql);
    header("Location: manage_students.php");
}
?>
