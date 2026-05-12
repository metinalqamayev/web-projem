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
    <title>Takımımız: Karabağ FK | Metin Algamayev</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
        body { 
            background-color: var(--bg-deep, #0f172a);
            color: #ffffff; 
            font-family: 'Outfit', sans-serif; 
        }
        
        .main-container { 
            background-color: var(--card-color, #1e293b); 
            border-radius: 30px; 
            padding: 50px; 
            margin: 40px auto; 
            border: 1px solid #334155; 
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
        }

        .header-title {
            color: #ffffff;
            font-weight: 900;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 3px;
            margin-bottom: 40px;
            border-bottom: 2px solid var(--accent, #38bdf8);
            display: block;
            padding-bottom: 15px;
        }

        .img-team-main {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 20px;
            border: 1px solid rgba(56, 189, 248, 0.3);
            box-shadow: 0 15px 35px rgba(0,0,0,0.6);
            margin-bottom: 40px;
        }

        .content-text { 
            text-align: justify; 
            line-height: 1.9; 
            color: #e2e8f0; 
            font-size: 1.1rem; 
        }
        
        .highlight-accent { 
            color: var(--accent, #38bdf8); 
            font-weight: 700; 
            font-size: 1.6rem; 
            display: block; 
            margin-bottom: 15px; 
        }

        
        .stats-section {
            background: #0f172a;
            border-radius: 25px;
            padding: 40px;
            margin-top: 50px;
            border: 1px solid #334155;
            position: relative;
            overflow: hidden;
        }
        
        
        .table { 
            --bs-table-bg: transparent; 
            color: #ffffff !important; 
            border-color: #334155; 
        }
        
        .table thead { 
            background: var(--accent, #38bdf8); 
        }
        
        .table thead th { 
            color: #0f172a !important; 
            border: none; 
            text-transform: uppercase; 
            font-weight: 800;
        }
        
        .table tbody tr td { 
            color: #ffffff !important; 
            border-color: #334155; 
            padding: 15px; 
        }
        
        .stat-label { 
            color: var(--accent, #38bdf8) !important; 
            font-weight: bold; 
        }

        footer { margin-top: 60px; padding: 40px 0; border-top: 1px solid #334155; background: #0a0f1d; }
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
                    <a class="nav-link" href="sehrim.php">Şehrim</a>
                    <a class="nav-link active" href="takimimiz.php">Takımımız</a>
                    <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="main-container">
            <h1 class="header-title">Karabağ Futbol Kulübü</h1>

            <div class="row">
                <div class="col-12">
                    <img src="img/ka.jpg" class="img-team-main" alt="Karabağ FK Takım Fotoğrafı">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-12">
                    <span class="highlight-accent">Kafkasya'nın Gururu ve Direnişin Simgesi</span>
                    <p class="content-text">
                        Karabağ FK, Azerbaycan futbolunun en köklü ve en anlamlı kulübüdür. 1951 yılında kurulan kulüp, Ağdam şehrini temsil etmektedir. 1993 yılında yaşanan işgal sebebiyle <strong>"Mülteci Takım"</strong> unvanını alan Karabağ, mücadelesini hiçbir zaman bırakmamış ve azmin simgesi olmuştur. Kulübün bayrağındaki atlar, Karabağ bölgesinin meşhur atlarını ve özgürlük ruhunu temsil eder.
                    </p>
                    
                    <p class="content-text mt-4">
                        "Kafkasya'nın Real Madrid'i" olarak anılan kulüp, <strong>Gurban Gurbanov</strong> yönetiminde yakaladığı istikrarla Avrupa futbolunda adından sıkça söz ettirmektedir. Şampiyonlar Ligi gruplarına kalan ilk Azerbaycan takımı olma unvanını elinde bulunduran Karabağ, her yıl Avrupa kupalarında dev bütçeli takımlara karşı sergilediği başabaş mücadele ile takdir toplamaktadır.
                    </p>
                </div>
            </div>

            
            <div class="stats-section">
                <h3 class="text-center mb-4 fw-bold" style="color: var(--accent);">Kurumsal Başarılar ve Rekorlar</h3>
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col" style="border-radius: 10px 0 0 0;">Başarı Türü</th>
                                <th scope="col" style="border-radius: 0 10px 0 0;">Detaylı Bilgi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="stat-label">Azerbaycan Premyer Ligi</td>
                                <td>11 Kez Şampiyon (Ülke Rekoru)</td>
                            </tr>
                            <tr>
                                <td class="stat-label">Azerbaycan Kupası</td>
                                <td>7 Kez Şampiyonluk Sevinci</td>
                            </tr>
                            <tr>
                                <td class="stat-label">Avrupa Sahnesi</td>
                                <td>Şampiyonlar Ligi Gruplarına Kalan İlk Azerbaycan Takımı</td>
                            </tr>
                            <tr>
                                <td class="stat-label">Uluslararası Unvan</td>
                                <td>Kafkasya'nın En Başarılı Futbol Organizasyonu</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <p class="mb-1 text-secondary">© 2026 Metin Algamayev - B241210555</p>
        <p class="small text-muted">Web Teknolojileri Dersi Proje Ödevi</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>