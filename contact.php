<?php 
$title = "Kontak Kami";
include 'includes/header.php'; 
?>
<h2>Hubungi Kami</h2>
<form method="post" action="">
    <input type="text" name="nama" placeholder="Nama Lengkap" required>
    <input type="email" name="email" placeholder="Alamat Email" required>
    <textarea name="pesan" rows="5" placeholder="Tulis pesan anda..." required></textarea>
    <button type="submit">Kirim</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p><b>Terima kasih, " . htmlspecialchars($_POST['nama']) . "!</b> Pesan Anda sudah dikirim.</p>";
}
?>
<?php include 'includes/footer.php'; ?>
