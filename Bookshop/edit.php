<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$conn = new mysqli("localhost", "root", "", "bookshop");

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM customers WHERE id=$id");
$data = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $conn->query("UPDATE customers SET fullname='$fullname', phone='$phone' WHERE id=$id");
    header("Location: read.php");
}
?>

<form method="post">
  <label>Full Name:</label>
  <input type="text" name="fullname" value="<?= $data['fullname'] ?>" required>
  <label>Phone:</label>
  <input type="text" name="phone" value="<?= $data['phone'] ?>" required>
  <input type="submit" value="Update">
</form>
