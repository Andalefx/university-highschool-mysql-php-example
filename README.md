#University & High School PHP-MySQL CRUD Example
Bu proje; lise, meslek lisesi ve üniversite öğrencilerinin web programlama derslerinde öğrendikleri PHP ve MySQL temellerini pekiştirmesi amacıyla hazırlanmış basit, anlaşılır ve eksiksiz bir CRUD (Create, Read, Update, Delete) uygulamasıdır.
🚀 Özellikler
Üye Listeleme (index.php): Veritabanındaki kayıtlı üyeleri şık bir tabloda listeleme.
Yeni Üye Ekleme (ekle.php): Sisteme yeni ad, soyad ve şehir bilgisi kaydetme.
Üye Güncelleme (duzenle.php): Mevcut üye bilgilerini düzenleyebilme.
Üye Silme (sil.php): İstenmeyen kayıtları sistemden kaldırabilme.
Modüler Yapı: Veritabanı bağlantısının ayrı bir dosyada (baglanti.php) tutulması.
📂 Dosya Yapısı
Plaintext
├── baglanti.php       # Veritabanı bağlantı dosyası
├── index.php          # Ana sayfa ve üye listeleme
├── ekle.php           # Yeni üye kayıt formu
├── duzenle.php        # Üye bilgi güncelleme sayfası
├── sil.php            # Üye silme arka plan dosyası
└── veritabani.sql     # MySQL veritabanı ve örnek tablo dosyası
⚙️ Kurulum Rehberi
Projeyi kendi bilgisayarınızda çalıştırmak için aşağıdaki adımları takip edebilirsiniz:
Yerel Sunucu Kurulumu:
Bilgisayarınızda XAMPP, WAMP veya Laragon gibi bir yerel sunucu ortamının kurulu olduğundan emin olun (Apache ve MySQL servislerini başlatın).
Dosyaları Kopyalayın:
Projeyi klonlayın veya indirin, ardından dosyaları yerel sunucunuzun ana dizinine (örneğin XAMPP için C:/xampp/htdocs/ klasörünün içine) atın.
Veritabanını Oluşturun:
Tarayıcınızdan http://localhost/phpmyadmin/ adresine gidin.
Proje içerisindeki veritabani.sql dosyasını çalıştırarak okul_projesi veritabanını ve örnek üyeleri otomatik olarak oluşturun. (Alternatif olarak yeni bir veritabanı açıp SQL kodlarını doğrudan çalıştırabilirsiniz).
Projeyi Çalıştırın:
Tarayıcınıza şu adresi yazarak uygulamaya ulaşın:
Plaintext
http://localhost/proje_klasor_adi/index.php
🤝 Katkıda Bulunma
Eksik gördüğünüz bir yer olursa veya projeyi geliştirmek isterseniz pull request gönderebilir ya da issue açabilirsiniz.
