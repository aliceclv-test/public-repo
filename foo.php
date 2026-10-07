
<?php
// SQL Injection — user input concatenated directly into query
// Some comment
// More comment
// More money spent


$username = $_GET['username'];
$query = "SELECT * FROM users WHERE username = '" . $username . "'";
$result = mysqli_query($conn, $query);Expand commentComment on lines R8 to R10Expand commentComment on lines R8 to R10Expand commentComment on lines R9 to R11
?>
