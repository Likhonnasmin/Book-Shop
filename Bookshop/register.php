<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "bookshop");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone = trim($_POST['phone']);
    $gender = $_POST['gender'];
    $genre = $_POST['genre'];
    $newsletter = isset($_POST['newsletter']) ? 'Yes' : 'No';

    // ✅ Upload profile picture
    $profile_picture = '';

    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $fileName = basename($_FILES["profile_picture"]["name"]);
        $targetDir = "uploads/";

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0755, true); // Create folder if not exists
        }

        $targetFile = $targetDir . uniqid() . "_" . $fileName;

        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)) {
            $profile_picture = $targetFile;
            //echo "<p>✅ Saved profile picture path: $profile_picture</p>";
        } else {
            echo "<p>❌ Failed to move uploaded file.</p>";
        }
    } else {
        echo "<p>⚠️ No profile picture uploaded or there was an upload error.</p>";
    }

    // ✅ Check for duplicate email
    $check = $conn->prepare("SELECT id FROM customers WHERE email=?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();
    if ($check->num_rows > 0) {
        echo "⚠️ This email is already registered. <a href='login.html'>Go to Login</a>";
        exit;
    }

    // ✅ Insert into database
    $stmt = $conn->prepare("INSERT INTO customers (fullname, email, password, phone, gender, genre, newsletter, profile_picture)
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $fullname, $email, $password, $phone, $gender, $genre, $newsletter, $profile_picture);

    if ($stmt->execute()) {
        echo "<p>✅ Registration successful! <a href='login.html'>Log in</a></p>";
    } else {
        echo "<p>❌ Error inserting into database: " . $conn->error . "</p>";
    }
}
?>
