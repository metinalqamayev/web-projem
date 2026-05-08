<?php
ini_set('session.cookie_lifetime', 0); 
session_start();

$user = isset($_POST['username']) ? $_POST['username'] : '';
$pass = isset($_POST['password']) ? $_POST['password'] : '';

$dogru_user = "b241210555@sakarya.edu.tr";
$dogru_pass = "b241210555";
$ogrenci_no = "B241210555";

if ($user === $dogru_user && $pass === $dogru_pass) {
    // Giriş Başarılı: Session oluştur
    $_SESSION['giris_yapti'] = true;
    $_SESSION['user_no'] = $ogrenci_no;

    // Kullanıcıyı başarıyla giriş yaptığına dair karşılayıp ana sayfaya gönderiyoruz
    echo "<script>
            alert('Hoşgeldiniz $ogrenci_no');
            window.location.href = 'index.php';
          </script>";
    exit();

} else {
    // Giriş Başarısız: Hata mesajıyla login sayfasına geri gönder
    header("Location: login.php?hata=1");
    exit();
}
?>
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giriş Başarılı</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <style>
            body { 
                background: var(--bg-deep); 
                color: white; 
                font-family: "Outfit", sans-serif; 
                display: flex; 
                align-items: center; 
                justify-content: center; 
                height: 100vh; 
                margin: 0; 
            }
            .success-box { 
                text-align: center; 
                background: var(--card-color); 
                padding: 60px; 
                border-radius: 30px; 
                border: 1px solid var(--accent); 
                box-shadow: 0 0 30px rgba(56, 189, 248, 0.2);
            }
            h1 { color: var(--accent); font-weight: 900; margin-bottom: 20px; }
            .btn-go { 
                display: inline-block;
                background: var(--accent); 
                color: #0f172a; 
                padding: 12px 30px; 
                text-decoration: none; 
                border-radius: 12px; 
                font-weight: bold; 
                transition: 0.3s;
            }
            .btn-go:hover { transform: translateY(-3px); box-shadow: 0 5px 15px rgba(56, 189, 248, 0.4); color: #0f172a; }
        </style>
    </head>
    <body>
        <div class="success-box">
            <h1>HOŞ GELDİNİZ</h1>
            <p class="lead">' . $ogrenci_no . '</p>
            <p class="text-secondary">Kimlik doğrulama işlemi başarıyla tamamlandı.</p><br>
            <a href="index.php" class="btn-go">Siteye Giriş Yap</a>
        </div>
    </body>
    </html>';
} else {
    // Hatalı giriş veya boş alan
    header("Location: login.php?hata=1");
    exit();
}
?>