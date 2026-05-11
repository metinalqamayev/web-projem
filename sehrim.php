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
    <title>Şehrim: Bakü | Metin Algamayev</title>
    <!-- Kütüphaneler -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
        body { 
            background: linear-gradient(rgba(15, 23, 42, 0.8), rgba(15, 23, 42, 0.8)), url('img/arkaplan.jpg') no-repeat center center fixed; 
            background-size: cover;
            font-family: 'Outfit', sans-serif;
            color: var(--text-light);
        }

        
        .main-container {
            background: rgba(30, 41, 59, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 30px;
            padding: 40px;
            margin: 40px auto;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px rgba(0,0,0,0.5);
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
            padding-bottom: 20px;
            border-bottom: 1px solid rgba(56, 189, 248, 0.2);
        }
        .section-header h2 { color: var(--accent); font-weight: 900; letter-spacing: 1px; }

        
        .city-img {
            width: 100%;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: transform 0.5s ease, border-color 0.3s;
            object-fit: cover;
        }
        .city-img:hover {
            transform: scale(1.02);
            border-color: var(--accent);
        }
        
        .img-large-box { height: 400px; overflow: hidden; border-radius: 20px; margin-bottom: 20px; }
        .img-modern-box { height: 250px; overflow: hidden; border-radius: 15px; margin-bottom: 15px; }

        
        .highlight-title { 
            color: var(--accent); 
            font-weight: 700; 
            font-size: 1.5rem; 
            display: block; 
            margin-top: 10px;
        }
        .text-justify { text-align: justify; line-height: 1.7; color: #cbd5e1; }
        
        
        footer { margin-top: 50px; padding: 30px; border-top: 1px solid rgba(255,255,255,0.1); }
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
                    <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                    <a class="nav-link active" href="sehrim.php">Şehrim</a>
                    <a class="nav-link" href="takimimiz.php">Takımımız</a>
                    <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="main-container">

            <!-- TARİHİ YAPILAR -->
            <div class="section-header">
                <h2>KADİM BAKÜ</h2>
                <p class="text-secondary small">Tarihin Taşa Yazıldığı Yer</p>
            </div>

            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <div class="img-large-box">
                        <img src="img/kizkulesi.jpg" class="city-img h-100" alt="Kız Kalesi">
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="highlight-title">Kız Kalesi</span>
                    <p class="text-justify">
                        Bakü’nün en gizemli anıtı olan Kız Kalesi, Hazar’ın kıyısında bin yıldır yükselmektedir. 12. yüzyıla tarihlenen bu UNESCO mirası, sadece bir savunma kalesi değil, aynı zamanda antik bir gözlemevi ve tapınak olarak tarihe tanıklık etmiştir.
                    </p>
                </div>
            </div>

            <div class="row mb-5 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6">
                    <div class="img-large-box">
                        <img src="img/icerisehir.jpg" class="city-img h-100" alt="İçerişehir">
                    </div>
                </div>
                <div class="col-lg-6">
                    <span class="highlight-title text-lg-end">İçerişehir</span>
                    <p class="text-justify">
                        Bakü'nün kalbi olan İçerişehir, dar sokakları ve Şirvanşahlar Sarayı ile zamanın durduğu bir Orta Çağ masalıdır. Modern gökdelenlerin ortasında yaşayan bu antik kent, şehrin ruhunu temsil eder.
                    </p>
                </div>
            </div>

            <!-- MODERN BAKÜ -->
            <div class="section-header mt-5">
                <h2>MODERN ESİNTİLER</h2>
                <p class="text-secondary small">Kafkasya'nın Parlayan Yıldızı</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="img-modern-box">
                        <img src="img/baku1.jpg" class="city-img h-100" alt="Bakü Bulvarı">
                    </div>
                    <h5 class="text-info fw-bold">Bakü Bulvarı</h5>
                    <p class="small text-secondary">Hazar'ın kıyısında dünyanın en uzun sahil şeritlerinden biri.</p>
                </div>
                <div class="col-md-4">
                    <div class="img-modern-box">
                        <img src="img/baku2.jpg" class="city-img h-100" alt="Alev Kuleleri">
                    </div>
                    <h5 class="text-info fw-bold">Alev Kuleleri</h5>
                    <p class="small text-secondary">Azerbaycan'ın modern ve ikonik simgesi olan üç dev kule.</p>
                </div>
                <div class="col-md-4">
                    <div class="img-modern-box">
                        <img src="img/baku3.jpg" class="city-img h-100" alt="Haydar Aliyev Merkezi">
                    </div>
                    <h5 class="text-info fw-bold">Haydar Aliyev Merkezi</h5>
                    <p class="small text-secondary">Zaha Hadid imzalı, fütüristik mimarinin başyapıtı.</p>
                </div>
            </div>

        </div>
    </div>

    <footer class="text-center">
        <p class="mb-0 text-secondary small">© 2026 Metin Algamayev - B241210555</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>