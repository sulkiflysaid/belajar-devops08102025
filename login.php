<?php 
$title = "Login Pengguna";
include 'includes/header.php'; 
?>
<h2>Log In</h2>
<form method="post" action="">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Masuk</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Contoh sederhana (tanpa database)
    if ($user == "admin" && $pass == "1234") {
        echo "<p>Selamat datang, <b>Admin!</b></p>";
    } else {
        echo "<p style='color:red;'>Username atau password salah!</p>";
    }
}
?>
<?php include 'includes/footer.php'; ?>
