<section>
<link rel="stylesheet" href="style.css">
<?php
// Röportajlar PHP Dosyası
$title = "Mülakatlar";
include 'header.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Röportaj</title>
    <style>
        .y-almacioglu {
            color: #A9D8E6; /* Pastel Açık Mavi */
        }
        .b-yumuk {
            color: #FFB6C1; /* Pastel Açık Kırmızı */
        }
    </style>
</head>
<body>
    <p class="y-almacioglu">Y. ALMACIOĞLU: Adınızı soyadınızı alabilir miyiz?</p>
    <p class="b-yumuk">Beyazıt Yumuk: Türkiye Muharip Gaziler Derneği Genel Başkanıyım. Kıbrıs Barış Harekâtı gazisiyim ve Deniz Kuvvetleri bünyesinde TCG İçel muhribinde görev aldım.</p>

    <p class="y-almacioglu">Y. ALMACIOĞLU: Harekât sırasında karşılaştığınız en zor şey neydi?</p>
    <p class="b-yumuk">Beyazıt Yumuk: Genelde gemilerde fazla sıkıntı yaşamadık, ancak en büyük zorluk su sıkıntısıydı. O dönemde kullanılan gemiler 2. Dünya Savaşı'ndan kalma Amerikan yapımı gemilerdi, su yapıcı cihazlar arızalıydı ve bu sebepten su temini çok zordu.</p>

    <p class="y-almacioglu">Y. ALMACIOĞLU: Sahada yaşadığınız en unutulmaz olay neydi?</p>
    <p class="b-yumuk">Beyazıt Yumuk: En unutulmaz olay, TCG Kocatepe'nin batışıydı. Bu olayda 54 askerimiz şehit oldu, bunlardan 3'ü sınıf arkadaşımdı. O an çok üzüldük, bu kayıplar hep aklımızda kaldı.</p>

    <p class="y-almacioglu">Y. ALMACIOĞLU: Görev süresince yerel halkla ilişkiniz nasıldı?</p>
    <p class="b-yumuk">Beyazıt Yumuk: Kıbrıs'ta halkın bakışı iki nesil arasında değişiyordu. Eski nesil Türkiye'nin desteğini çok iyi biliyor, bizleri çok iyi karşıladı. Yeni nesil ise yavaşça bunu öğreniyor. Kıbrıs'taki Türk varlığının devamı, Türkiye'nin desteğiyle mümkün.</p>

    <p class="y-almacioglu">Y. ALMACIOĞLU: Harekattan sonra bu deneyim nasıl hayatınızı etkiledi?</p>
    <p class="b-yumuk">Beyazıt Yumuk: Harekattan sonra görevime devam ettim, 26 yıl Deniz Kuvvetleri’nde görev yaptım ve son olarak Deniz Kuvvetleri Komutanlığı karargahından emekli oldum. Hayatımda büyük bir değişiklik olmadı, sadece görev şartları bazen zorlu oluyordu.</p>

    <p class="y-almacioglu">Y. ALMACIOĞLU: Kıbrıs Barış Harekâtı’nın Türkiye ve dünya tarihi açısından önemi nedir?</p>
    <p class="b-yumuk">Beyazıt Yumuk: Kıbrıs, jeopolitik olarak çok önemli bir nokta. Türkiye, dünya tarihinde büyük bir çıkarma harekâtı gerçekleştirdi. 69 gemi, 70 uçak ve 62 helikopterle yapılan bu harekât, dünya savaş tarihinde önemli bir yere sahiptir. Türkiye'nin sabırlı yaklaşımı, Kıbrıs'ın özgürlüğünü kazanmasına büyük katkı sağladı.</p>

    <p class="y-almacioglu">Y. ALMACIOĞLU: Kıbrıs Barış Harekâtında bir Rum askeriyle diyaloğunuz oldu mu?</p>
    <p class="b-yumuk">Beyazıt Yumuk: Biz gemide olduğumuz için kara birliklerinin yaşadığı bu tür durumlar bizim için mümkün olmadı.</p>

    <p class="y-almacioglu">Y. ALMACIOĞLU: Geri döndüğünüzde Türkiye’de nasıl karşılandınız?</p>
    <p class="b-yumuk">Beyazıt Yumuk: Mersin’e döndüğümüzde halkın büyük ilgisiyle karşılandık. Taksiye bindiğimizde para almadılar, minibüsle seyahat ederken de aynı şekilde ilgilenildi. Bütün halk, kahraman olarak karşılayarak büyük bir destek verdi.</p>
</body>
</html>

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