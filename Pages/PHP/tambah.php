<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['kirim'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// include database connection file
include_once("config.php");

// Insert user data into table
$result = mysqli_query($mysqli, "INSERT INTO penjualan(name,email,message) VALUES('$name','$email','$message')");

header("Location:../display");

}
?>
