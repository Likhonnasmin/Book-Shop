<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$conn = new mysqli("localhost", "root", "", "bookshop");
$id = $_GET['id'];
$conn->query("DELETE FROM customers WHERE id=$id");
header("Location: read.php");
?>
