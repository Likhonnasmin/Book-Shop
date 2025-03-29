<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<div style='text-align: center; font-family: Arial; background-color: #f4f4f4; padding: 20px;'>";
    echo "<h2 style='color: green;'>Registration Successful!</h2>";

    echo "<strong>Full Name:</strong> " . htmlspecialchars($_POST['fullname']) . "<br>";
    echo "<strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "<br>";
    echo "<strong>Phone:</strong> " . htmlspecialchars($_POST['phone']) . "<br>";
    echo "<strong>Gender:</strong> " . htmlspecialchars($_POST['gender']) . "<br>";
    echo "<strong>Preferred Genre:</strong> " . htmlspecialchars($_POST['genre']) . "<br>";

    if (isset($_POST['newsletter'])) {
        echo "<strong>Newsletter Subscription:</strong> Yes<br>";
    } else {
        echo "<strong>Newsletter Subscription:</strong> No<br>";
    }

    echo "<br><a href='register.html' style='text-decoration: none; color: blue;'>Go Back</a>";
    echo "</div>";
}
?>

