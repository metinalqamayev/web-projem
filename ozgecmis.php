<?php
session_start();


if (!isset($_SESSION['giris_yapti']) || $_SESSION['giris_yapti'] !== true) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özgeçmiş | Metin Algamayev</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" href="style.css">

    <style>
        
        .page-header {
            padding: 80px 0 40px;
            background: linear-gradient(to bottom, #1e293b, #0f172a);
            text-align: center;
        }

        .cv-card {
            background: var(--card-color);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid #334155;
            height: 100%;
            transition: 0.3s;
        }
        .cv-card:hover { border-color: var(--accent); }

        .label-text {
            color: var(--accent);
            text-transform: uppercase;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 2px;
            display: block;
            margin-bottom: 25px;
        }

        
        .edu-item {
            position: relative;
            padding-left: 30px;
            margin-bottom: 35px;
            border-left: 2px solid #334155;
        }
        .edu-item::before {
            content: '';
            position: absolute;
            left: -6px;
            top: 5px;
            width: 10px;
            height: 10px;
            background: var(--accent);
            border-radius: 50%;
            box-shadow: 0 0 10px var(--accent);
        }
        .edu-item h3 { font-size: 1.4rem; font-weight: 700; margin-bottom: 5px; }
        .year-tag { 
            background: rgba(56, 189, 248, 0.1); 
            color: var(--accent); 
            padding: 4px 12px; 
            border-radius: 6px; 
            font-size: 0.8rem; 
            font-weight: bold; 
        }

        /* Dil Kartları */
        .lang-item {
            background: #0f172a;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border: 1px solid #334155;
        }
        .lang-code { color: var(--accent); font-weight: 800; font-size: 0.8rem; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">B241210555</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="index.php">Hakkında</a>
                    <a class="nav-link active" href="ozgecmis.php">Özgeçmiş</a>
                    <a class="nav-link" href="sehrim.php">Şehrim</a>
                    <a class="nav-link" href="takimimiz.php">Takımımız</a>
                    <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="page-header">
        <div class="container">
            <h3 class="display-5 fw-bold text-white">ÖZGEÇMİŞ</h3>
            <p class="text-info">Eğitim ve Yetkinliklerim</p>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row g-4">
            
            <div class="col-lg-8">
                <div class="cv-card">
                    <span class="label-text">Akademik Yolculuk</span>
                    <div class="edu-item">
                        <h3>Sakarya Üniversitesi</h3>
                        <p class="mb-2">Bilgisayar Mühendisliği Bölümü</p>
                        <span class="year-tag">Eğitim Devam Ediyor</span>
                    </div>
                    <div class="edu-item">
                        <h3>Bakü Razin Devlet Lisesi</h3>
                        <p class="mb-2">Lise Mezuniyeti | Azerbaycan</p>
                        <span class="year-tag">2024 Mezunu</span>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-4">
                <div class="cv-card">
                    <span class="label-text">Dil Yetkinlikleri</span>
                    <div class="lang-item">
                        <span>Azerbaycan Türkçesi</span>
                        <span class="lang-code">AZ</span>
                    </div>
                    <div class="lang-item">
                        <span>Türkçe</span>
                        <span class="lang-code">TR</span>
                    </div>
                    <div class="lang-item">
                        <span>İngilizce</span>
                        <span class="lang-code">EN</span>
                    </div>
                    <div class="lang-item">
                        <span>Rusça</span>
                        <span class="lang-code">RU</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Metin Algamayev - B241210555 <br> Web Teknolojileri Dersi Projesi</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>