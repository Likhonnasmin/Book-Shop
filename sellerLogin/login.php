<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seller Login</title>
</head>
<body>
    <h2>Seller Login</h2>
    <form method="post" action="sellerAuth.php">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Login">
    </form>
     <p>Don't have an account? <a href="../seller.php">Register here</a></p>
</body>
</html>
