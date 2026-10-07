<?php
// SQL Injection — user input concatenated directly into query
// Some comment
// More comment
// More money spent

$username = $_GET['username'];
$stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ?");
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>
