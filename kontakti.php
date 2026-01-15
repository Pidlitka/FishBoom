<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FishBoom — Рибний магазин</title>
   <link rel="stylesheet" href="style.css">
       <link rel="icon" href="img/favicon/favicon.ico" type="image/png"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="container header-content">
            <div class="logo">
                <a href="index.php"><i class="fas fa-fish"></i><span>FishBoom</span></a>
            </div>
            <div class="burger" id="burger">
                <i class="fas fa-bars"></i>
            </div>
            <nav class="nav" id="nav-menu">
                <a href="index.php" class="nav-link">Головна</a>
                <a href="magaz.php" class="nav-link">Магазин</a>
                <a href="kontakti.php" class="nav-link active">Контакти</a>
            </nav>
            <div class="user-actions">
                <a href="koshik.php"><i class="fas fa-shopping-cart"></i></a>
                <a href="login.php"><i class="fas fa-user"></i></a>
            </div>
        </div>
    </header>

    <section class="contacts" id="contacts">
        <div class="container">
            <h2 class="section-title">Контакти</h2>
            <div class="contacts-wrapper">
                <div class="contacts-info">
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <p><strong>Телефон доставки:</strong><br>
                           <a href="tel:+381111111111">(111) 111-11-11</a>
                        </p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-clock"></i>
                        <p><strong>Замовлення приймаються:</strong><br>
                           Щодня з 8:30 до 20:00
                        </p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><strong>Адреса:</strong><br>
                           вул. Незалежності, 36, Сміла, Черкаська область, 20700
                        </p>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <p><strong>Email:</strong><br>
                           <a href="mailto:info@fishboom.com">info@fishboom.com</a>
                        </p>
                    </div>

                    <div class="messenger-buttons">
                        <a href="#" class="btn-msg tg">
                            <i class="fab fa-telegram-plane"></i> Telegram
                        </a>
                        <a href="#" class="btn-msg vb">
                            <i class="fab fa-viber"></i> Viber
                        </a>
                    </div>
                </div>

                <div class="contacts-map">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4320.27004851743!2d31.881312289053376!3d49.232448022715396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d1410832158285%3A0xd5c64c05e633bac!2sFISH%20BOOM!5e0!3m2!1sen!2sua!4v1767944060141!5m2!1sen!2sua" 
                        width="600" 
                        height="450" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <nav class="footer-nav">
                    <a href="index.php">Про нас</a>
                    <a href="magaz.php">Магазин</a>
                    <a href="kontakti.php">Контакти</a>
                </nav>
            </div>
            <div class="footer-bottom">
                <div class="footer-brand">
                    <h2 class="footer-logo">FishBoom</h2>
                    <p class="copyright">© 2026 FishBoom. Всі права захищено.</p>
                </div>
                <div class="footer-socials">
                    <a href="#"><i class="fab fa-telegram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>