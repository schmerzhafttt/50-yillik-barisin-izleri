# 🇨🇾 Kıbrıs Barış Harekâtı Web Sitesi

Bu proje, **Kıbrıs Barış Harekâtı** ile ilgili tarihsel bilgileri, görselleri ve röportajları kullanıcılarla paylaşmak amacıyla geliştirilmiştir. PHP tabanlı bir web sitesi olarak tasarlanmış ve kullanıcı geri bildirimleri de dahil olmak üzere zengin bir içerik sunmaktadır.

---

## 🌟 Özellikler

- 📜 Tarihçe ve önemli olayların detaylı anlatımı (`tarihce.php`)
- 🖼️ Galeri bölümü ile görsel arşiv (`galeri.php`)
- 🎙️ Röportajlar ve özel mülakatlar (`mulakatlar.php`, `mulakat1.php`, `mulakat2.php`, `mulakat3.php`, `mulakat4.php`)
- 🎥 YouTube videoları entegrasyonu (`youtube_videos.php`)
- 📋 Ziyaretçi yorum ve geri bildirim bölümü (`review.php`, `feedback.txt`)
- 📚 Kaynakça ve referanslar bölümü (`kaynakca.php`)

---

## 🔗 Canlı Demo

Web sitesi için bağlantı: [kibrisbarisharekati.org](https://kibrisbarisharekati.org)

---

## 📂 Proje Yapısı

```
/HTDOCS
│
├── galeri/
│   ├── arkaplan_resmi.png
│   ├── icon.png
│   ├── image.png
│
├── feedback.txt          # Ziyaretçi geri bildirimleri
├── footer.php            # Sayfa alt bilgileri
├── header.php            # Sayfa başlığı ve navigasyon
├── index.php             # Ana sayfa
├── kaynakca.php          # Kaynakça bölümü
├── review.php            # Yorum bölümü
├── script.js             # JavaScript işlevleri
├── site.php              # Genel site ayarları
├── style.css             # Stil dosyası
├── tarihce.php           # Tarihsel bilgiler
├── youtube_videos.php    # Video entegrasyonu
│
├── mulakatlar.php        # Mülakatlar genel sayfası
│   ├── mulakat1.php      # 1. Mülakat
│   ├── mulakat2.php      # 2. Mülakat
│   ├── mulakat3.php      # 3. Mülakat
│   ├── mulakat4.php      # 4. Mülakat
```

---

## ⚙️ Kurulum ve Çalıştırma

### 📌 Gereksinimler
- PHP 7.4+  
- Apache veya Nginx web sunucusu  
- MySQL (Gerekirse)  

### 🚀 Adım Adım Kurulum

1️⃣ Depoyu klonlayın:
```bash
git clone https://github.com/schmerzhafttt/kibrisbarisharekati.git
cd kibrisbarisharekati
```

2️⃣ PHP sunucusunu başlatın:
```bash
php -S localhost:8000
```

3️⃣ Tarayıcıda açın:
```
http://localhost:8000
```

---

## ✍️ Geri Bildirim Sistemi

Ziyaretçiler, geri bildirimlerini `feedback.txt` dosyasında saklanacak şekilde gönderebilir. Gönderilen her mesaj şu formatta kaydedilir:

```
İsim: [Ad Soyad]
Email: [Email Adresi]
Mesaj: [Mesaj İçeriği]
```

---

## 🔒 Lisans

> **Tüm Hakları Saklıdır**  
> Bu proje yalnızca sahibinin izniyle kullanılabilir. İzinsiz kullanım, kopyalama veya dağıtım yasaktır.

---

## 📞 İletişim

Her türlü soru ve öneri için:  
📧 [gladionincx190@gmail.com](mailto:gladionincx190@gmail.com)

---

⭐ Eğer bu projeyi faydalı bulduysanız, GitHub'da bir yıldız bırakmayı unutmayın!
