<?php 
$title = "Form Registrasi";
include 'includes/header.php'; 
?>
<h2>Form Registrasi</h2>
<form method="post" action="">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Alamat Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Daftar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Pendaftaran berhasil! Selamat datang, <b>" . htmlspecialchars($_POST['username']) . "</b>.</p>";
}
?>
<?php include 'includes/footer.php'; ?>
