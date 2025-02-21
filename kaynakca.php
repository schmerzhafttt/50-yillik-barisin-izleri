<?php include 'header.php'; ?>
<section>
<link rel="stylesheet" href="style.css">

<?php
// Kaynakça verilerini dizi olarak tanımlıyoruz
$sources = [
    "Anadolu Ajansı. (2024, 2007). Kıbrıs Barış Harekâtı Savunma sanayisinin 'millileşmesini' hızlandırdı. <a href='https://www.aa.com.tr/tr/gundem/kibris-baris-harekati-turk-savunma-sanayisinin-millilesmesini-hizlandirdi/3280520#:~:text=Harekat%20sonucu%2C%20TSK'>Link</a>",
    "Apuhan, F. (2017). 1974 Kıbrıs Barış Harekâtı ve Bingöllü Kıbrıs Gazileri [Yayımlanmamış yüksek lisans tezi]. T.C. Van Yüzüncü Yıl Üniversitesi.",
    "Çilingir, A., & Özdemir, M. (2021). TMT 'ölmek var, dönmek yok' (1. Baskı). Bilge Oğuz Yayınları.",
    "Kızılyürek, N. (2005). Doğmamış bir devletin tarihi: Birleşik Kıbrıs Cumhuriyeti. (1. Baskı). İletişim Yayınları.",
    "Levent, Z. (2012). Kıbrıs Sorunu Ekseninde Türkiye-Avrupa Birliği İlişkileri. T.C.",
    "Satan, A., & Şentürk, E. (2023). Tanıkların diliyle Kıbrıs olayları. (1. Baskı). Atatürk Kültür, Dil ve Tarih Yüksek Kurumu.",
    "Tandoğan, M. Ş. (2019). Fotoğraflarla Kıbrıs Barış Harekâtı. Türkiye Muharip Gaziler Derneği.",
    "Tarakçı, M. (2010). Kıbrıs Barış Harekâtı. (1. Baskı). Hiperlink Yayınları.",
    "Yıldırım, A., & Şimşek, H. (2021). Sosyal bilimlerde nitel araştırma yöntemleri. (12. Baskı). Seçkin Akademik ve Mesleki Yayınlar.",
    "Yurt Dışı Türkler ve Akraba Toplulukları Başkanlığı. (20 Temmuz 2023). Barışın Teminatı: Kıbrıs Barış Harekâtı. <a href='https://ytb.gov.tr/haberler/barisin-teminati-kibris-baris-harekati'>Link</a>"
];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaynakça</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        h1 {
            text-align: center;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        a {
            color: blue;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>KAYNAKÇA</h1>
    <ul>
        <?php foreach ($sources as $source): ?>
            <li><?php echo $source; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

</section>
<?php include 'footer.php'; ?>
<style>
    /* Sayfanın tüm alanını kapsayacak şekilde flexbox ile ortalama */
/* Sayfanın arka planına resim ekleme */
/* Sayfanın arka planına resim ekleme */
/* Yatay kaydırmayı engelle */
/* Arkaplan resmi ayarları */
body {
    background-size: cover; /* Sayfaya göre ölçeklensin */
    background-position: center; /* Ortalansın */
    background-repeat: no-repeat; /* Tekrar etmesin */
    width: 100vw; /* Sayfa genişliğini tam kaplasın */
    height: 100vh; /* Sayfa yüksekliğini tam kaplasın */
    overflow-x: hidden; /* Yatay kaydırmayı engelle */
    margin: 0;
    padding: 0;
}


/* Header içeriğinin ekranda görünmesini sağla */
.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    padding: 10px 20px;
    box-sizing: border-box;
}

/* Menü ikonunu ekranda sabitle */
.menu-icon {
    font-size: 30px;
    cursor: pointer;
    color: #4E4E51;
    position: fixed;
    top: 15px;
    right: 20px;  /* Sağ üstte sabit dursun */
    z-index: 1002; /* Sidebar'dan bile yukarıda olacak */
}

/* Sidebar menünün düzgün açılmasını sağla */
.sidebar {
    height: 100%;
    width: 0;
    position: fixed;
    top: 0;
    right: 0;
    background-color: #85B3DD;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    z-index: 1001;
}

/* İçerik taşmasını engelle */
.card, .content {
    max-width: 100%;
    overflow: hidden;
}

/* Diğer stiller aşağıda olduğu gibi kalabilir */
.layout {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100%;
}

.center-section {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    padding: 20px;
    /* backdrop-filter: blur(5px);  -- Bu satırı kaldırdık */
}

.card {
    width: 100%;
    max-width: 600px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    margin-bottom: 20px;
    background-color: rgba(255, 255, 255, 0.8); /* Kartın arka planını beyaz yaparak opaklık ekleyebilirsin */
}



    /* Butonun stili */
    .btn {
        padding: 15px 30px;
        font-size: 16px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px; /* Kartın altına butonu eklemek için boşluk */
    }

    /* Butonun içindeki ikon ve yazı düzeni */
    .btn .text {
        margin-right: 10px;
    }

    .btn .icon svg {
        width: 20px;
        height: 20px;
    }

    /* Mobil uyumlu düzenlemeler */
    @media (max-width: 768px) {
        .card {
            max-width: 90%; /* Kartın genişliği mobilde %90 olacak */
            padding: 15px; /* Kartın içindeki boşlukları azalt */
        }

        .btn {
            padding: 12px 20px; /* Butonun boyutlarını mobilde küçült */
            font-size: 14px; /* Buton yazı boyutunu küçült */
        }

        .center-section {
            padding: 10px; /* Ekranın kenarlarına daha fazla boşluk ekle */
        }
    }

    /* Daha küçük ekranlar için (örneğin, telefonlar) */
    @media (max-width: 480px) {
        .card {
            max-width: 95%; /* Kartı daha da küçült */
            padding: 10px; /* Kartın içindeki boşluğu daha da küçült */
        }

        .btn {
            padding: 10px 18px; /* Butonun boyutunu daha da küçült */
            font-size: 13px; /* Buton yazı boyutunu küçült */
        }
    }
</style>