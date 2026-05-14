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
    <title>İletişim | Metin Algamayev</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;500;700;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    
    
    <link rel="stylesheet" href="style.css">
    
    <style>
        body { 
            background-color: var(--bg-deep, #0f172a); 
            color: #ffffff; 
        }

        .form-label {
            color: #ffffff !important;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .custom-box { 
            background: rgba(30, 41, 59, 0.5); 
            padding: 15px; 
            border-radius: 12px; 
            border: 1px solid #334155; 
            color: #ffffff !important; 
        }
        
        .form-check-label {
            color: #e2e8f0 !important;
            cursor: pointer;
        }

        .btn-native { 
            background-color: #475569; 
            color: white; 
            border: none; 
            padding: 14px; 
            border-radius: 12px; 
            font-weight: bold; 
            width: 100%; 
            transition: 0.3s; 
        }
        .btn-native:hover { background-color: #64748b; color: white; }

        .btn-framework { 
            background-color: var(--accent, #38bdf8); 
            color: #0f172a; 
            border: none; 
            padding: 14px; 
            border-radius: 12px; 
            font-weight: bold; 
            width: 100%; 
            transition: 0.3s; 
        }
        .btn-framework:hover { opacity: 0.9; transform: translateY(-2px); }

        .form-control, .form-select {
            background-color: #1e293b !important;
            border: 1px solid #334155 !important;
            color: #ffffff !important;
        }
        .form-control::placeholder { color: #64748b; }
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
                <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
                <a class="nav-link active" href="iletisim.php">İletişim</a>
            </div>
        </div>
    </nav>

    <div class="container" id="app">
        <div class="main-container col-lg-9 mx-auto">
            <h2 class="header-title">İletişim Formu</h2>
            
            <form id="contactForm" action="gonder_iletisim.php" method="POST">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="form-label">Ad Soyad</label>
                        
                        <input type="text" name="name" class="form-control" id="name" v-model="formData.name" placeholder="Adınızı ve soyadınızı giriniz">
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">E-posta</label>
                        <input type="email" name="email" class="form-control" id="email" v-model="formData.email" placeholder="ornek@mail.com">
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label">Telefon</label>
                        <input type="text" name="phone" class="form-control" id="phone" v-model="formData.phone" @input="onlyNumber" placeholder="5xx xxx xx xx">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Konu</label>
                        <select name="subject" class="form-select" id="subject" v-model="formData.subject">
                            <option value="">Seçiniz</option>
                            <option value="Genel">Genel Soru</option>
                            <option value="Proje">Proje Teklifi</option>
                            <option value="GeriBildirim">Geri Bildirim</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Cinsiyet</label>
                        <div class="custom-box">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gM" value="Erkek" v-model="formData.gender">
                                <label class="form-check-label" for="gM">Erkek</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gF" value="Kadın" v-model="formData.gender">
                                <label class="form-check-label" for="gF">Kadın</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Mesaj Seçenekleri</label>
                        <div class="custom-box">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="urgent" id="urgent" v-model="formData.urgent">
                                <label class="form-check-label" for="urgent">Acil yanıt bekliyorum</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Mesajınız</label>
                        <textarea name="message" class="form-control" id="message" rows="3" v-model="formData.message" placeholder="Mesajınızı buraya yazınız..."></textarea>
                    </div>

                    <div class="col-md-6">
                        
                        <button type="button" class="btn btn-native" onclick="validateNativeJS()">Formu Temizle</button>
                    </div>
                    <div class="col-md-6">
                        
                        <button type="button" class="btn btn-framework" @click="validateVue">Mesajı Gönder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validateNativeJS() {
            if(confirm("Formu temizlemek istediğinize emin misiniz?")) {
                document.getElementById('contactForm').reset();
                location.reload(); // Sayfayı yenileyerek Vue tarafını da sıfırlar
            }
        }

        const { createApp } = Vue;
        createApp({
            data() {
                return {
                    formData: { name: '', email: '', phone: '', subject: '', gender: '', urgent: false, message: '' }
                }
            },
            methods: {
                onlyNumber() {
                    this.formData.phone = this.formData.phone.replace(/[^0-9]/g, '');
                },
                validateVue() {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if(!this.formData.name || !this.formData.subject || !this.formData.gender || !this.formData.message) {
                        alert("Lütfen eksik alanları doldurunuz!");
                    }
                    else if(!emailRegex.test(this.formData.email)) {
                        alert("Lütfen geçerli bir e-posta adresi giriniz!");
                    }
                    else if(this.formData.phone.length < 10) {
                        alert("Telefon numarası en az 10 haneli olmalıdır!");
                    }
                    else {
                        alert("Mesajınız iletiliyor...");
                        document.getElementById('contactForm').submit();
                    }
                }
            }
        }).mount('#app');
    </script>
</body>
</html>