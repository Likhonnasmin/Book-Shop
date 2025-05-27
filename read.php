<?php include 'db.php'; ?>

<h2>Seller List</h2>
<a href="create.php">Add New Seller</a><br><br>

<?php
$result = $conn->query("SELECT * FROM seller");

echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Shop</th><th>Actions</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['shop_name']}</td>
            <td>
                <a href='update.php?id={$row['id']}'>Edit</a> | 
                <a href='delete.php?id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
echo "</table>";
?>
