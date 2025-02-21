<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIBRIS BARIŞ HAREKATI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="header-container">
            <a href="index.php" class="logo">
                <img src="icon.png" width="60" height="60" alt="Site İkonu">
            </a>
            <div class="menu-icon" onclick="toggleSidebar()">&#9776;</div>
        </div>
    </header>

    <!-- Sidebar Menü -->
    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="toggleSidebar()">&times;</a>
        <a href="index.php">Anasayfa</a>
        <a href="tarihce.php">Tarihçe</a>
        <a href="youtube_videos.php">Videolar</a>
        <a href="mulakatlar.php">Mülakatlar</a>
        <a href="galeri.php">Galeri</a>
        <a href="kaynakca.php">Kaynakça</a>
        <a href="review.php">Görüş Ve Öneriler</a>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            if (sidebar.style.width === "250px") {
                sidebar.style.width = "0";
            } else {
                sidebar.style.width = "250px";
            }
        }
    </script>
</body>
</html>

<style>
/* Sidebar Stili */
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
    z-index: 1001; /* Sidebar'ın her zaman üstte olmasını sağla */
}

/* Diğer içerikler (card vb.) */
.card {
    position: relative; /* İçeriğin normal akışta olmasını sağla */
    z-index: 1; /* Diğer içerikler sidebar'dan altta olacak */
}

/* Sidebar içindeki bağlantılar */
.sidebar a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 18px;
    color: white;
    display: block;
    transition: 0.3s;
}

/* Sidebar bağlantıları hover efekti */
.sidebar a:hover {
    background-color: #4E4E51;
}

/* Kapatma butonunun stili */
.sidebar .closebtn {
    position: absolute;
    top: 10px;
    right: 250px;
    font-size: 30px;
    cursor: pointer;
    color: white;
}

/* Menü ikonunun stili */
/* Menü ikonunun stili */
.menu-icon {
    font-size: 30px;
    cursor: pointer;
    color: #4E4E51;
    margin-left: 1090px; /* Sola çekmek için */
}

</style>