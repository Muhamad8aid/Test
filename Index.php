<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // زانیاریەکانی بەکارهێنەر
    $valid_username = "admin";
    $valid_password = "123456";

    // وەرگرتنی داتا
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        echo "<h3>✅ Welcome, $username!</h3>";
    } else {
        echo "<h3>❌ Invalid username or password.</h3>";
    }
}
?>

<h2>Login Form</h2>
<form method="post" action="">
    <label>Username:</label><br>
    <input type="text" name="username"><br><br>
    <label>Password:</label><br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>

</body>
</html>
