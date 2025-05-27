<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM seller WHERE id=$id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $shop_name = $_POST['shop_name'];

    $sql = "UPDATE seller SET name='$name', email='$email', shop_name='$shop_name' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Updated successfully. <a href='read.php'>Back to list</a>";
        exit;
    } else {
        echo "Error updating: " . $conn->error;
    }
}
?>

<h2>Edit Seller</h2>
<form method="POST">
    <input name="name" value="<?= $row['name'] ?>" required><br>
    <input name="email" value="<?= $row['email'] ?>" required><br>
    <input name="shop_name" value="<?= $row['shop_name'] ?>" required><br>
    <button type="submit">Update</button>
</form>
