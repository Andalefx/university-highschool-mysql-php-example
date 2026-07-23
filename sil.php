<?php
include 'baglanti.php';

// URL'den ID gelip gelmediğini kontrol et
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Silme sorgusu
    $sil = $baglanti->query("DELETE FROM uyeler WHERE id = $id");

    if ($sil) {
        // Silme başarılıysa ana sayfaya geri dön
        header("Location: index.php");
        exit();
    } else {
        echo "Silme işlemi başarısız: " . $baglanti->error;
    }
} else {
    header("Location: index.php");
    exit();
}
?>