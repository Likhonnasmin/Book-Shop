<?php
ob_start(); 
include("db.php");

$name = $email = $phone = $shop_name = $password = $shop_type = $established = $categories = $terms = "";
$nameErr = $emailErr = $phoneErr = $shopNameErr = $passwordErr = $shopTypeErr = $establishedErr = $categoryErr = $termsErr = "";
$fileErr = $filepath = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Input validations
    if (empty($_POST["name"])) {
        $nameErr = "Full Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
    } else {
        $phone = htmlspecialchars($_POST["phone"]);
        if (!preg_match("/^\+?[0-9]{10,15}$/", $phone)) {
            $phoneErr = "Invalid phone number format";
        }
    }

    if (empty($_POST["shop_name"])) {
        $shopNameErr = "Bookshop name is required";
    } else {
        $shop_name = htmlspecialchars($_POST["shop_name"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
        if (strlen($password) < 6) {
            $passwordErr = "Password must be at least 6 characters";
        }
    }

    if (empty($_POST["shop_type"])) {
        $shopTypeErr = "Shop type is required";
    } else {
        $shop_type = $_POST["shop_type"];
    }

    if (empty($_POST["established"])) {
        $establishedErr = "Established year is required";
    } else {
        $established = intval($_POST["established"]);
        if ($established < 1900 || $established > 2025) {
            $establishedErr = "Year must be between 1900 and 2025";
        }
    }

    if (empty($_POST["categories"])) {
        $categoryErr = "Please select a book category";
    } else {
        $categories = $_POST["categories"];
    }

    if (empty($_POST["terms"])) {
        $termsErr = "You must accept the terms and conditions";
    } else {
        $terms = $_POST["terms"];
    }

    // File upload
    if (isset($_FILES["shop_file"]) && $_FILES["shop_file"]["error"] == 0) {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $fileName = time() . "_" . basename($_FILES["shop_file"]["name"]);
        $targetFilePath = $uploadDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        $allowedTypes = ['jpg', 'jpeg', 'png', 'pdf'];
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["shop_file"]["tmp_name"], $targetFilePath)) {
                $filepath = $targetFilePath;
            } else {
                $fileErr = "Error uploading the file.";
            }
        } else {
            $fileErr = "Only JPG, JPEG, PNG & PDF files are allowed.";
        }
    } else {
        $fileErr = "Please upload a file.";
    }

    
    if (
        empty($nameErr) && empty($emailErr) && empty($phoneErr) && empty($shopNameErr) &&
        empty($passwordErr) && empty($shopTypeErr) && empty($establishedErr) &&
        empty($categoryErr) && empty($termsErr) && empty($fileErr)
    ) {
        $conn = createcon();
        insert($conn, $name, $email, $phone, $shop_name, $password, $shop_type, $established, $categories, $terms, $filepath);
        mysqli_close($conn);

         header("Location: sellerLogin/login.php");
         exit();


    }
}
?>
