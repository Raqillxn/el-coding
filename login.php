<?php
// Cek apakah form disubmit
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Username & password yang benar
    $validUser = "Raqilla";
    $validPass = "123456";

    if ($username === $validUser && $password === $validPass) {
        $message = "<p style='color: green;'>Login berhasil! Selamat datang, Raqilla.</p>";
    } else {
        $message = "<p style='color: red;'>Username atau password salah!</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Login</title>
</head>
<body>

<h2>Form Login</h2>

<form method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit">Login</button>
</form>

<br>
<?php echo $message; ?>

</body>
</html>

