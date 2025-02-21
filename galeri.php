<?php include 'header.php'; ?>

<div class="center-section">
    <h1>Galerideki Resimler</h1>
    <div class="gallery">
        <?php
        $directory = 'galeri/'; // Resimlerin bulunduğu klasör
        $images = glob($directory . '*.{jpg,jpeg,png,gif,heic}', GLOB_BRACE); // HEIC dosyalarını da dahil et

        // Her bir resmi ve başlığını listele
        foreach ($images as $image) {
            $imageTitle = pathinfo($image, PATHINFO_FILENAME); // Resmin başlığını almak için dosya adından uzantıyı ayırıyoruz
            
            // HEIC formatını JPEG'e dönüştür
            if (strtolower(pathinfo($image, PATHINFO_EXTENSION)) == 'heic') {
                $heicImage = new Imagick($image);
                $heicImage->setImageFormat('jpeg');
                $image = 'galeri/' . $imageTitle . '.jpg'; // Dönüştürülen resmin yolu
                $heicImage->writeImage($image); // Dönüştürülmüş resmi kaydet
                $heicImage->clear();
                $heicImage->destroy();
            }

            echo '<div class="card">';
            echo '<img src="' . $image . '" alt="' . htmlspecialchars($imageTitle) . '" class="clickable-image">'; // Resmi göster ve tıklanabilir yap
            echo '</div>';
        }
        ?>
    </div>
</div>

<!-- Modal (Büyüyen Resim) -->
<div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="modalImage">
</div>

<?php include 'footer.php'; ?>

<style>
    body {
        background-image: url('arkaplan_resmi_yok.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100vw;
        height: 100vh;
        overflow-x: hidden;
        margin: 0;
        padding: 0;
    }

    .center-section {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        padding: 20px;
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 45px; /* Resimler arasına boşluk ekledik */
        width: 100%;
        max-width: 1200px;
    }

    .card {
        width: 100%;
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-color: rgba(255, 255, 255, 0.9);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 5px;
        cursor: pointer;
        transition: transform 0.3s;
    }

    .card img:hover {
        transform: scale(1.05);
    }

    /* Modal Stili */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        border-radius: 10px;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 40px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }
</style>

<script>
    // Modal açma ve kapama işlemleri
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const closeBtn = document.getElementsByClassName('close')[0];

    document.querySelectorAll('.clickable-image').forEach(img => {
        img.addEventListener('click', function() {
            modal.style.display = 'block';
            modalImg.src = this.src;
        });
    });

    closeBtn.onclick = function() {
        modal.style.display = 'none';
    };

    window.onclick = function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    };
</script>

<style>
    /* Sayfanın tüm alanını kapsayacak şekilde flexbox ile ortalama */
/* Sayfanın arka planına resim ekleme */
/* Sayfanın arka planına resim ekleme */
/* Yatay kaydırmayı engelle */
/* Arkaplan resmi ayarları */
body {
    background-image: url('yok.png'); /* Buraya arkaplan resminin URL'sini koy */
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
