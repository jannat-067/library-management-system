<!-- navbar.php -->
<style>
  .navbar {
    background-color: #333;
    padding: 10px;
  }

  .navbar .container {
    display: flex;
    gap: 15px;
  }

  .navbar a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 8px 15px;
    transition: background 0.3s;
  }

  .navbar a:hover {
    background-color: #555;
    border-radius: 5px;
  }
</style>

<nav class="navbar">
  <div class="container">
    <a href="dashboard.php" onclick="alert('Going to Dashboard')">Dashboard</a>
    <a href="add_book_form.html" onclick="alert('Redirecting to Add Book')">Add Book</a>
    <a href="manage_students.php" onclick="alert('Manage Students')">Student Approval</a>
    <a href="issued_books.php" onclick="alert('Viewing Issued Logs')">Issue Logs</a>
    <a href="return_book_form.html" onclick="alert('Return a Book')">Return Book</a>
    <a href="logout.php" onclick="alert('Logging Out')">Logout</a>
  </div>
</nav>
