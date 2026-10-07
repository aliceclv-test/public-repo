<?php
// SQL Injection — user input concatenated directly into query
// Some comment

$username = $_GET['username'];
$query = "SELECT * FROM users WHERE username = '" . $username . "'";
$result = mysqli_query($conn, $query);
?>
