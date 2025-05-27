<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$sql = "DELETE FROM seller WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Seller deleted. <a href='read.php'>Back to list</a>";
} else {
    echo "Delete failed: " . $conn->error;
}
?>
