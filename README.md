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
text
```
## ⚙️ Kurulum Rehberi

Projeyi kendi bilgisayarınızda çalıştırmak için aşağıdaki adımları takip edebilirsiniz:

1. **Yerel Sunucu Kurulumu:** 
   Bilgisayarınızda **XAMPP**, **WAMP** veya **Laragon** gibi bir yerel sunucu ortamının kurulu olduğundan emin olun ve Apache ile MySQL servislerini başlatın.

2. **Dosyaları Kopyalayın:**
   Projeyi indirin veya klonlayın, ardından proje dosyalarını yerel sunucunuzun ana dizinine (örneğin XAMPP için `C:/xampp/htdocs/` klasörünün içine) atın.

3. **Veritabanını Oluşturun:**
   * Tarayıcınızdan `http://localhost/phpmyadmin/` adresine gidin.
   * Proje içerisindeki **`veritabani.sql`** dosyasını içeri aktararak (import) `okul_projesi` veritabanını ve örnek üyeleri otomatik olarak oluşturun.

4. **Projeyi Çalıştırın:**
   Tarayıcınıza şu adresi yazarak uygulamaya ulaşın:
   `http://localhost/university-highschool-mysql-php-example/index.php`

---

## 🤝 Katkıda Bulunma
Eğer bu projeyi faydalı bulduysanız ve lise ile üniversite öğrencilerine daha fazla açık kaynak kodlu örnek hazırlamama destek olmak isterseniz, bir kahve ısmarlayabilir veya projeye yıldız (⭐) verebilirsiniz!

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-F0F0F2?style=for-the-badge&logo=buy-me-a-coffee&logoColor=000000)](Destek_Linkini_Buraya_Yaz)
