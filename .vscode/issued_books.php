<?php
include 'db_connect.php';

$result = mysqli_query($conn, "
    SELECT i.issue_id, s.name AS student_name, b.title AS book_title,
           i.issue_date, i.return_date, i.returned
    FROM issues i
    JOIN students s ON i.student_id = s.student_id
    JOIN books b ON i.book_id = b.book_id
    ORDER BY i.issue_date DESC
");

echo "<h2>Issued Books</h2><table border='1' cellpadding='10'>";
echo "<tr><th>Issue ID</th><th>Student</th><th>Book</th><th>Issue Date</th><th>Return Date</th><th>Status</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    $status = $row['returned'] ? 'Returned' : 'Not Returned';
    echo "<tr>
            <td>{$row['issue_id']}</td>
            <td>{$row['student_name']}</td>
            <td>{$row['book_title']}</td>
            <td>{$row['issue_date']}</td>
            <td>{$row['return_date']}</td>
            <td>$status</td>
         </tr>";
}
if (mysqli_query($conn, $sql) && mysqli_query($conn, $update)) {
    header("Location: dashboard.php?success=issued");
    exit;
}

echo "</table>";
?>
