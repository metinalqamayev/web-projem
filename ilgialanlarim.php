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
    <title>İlgi Alanlarım | Metin Algamayev</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" href="style.css">

    <style>
        
        .hero-title { 
            font-size: 3rem; font-weight: 900; text-align: center; 
            letter-spacing: 4px; color: #fff; margin-bottom: 10px;
            text-shadow: 0 0 15px rgba(56, 189, 248, 0.4); 
        }
        .sub-hero { text-align: center; color: var(--accent); font-size: 1.2rem; margin-bottom: 50px; font-style: italic; font-weight: 500; }
        
        .movie-card { 
            background: #0f172a; transition: all 0.4s ease; border-radius: 15px; 
            overflow: hidden; display: block; text-decoration: none; border: 1px solid #334155; height: 100%; position: relative;
        }
        .movie-card:hover { transform: scale(1.05); border-color: var(--accent); box-shadow: 0 0 20px rgba(56, 189, 248, 0.2); }
        
        .favorite-card { border: 2px solid var(--accent) !important; box-shadow: 0 0 20px rgba(56, 189, 248, 0.3); transform: scale(1.02); }
        .favorite-card:hover { box-shadow: 0 0 30px rgba(56, 189, 248, 0.5); transform: scale(1.08) !important; }
        
        .favorite-badge {
            position: absolute; top: 15px; right: 15px; background: var(--accent);
            color: #0f172a; padding: 5px 15px; border-radius: 20px; font-weight: 800; font-size: 0.8rem; z-index: 10;
        }
        .movie-img { width: 100%; height: 450px; object-fit: cover; }
        .movie-info { padding: 15px; text-align: center; }
        .movie-info h5 { font-size: 1.1rem; font-weight: bold; color: #fff; margin: 0; }
        .movie-info small { display: block; margin-top: 5px; color: var(--accent); font-weight: bold; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">B241210555</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link" href="takimimiz.php">Takımımız</a>
                <a class="nav-link active" href="ilgialanlarim.php">İlgi Alanlarım</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="main-container">
            <h1 class="hero-title">THE WORLD IS YOURS</h1>
            <p class="sub-hero">Favori Film ve Dizilerim</p>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                
                <!-- 1. SCARFACE (FAVORİ) -->
                <div class="col">
                    <a href="https://www.themoviedb.org/movie/111-scarface" target="_blank" class="movie-card favorite-card">
                        <div class="favorite-badge">⭐ FAVORİ FİLMİM</div>
                        <img src="img/scarface.jpg" class="movie-img" alt="Scarface">
                        <div class="movie-info">
                            <h5 style="color: var(--accent); font-size: 1.3rem;">Scarface</h5>
                            <small>The World Is Yours →</small>
                        </div>
                    </a>
                </div>

                <!-- 2. THE GODFATHER -->
                <div class="col">
                    <a href="https://www.themoviedb.org/movie/238-the-godfather" target="_blank" class="movie-card">
                        <img src="img/godfather.jpg" class="movie-img" alt="The Godfather">
                        <div class="movie-info"><h5>The Godfather</h5><small>Detaylar →</small></div>
                    </a>
                </div>

                <!-- 3. BREAKING BAD -->
                <div class="col">
                    <a href="https://www.themoviedb.org/tv/1396-breaking-bad" target="_blank" class="movie-card">
                        <img src="img/breakingbad.jpg" class="movie-img" alt="Breaking Bad">
                        <div class="movie-info"><h5>Breaking Bad</h5><small>Detaylar →</small></div>
                    </a>
                </div>

                <!-- 4. JOKER -->
                <div class="col">
                    <a href="https://www.themoviedb.org/movie/475557-joker" target="_blank" class="movie-card">
                        <img src="img/joker.jpg" class="movie-img" alt="Joker">
                        <div class="movie-info"><h5>Joker</h5><small>Detaylar →</small></div>
                    </a>
                </div>

                <!-- 5. PULP FICTION -->
                <div class="col">
                    <a href="https://www.themoviedb.org/movie/680-pulp-fiction" target="_blank" class="movie-card">
                        <img src="img/pulpfiction.jpg" class="movie-img" alt="Pulp Fiction">
                        <div class="movie-info"><h5>Pulp Fiction</h5><small>Detaylar →</small></div>
                    </a>
                </div>

                <!-- 6. THE DARK KNIGHT -->
                <div class="col">
                    <a href="https://www.themoviedb.org/movie/155-the-dark-knight" target="_blank" class="movie-card">
                        <img src="img/darkknight.jpg" class="movie-img" alt="The Dark Knight">
                        <div class="movie-info"><h5>The Dark Knight</h5><small>Detaylar →</small></div>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <footer class="text-secondary text-center py-4" style="background: #0a0f1d; border-top: 1px solid #334155;">
        <p>&copy; 2026 Metin Algamayev - B241210555</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>