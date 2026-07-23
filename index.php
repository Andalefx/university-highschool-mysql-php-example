<?php
// Veritabanı bağlantı ayarları
$sunucu = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "okul_projesi";

// MySQL bağlantısını oluşturuyoruz
$baglanti = new mysqli($sunucu, $kullanici, $sifre, $veritabani);

// Bağlantı hatası var mı kontrol edelim
if ($baglanti->connect_error) {
    die("Bağlantı hatası: " . $baglanti->connect_error);
}

// Türkçe karakter sorunu yaşamamak için karakter setini ayarlıyoruz
$baglanti->set_charset("utf8");

// Üyeleri tablodan çekme sorgumuz (Sadece ad, soyad ve şehir)
$sql = "SELECT ad, soyad, sehir FROM uyeler";
$sonuc = $baglanti->query($sql);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Üye Listesi Projesi</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f9f9f9; margin: 40px; }
        h2 { color: #333; }
        table { width: 60%; border-collapse: collapse; background: #fff; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Kayıtlı Üyeler Listesi</h2>

    <table>
        <tr>
            <th>Adı</th>
            <th>Soyadı</th>
            <th>Şehri</th>
        </tr>

        <?php
        // Tabloda veri var mı kontrol edelim
        if ($sonuc->num_rows > 0) {
            // Veritabanındaki satırları tek tek döngüye alıp ekrana yazdırıyoruz
            while($satir = $sonuc->fetch_assoc()) {
                echo "<tr>
                        <td>" . $satir["ad"] . "</td>
                        <td>" . $satir["soyad"] . "</td>
                        <td>" . $satir["sehir"] . "</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3' style='text-align:center;'>Hiç kayıt bulunamadı.</td></tr>";
        }

        // İşlem bitince veritabanı bağlantısını kapatalım
        $baglanti->close();
        ?>

    </table>

</body>
</html>