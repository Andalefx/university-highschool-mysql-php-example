# University & High School PHP-MySQL CRUD Example

Bu proje; lise, meslek lisesi ve üniversite öğrencilerinin web programlama derslerinde öğrendikleri **PHP** ve **MySQL** temellerini pekiştirmesi amacıyla hazırlanmış basit, anlaşılır ve eksiksiz bir **CRUD (Create, Read, Update, Delete)** uygulamasıdır.

---

## 🚀 Özellikler, Kurulum ve Katkıda Bulunma

* **Üye Listeleme (`index.php`):** Veritabanındaki kayıtlı üyeleri şık bir tabloda listeleme.
* **Yeni Üye Ekleme (`ekle.php`):** Sisteme yeni ad, soyad ve şehir bilgisi kaydetme.
* **Üye Güncelleme (`duzenle.php`):** Mevcut üye bilgilerini düzenleyebilme.
* **Üye Silme (`sil.php`):** İstenmeyen kayıtları sistemden kaldırabilme.
* **Modüler Yapı:** Veritabanı bağlantısının ayrı bir dosyada (`baglanti.php`) tutulması.
* **Dosya Yapısı:** Proje içerisinde `baglanti.php`, `index.php`, `ekle.php`, `duzenle.php`, `sil.php` ve `veritabani.sql` dosyaları bulunmaktadır.
* **Kurulum Rehberi:** 
  1. Bilgisayarınızda **XAMPP**, **WAMP** veya **Laragon** kurup Apache ve MySQL servislerini başlatın.
  2. Dosyaları yerel sunucunuzun ana dizinine (örneğin XAMPP için `C:/xampp/htdocs/`) atın.
  3. `http://localhost/phpmyadmin/` adresine giderek **`veritabani.sql`** dosyasını çalıştırın ve `okul_projesi` veritabanını oluşturun.
  4. Tarayıcınıza `http://localhost/proje_klasor_adi/index.php` yazarak projeyi çalıştırın.
* **Katkıda Bulunma:** Eksik gördüğünüz bir yer olursa veya projeyi geliştirmek isterseniz pull request gönderebilir ya da issue açabilirsiniz.
