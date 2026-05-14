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
    <title>Mesaj Özeti | Metin Algamayev</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" href="style.css">
    
    <style>
        
        body { display: flex; align-items: center; justify-content: center; min-height: 100vh; }
        .result-card { max-width: 600px; width: 100%; }
        .data-row { border-bottom: 1px solid #334155; padding: 10px 0; }
        .data-row:last-child { border-bottom: none; }
        .label { color: var(--accent); font-weight: bold; width: 120px; display: inline-block; }
    </style>
</head>
<body>

<div class="main-container result-card">
    <h2 class="header-title">Mesajınız Alındı</h2>
    
    <div class="text-start mb-4">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $name = htmlspecialchars($_POST['name'] ?? 'Belirtilmedi');
            $email = htmlspecialchars($_POST['email'] ?? 'Belirtilmedi');
            $phone = htmlspecialchars($_POST['phone'] ?? 'Belirtilmedi');
            $subject = htmlspecialchars($_POST['subject'] ?? 'Belirtilmedi');
            $message = htmlspecialchars($_POST['message'] ?? 'Belirtilmedi');

            echo "<div class='data-row'><span class='label'>Ad Soyad:</span> $name</div>";
            echo "<div class='data-row'><span class='label'>E-posta:</span> $email</div>";
            echo "<div class='data-row'><span class='label'>Telefon:</span> $phone</div>";
            echo "<div class='data-row'><span class='label'>Konu:</span> $subject</div>";
            echo "<div class='data-row'><span class='label'>Mesaj:</span><br><div class='mt-2 text-muted'>$message</div></div>";
        } else {
            echo "<div class='alert alert-warning text-center'>Doğrudan erişim engellendi. Lütfen formu kullanın.</div>";
        }
        ?>
    </div>
    
    <div class="text-center mt-4">
        <a href="index.php" class="btn-accent d-inline-block w-auto px-5" style="text-decoration: none;">Ana Sayfaya Dön</a>
    </div>
</div>

</body>
</html>