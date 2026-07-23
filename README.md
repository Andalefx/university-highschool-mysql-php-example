# University & High School PHP-MySQL CRUD Example

Bu proje; lise, meslek lisesi ve üniversite öğrencilerinin web programlama derslerinde öğrendikleri **PHP** ve **MySQL** temellerini pekiştirmesi amacıyla hazırlanmış basit, anlaşılır ve eksiksiz bir **CRUD (Create, Read, Update, Delete)** uygulamasıdır.

---

## 🚀 Özellikler

* **Üye Listeleme (`index.php`):** Veritabanındaki kayıtlı üyeleri şık bir tabloda listeleme.
* **Yeni Üye Ekleme (`ekle.php`):** Sisteme yeni ad, soyad ve şehir bilgisi kaydetme.
* **Üye Güncelleme (`duzenle.php`):** Mevcut üye bilgilerini düzenleyebilme.
* **Üye Silme (`sil.php`):** İstenmeyen kayıtları sistemden kaldırabilme.
* **Modüler Yapı:** Veritabanı bağlantısının ayrı bir dosyada (`baglanti.php`) tutulması.

---

## 📂 Dosya Yapısı

```text
├── baglanti.php       # Veritabanı bağlantı dosyası
├── index.php          # Ana sayfa ve üye listeleme
├── ekle.php           # Yeni üye kayıt formu
├── duzenle.php        # Üye bilgi güncelleme sayfası
├── sil.php            # Üye silme arka plan dosyası
└── veritabani.sql     # MySQL veritabanı ve örnek tablo dosyası
