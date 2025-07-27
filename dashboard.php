
<!-- Paste this at the top just after <body> -->
<nav style="background:#333; padding:10px;">
  <a href="dashboard.php" style="color:purple; margin:10px;">Dashboard</a>
  <a href="add_book_form.html" style="color:white; margin:10px;">Add Book</a>
  <a href="manage_students.php" style="color:white; margin:10px;">Student Approval</a>
  <a href="issued_books.php" style="color:white; margin:10px;">Issue Logs</a>
  <a href="return_book_form.html" style="color:white; margin:10px;">Return Book</a>
  <a href="logout.php" style="color:white; margin:10px;">Logout</a>
  <a href="delete_book.php?id=<?php echo $book_id; ?>" onclick="return confirm('Delete this book?')">Delete</a>
  <script>
  window.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);
    const success = params.get('success');

    if (success === 'registered') {
      alert("✅ Student registered successfully!");
    }
  });
</script>


</nav>
