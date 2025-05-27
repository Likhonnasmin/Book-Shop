<?php
session_start(); 
include("../db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = createcon();

    $sql = "SELECT * FROM seller WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login success
        $name = explode('@', $email)[0];
        $_SESSION['email'] = $email;
        $_SESSION['name'] = ucfirst($name);

        header("Location: dashboard.php");
        exit();
    } else {
        echo "<h3>Invalid email or password.</h3>";
    }

    mysqli_close($conn);
}
?>
