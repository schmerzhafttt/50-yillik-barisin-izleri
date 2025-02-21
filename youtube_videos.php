<?php include 'header.php'; ?>
<link rel="stylesheet" href="style.css">

<?php
// YouTube API Ayarları
$apiKey = 'AIzaSyBpJEUEeTvJt1qhdA9hwjcJsSI0k2hzBwA'; // Buraya kendi API anahtarınızı yazın
$channelId = 'UCTEeszfNRT2bNWUMIhwW2nw'; // Buraya kanal ID'sini yazın
$apiUrl = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&part=snippet&order=date&maxResults=50";

// API'den veri çekme
$response = file_get_contents($apiUrl);
$data = json_decode($response, true);

// Videoları listeleme
if (!empty($data['items'])) {
    echo '<div class="video-list">';
    foreach ($data['items'] as $item) {
        if ($item['id']['kind'] === 'youtube#video') {
            $videoId = $item['id']['videoId'];
            $title = $item['snippet']['title'];
            $description = $item['snippet']['description'];
            $thumbnail = $item['snippet']['thumbnails']['high']['url'];

            // Video kartını oluştur
            echo "
            <div class='card' onclick='openVideoModal(\"$videoId\")'>
                <img src='$thumbnail' alt='$title' class='card-thumbnail'>
                <div class='card-content'>
                    <h3 class='card-title'>$title</h3>
                    <p class='card-description'>" . substr($description, 0, 50) . "...</p>
                </div>
            </div>
            ";
        }
    }
    echo '</div>';
} else {
    echo '<p>Kanalda video bulunamadı.</p>';
}
?>

<!-- Modal HTML -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeVideoModal()">&times;</span>
        <iframe id="videoFrame" width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<script>
// Modalı açma fonksiyonu
function openVideoModal(videoId) {
    var modal = document.getElementById("videoModal");
    modal.style.display = "block";

    var videoFrame = document.getElementById("videoFrame");
    videoFrame.src = "https://www.youtube.com/embed/" + videoId;
}

// Modalı kapatma fonksiyonu
function closeVideoModal() {
    var modal = document.getElementById("videoModal");
    modal.style.display = "none";

    var videoFrame = document.getElementById("videoFrame");
    videoFrame.src = "";
}
</script>

<?php include 'footer.php'; ?>

<style>
    /* Sayfanın tüm alanını kapsayacak şekilde flexbox ile ortalama */
/* Sayfanın arka planına resim ekleme */
/* Sayfanın arka planına resim ekleme */
/* Yatay kaydırmayı engelle */
/* Arkaplan resmi ayarları */
/* Sayfa düzeni */
body {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100vw;
    height: 100vh;
    overflow-x: hidden;
    margin: 0;
    padding: 0;
}

/* Videoların doğru yerleşmesini sağlamak */
.video-list {
    display: flex;
    flex-wrap: wrap; /* Flex elemanlarını sararak sağdan sola doğru dizilmelerini sağla */
    justify-content: flex-start; /* Sağdan sola doğru başlasın */
    gap: 5px; /* Kartlar arasına boşluk bırak */
    padding: 5px;
    overflow: hidden;
    max-width: 100%;
}

/* Video kartları */
.card {
    width: 100%;
    max-width: 300px; /* Kartların genişliğini sınırlayarak daha küçük yap */
    height: auto;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    background-color: rgba(255, 255, 255, 0.8); /* Kartın arka planını beyaz yaparak opaklık ekleyebilirsin */
    margin-bottom: 20px;
}

/* Kart içeriği */
.card-thumbnail {
    width: 100%;
    height: auto;
    max-width: 100%;
    border-radius: 8px;
}

/* Mobil uyumlu düzenlemeler */
@media (max-width: 768px) {
    .card {
        max-width: 90%;
        padding: 10px;
    }
}

@media (max-width: 480px) {
    .card {
        max-width: 95%;
        padding: 10px;
    }
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

/* Modal stilleri */
.modal {
    display: none; /* Başlangıçta modal gizli */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Modal arkaplanı */
    z-index: 1002;
    justify-content: center;
    align-items: center;
    overflow: auto;
    padding: 20px;
}

/* Modal içerik kutusu */
.modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    width: 80%;
    max-width: 900px; /* Modal genişliği */
    position: center;
}

/* Kapatma butonu */
.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 30px;
    font-weight: bold;
    color: #aaa;
    cursor: pointer;
}

/* İframe video */
#videoFrame {
    width: 100%;
    height: 400px; /* Video boyutu */
}

/* Modal içeriği için mobil uyumlu düzenlemeler */
@media (max-width: 768px) {
    /* Modal içerik kutusu */
    .modal-content {
        width: 90%;
        padding: 15px;
    }

    /* İframe video boyutunu daha küçük ekranlarda küçült */
    #videoFrame {
        height: 250px;
    }
}

/* Daha küçük ekranlar için */
@media (max-width: 480px) {
    /* Modal içerik kutusu */
    .modal-content {
        width: 95%;
        padding: 10px;
    }

    /* İframe video boyutunu küçült */
    #videoFrame {
        height: 200px;
    }

    /* Kapatma butonunun boyutunu küçült */
    .close {
        font-size: 24px;
    }
}

</style>
