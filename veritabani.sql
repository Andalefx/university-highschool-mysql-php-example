-- Veritabanını oluşturalım
CREATE DATABASE okul_projesi CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci;

-- Veritabanını seçelim
USE okul_projesi;

-- Üyeler tablosunu oluşturalım
CREATE TABLE uyeler (
    id INT AUTO_INCREMENT PRIMARY KEY,
    ad VARCHAR(50) NOT NULL,
    soyad VARCHAR(50) NOT NULL,
    sehir VARCHAR(50) NOT NULL
);

-- Test için örnek veriler ekleyelim
INSERT INTO uyeler (ad, soyad, sehir) VALUES 
('Ahmet', 'Yılmaz', 'İstanbul'),
('Ayşe', 'Demir', 'Ankara'),
('Mehmet', 'Kaya', 'İzmir'),
('Fatma', 'Çelik', 'Bursa'),
('Ali', 'Şahin', 'Antalya');