<?php
session_start();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Girişi | Metin Algamayev</title>
    
    <!-- Harici Kütüphaneler -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap" rel="stylesheet">
    
   
    <link rel="stylesheet" href="style.css">

    <style>
        /* Login Sayfasına Özel Tasarım Dokunuşları */
        body { 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            min-height: 100vh; 
            margin: 0; 
            background-color: var(--bg-deep, #0f172a); 
        }

        .login-card { 
            background-color: var(--card-color, #1e293b); 
            border-radius: 25px; 
            padding: 45px; 
            width: 100%; 
            max-width: 420px; 
            border: 1px solid rgba(255, 255, 255, 0.05); 
            box-shadow: 0 25px 60px rgba(0,0,0,0.5); 
        }

        .header-title { 
            color: var(--accent, #38bdf8); 
            font-weight: 800; 
            text-align: center; 
            text-transform: uppercase; 
            margin-bottom: 30px; 
            letter-spacing: 1px;
            font-size: 1.8rem;
        }

        /* Form Etiketleri - Gri görünmemesi için beyaza sabitlendi */
        .form-label { 
            font-weight: 500; 
            margin-bottom: 8px; 
            color: #ffffff !important; 
        }

        .btn-login { 
            background-color: var(--accent, #38bdf8); 
            color: #0f172a; 
            border: none; 
            padding: 15px; 
            border-radius: 12px; 
            font-weight: 700; 
            width: 100%; 
            text-transform: uppercase;
            transition: 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275); 
            margin-top: 10px;
        }

        .btn-login:hover { 
            opacity: 0.9; 
            transform: translateY(-3px); 
            box-shadow: 0 10px 20px rgba(56, 189, 248, 0.3);
            color: #0f172a;
        }

        /* Hata Mesajı Tasarımı */
        .error-msg { 
            background: rgba(248, 113, 113, 0.1);
            color: #f87171; 
            padding: 12px;
            border-radius: 10px;
            font-size: 0.9rem; 
            text-align: center; 
            margin-bottom: 25px; 
            border: 1px solid rgba(248, 113, 113, 0.2);
            font-weight: 500;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2 class="header-title">Sistem Girişi</h2>
        
        
        <?php if(isset($_GET['hata'])): ?>
            <div class="error-msg">
                Geçersiz kimlik bilgileri!<br>Lütfen bilgilerinizi kontrol edin.
            </div>
        <?php endif; ?>

        <form action="login_kontrol.php" method="POST" onsubmit="return validateLogin()">
            <!-- Kullanıcı Adı / Öğrenci No -->
            <div class="mb-3">
                <label class="form-label">Kullanıcı Kimliği</label>
                <input type="text" name="username" id="username" class="form-control" 
                       placeholder="Örn: B241210555" autocomplete="off">
            </div>

            <!-- Şifre -->
            <div class="mb-4">
                <label class="form-label">Şifre</label>
                <input type="password" name="password" id="password" class="form-control" 
                       placeholder="••••••••">
            </div>

            <!-- Giriş Butonu -->
            <button type="submit" class="btn-login">Erişim Sağla</button>
        </form>
    </div>

    <script>
        
        function validateLogin() {
            const u = document.getElementById('username').value.trim();
            const p = document.getElementById('password').value.trim();
            
            if(!u || !p) { 
                alert("Hata: Kullanıcı adı ve şifre alanları boş bırakılamaz."); 
                return false; 
            }
            
            
            
            return true;
        }
    </script>

</body>
</html>