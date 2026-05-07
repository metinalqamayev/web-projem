<?php
session_start();

// Eğer giriş damgası yoksa login'e at
if (!isset($_SESSION['giris_yapti']) || $_SESSION['giris_yapti'] !== true) {
    header("Location: login.php");
    exit();
}
// BURADA BAŞKA HİÇBİR ŞEY YAZMASIN.
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkında | Metin Algamayev</title>
    <!-- Kütüphaneler -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap" rel="stylesheet">
    
    <!-- HARİCİ STİL DOSYASI -->
    <link rel="stylesheet" href="style.css">

    <style>
        /* Sadece Hakkında sayfasına özel Hero ve Label tasarımları */
        .hero-section { 
            padding: 100px 0; 
            background: linear-gradient(to bottom, #1e293b, #0f172a); 
            text-align: center; 
        }
        .hero-section h3 { font-weight: 900; font-size: 3.5rem; letter-spacing: 2px; }
        
        .section-label { 
            color: var(--accent); 
            text-transform: uppercase; 
            font-weight: 700; 
            letter-spacing: 2px; 
            display: block; 
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>

    <!-- Navigasyon Menüsü -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">B241210555</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="index.php">Hakkında</a>
                    <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                    <a class="nav-link" href="sehrim.php">Şehrim</a>
                    <a class="nav-link" href="takimimiz.php">Takımımız</a>
                    <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Tanıtım Bölümü (Hero) -->
    <div class="hero-section">
        <div class="container">
            <h3>METİN ALGAMAYEV</h3>
            <p class="lead text-info">Geleceğin Bilgisayar Mühendisi</p>
        </div>
    </div>

    <!-- Ana İçerik Kartı -->
    <div class="container mb-5">
        <div class="main-container" style="margin-top: -50px;"> <!-- main-card yerine ortak main-container kullanıldı -->
            <div class="row">
                <div class="col-md-7">
                    <span class="section-label">Kısa Bir Tanıtım</span>
                    <p class="fs-5">Merhaba, ben Metin. Sakarya Üniversitesi Bilgisayar Mühendisliği bölümünde eğitim görüyorum. Yazılım geliştirme ve karmaşık problemleri çözme tutkusuyla bu yola çıktım.</p>
                </div>
                <div class="col-md-5">
                    <span class="section-label">Vizyonum</span>
                    <p>Teknolojinin sunduğu imkanları kullanarak, global ölçekte fayda sağlayan projeler üretmek ve bilişim dünyasında iz bırakmak.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Alt Bilgi -->
    <footer>
        <p>&copy; 2026 Metin Algamayev - B241210555 <br> Web Teknolojileri Dersi Projesi</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>