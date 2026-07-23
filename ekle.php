<?php
include 'baglanti.php';

$mesaj = "";

// Form gönderildiyse veritabanına kaydet
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $sehir = $_POST['sehir'];

    $sql = "INSERT INTO uyeler (ad, soyad, sehir) VALUES ('$ad', '$soyad', '$sehir')";

    if ($baglanti->query($sql) === TRUE) {
        $mesaj = "Yeni üye başarıyla eklendi!";
    } else {
        $mesaj = "Hata: " . $sql . "<br>" . $baglanti->error;
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yeni Üye Ekle</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        form { width: 300px; background: #f4f4f4; padding: 20px; border-radius: 5px; }
        input { width: 100%; padding: 8px; margin: 8px 0; box-sizing: border-box; }
        input[type="submit"] { background: #28a745; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background: #218838; }
        .mesaj { color: green; margin-bottom: 10px; }
    </style>
</head>
<body>

    <h2>Yeni Üye Ekle</h2>
    
    <?php if($mesaj != "") { echo "<p class='mesaj'>$mesaj</p>"; } ?>

    <form method="POST" action="">
        <label>Adı:</label>
        <input type="text" name="ad" required>

        <label>Soyadı:</label>
        <input type="text" name="soyad" required>

        <label>Şehri:</label>
        <input type="text" name="sehir" required>

        <input type="submit" value="Kaydet">
    </form>

    <br>
    <a href="index.php">← Üye Listesine Geri Dön</a>

</body>
</html>