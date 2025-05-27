<?php
function createCon() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookshop";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

function insert($conn, $name, $email, $phone, $shop_name, $password, $shop_type, $established, $categories, $terms, $filepath){
    $sql = "INSERT INTO seller (name, email, phone, shop_name, password, shop_type, established, categories, terms, file_path)
            VALUES ('$name','$email','$phone','$shop_name','$password','$shop_type','$established','$categories','$terms','$filepath')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function conClose($conn) {
    mysqli_close($conn); 
}
?>
