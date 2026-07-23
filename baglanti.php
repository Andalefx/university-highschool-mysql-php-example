<?php
// Veritabanı bağlantı bilgileri
$sunucu = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "okul_projesi";

// MySQL bağlantısını nesne yönelimli (OOP) olarak açıyoruz
$baglanti = new mysqli($sunucu, $kullanici, $sifre, $veritabani);

// Bağlantı hatası kontrolü
if ($baglanti->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $baglanti->connect_error);
}

// Türkçe karakter sorunu olmaması için karakter setini ayarlıyoruz
$baglanti->set_charset("utf8");
?>