<?php
include 'baglanti.php';

$mesaj = "";

// URL'den ID gelip gelmediğini kontrol edelim
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Güncellenecek üyenin mevcut bilgilerini çekelim
    $sorgu = $baglanti->query("SELECT * FROM uyeler WHERE id = $id");
    $uye = $sorgu->fetch_assoc();
}

// Form gönderildiğinde verileri güncelleyelim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $sehir = $_POST['sehir'];

    $guncelle = $baglanti->query("UPDATE uyeler SET ad='$ad', soyad='$soyad', sehir='$sehir' WHERE id=$id");

    if ($guncelle) {
        header("Location: index.php"); // Başarılı olursa ana sayfaya yönlendir
        exit();
    } else {
        $mesaj = "Güncelleme hatası: " . $baglanti->error;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Üye Düzenle</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        form { width: 300px; background: #f4f4f4; padding: 20px; border-radius: 5px; }
        input { width: 100%; padding: 8px; margin: 8px 0; box-sizing: border-box; }
        input[type="submit"] { background: #ffc107; color: black; border: none; cursor: pointer; font-weight: bold; }
        input[type="submit"]:hover { background: #e0a800; }
        .mesaj { color: red; margin-bottom: 10px; }
    </style>
</head>
<body>

    <h2>Üye Bilgilerini Güncelle</h2>

    <?php if($mesaj != "") { echo "<p class='mesaj'>$mesaj</p>"; } ?>

    <form method="POST" action="">
        <!-- Hangi üyeyi güncellediğimizi anlamak için gizli ID alanı -->
        <input type="hidden" name="id" value="<?php echo $uye['id']; ?>">

        <label>Adı:</label>
        <input type="text" name="ad" value="<?php echo $uye['ad']; ?>" required>

        <label>Soyadı:</label>
        <input type="text" name="soyad" value="<?php echo $uye['soyad']; ?>" required>

        <label>Şehri:</label>
        <input type="text" name="sehir" value="<?php echo $uye['sehir']; ?>" required>

        <input type="submit" value="Güncelle">
    </form>

    <br>
    <a href="index.php">← Ana Sayfaya Dön</a>

</body>
</html>