<?php include 'header.php'; ?>
<section class="layout">
    <!-- Sol Bölüm -->
    <!-- Orta Bölüm -->
    <div class="center-section">
        <div class="card">
            <h1>Kıbrıs Barış Harekatı: 50 Yıllık Barışın İzleri</h1>
            <p>1974 yılında gerçekleştirilen Kıbrıs Barış Harekâtı, Türk Silahlı Kuvvetleri tarafından Kıbrıs Türklerini korumak amacıyla başlatılmıştır.</p>
            <a href="tarihce.php">
                <button class="btn">
                    <span class="text">Tarihçeyi Oku</span>
                    <span class="icon">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M13 16L17 12L13 8" stroke="currentColor" stroke-width="1.5"></path>
                            <path d="M17 12H7" stroke="currentColor" stroke-width="1.5"></path>
                        </svg>
                    </span>
                </button>
            </a>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>

<style>
    /* Sayfanın tüm alanını kapsayacak şekilde flexbox ile ortalama */
/* Sayfanın arka planına resim ekleme */
/* Sayfanın arka planına resim ekleme */
/* Yatay kaydırmayı engelle */
/* Arkaplan resmi ayarları */
body {
    background-image: url('arkaplan_resmi.png'); /* Buraya arkaplan resminin URL'sini koy */
    background-size: center; /* Sayfaya göre ölçeklensin */
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
    position: ;
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
