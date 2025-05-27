<?php include 'db.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $shop_name = $_POST['shop_name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $shop_type = $_POST['shop_type'];
    $established = $_POST['established'];
    $category = $_POST['category'];
    $terms = isset($_POST['terms']) ? 1 : 0;

    $sql = "INSERT INTO seller (name, email, phone, shop_name, password, shop_type, established_year, category, terms_accepted)
            VALUES ('$name', '$email', '$phone', '$shop_name', '$password', '$shop_type', '$established', '$category', '$terms')";

    if ($conn->query($sql) === TRUE) {
        echo "Seller added successfully.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


<form method="POST">
    <input name="name" placeholder="Name" required><br>
    <input name="email" type="email" placeholder="Email" required><br>
    <input name="phone" placeholder="Phone" required><br>
    <input name="shop_name" placeholder="Shop Name" required><br>
    <input name="password" type="password" placeholder="Password" required><br>
    <input name="shop_type" placeholder="Shop Type" required><br>
    <input name="established" type="number" placeholder="Established Year"><br>
    <input name="category" placeholder="Category"><br>
    <label><input type="checkbox" name="terms"> Accept Terms</label><br>
    <button type="submit">Add Seller</button>
</form>
