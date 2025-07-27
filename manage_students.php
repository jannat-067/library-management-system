<?php
include 'db_connect.php';
$result = mysqli_query($conn, "SELECT * FROM students WHERE approved = 0");

echo "<h2>Pending Student Approvals</h2>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<p>{$row['name']} ({$row['email']}) 
          <a href='approve_student.php?id={$row['student_id']}'>[Approve]</a></p>";
}
?>
>
