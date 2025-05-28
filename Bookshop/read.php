<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$conn = new mysqli("localhost", "root", "", "bookshop");

$result = $conn->query("SELECT * FROM customers");

echo "<h2>Customer List</h2><table border='1'><tr><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['fullname']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>
              <a href='edit.php?id={$row['id']}'>Edit</a> |
              <a href='delete.php?id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
echo "</table>";
?>
