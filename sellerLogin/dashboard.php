<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: sellerLogin.php"); // Adjust path if needed
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Seller Dashboard</title>
</head>
<body>
    <h3>Login successful!</h3>
    <h3>Welcome<br><?php echo $_SESSION['name']; ?></h3>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>
