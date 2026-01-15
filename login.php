<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вхід / Реєстрація — FishBoom</title>
        <link rel="icon" href="img/favicon/favicon.ico" type="image/png">
    <link rel="stylesheet" href="style.css">
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
                <a href="kontakti.php" class="nav-link">Контакти</a>
            </nav>
            <div class="user-actions">
                <a href="koshik.php"><i class="fas fa-shopping-cart"></i></a>
                <a href="login.php" class="active"><i class="fas fa-user"></i></a>
            </div>
        </div>
    </header>

    <main class="auth-page">
        <div class="auth-container">
            <div class="auth-card">
                <div class="auth-tabs">
                    <button class="tab-btn active" data-tab="login">Вхід</button>
                    <button class="tab-btn" data-tab="register">Реєстрація</button>
                </div>
                <form class="auth-form active" id="loginForm">
                    <div class="form-group">
                        <label for="login-email">Email або телефон</label>
                        <input type="text" id="login-email" placeholder="example@gmail.com" required>
                    </div>

                    <div class="form-group password-group">
                        <label for="login-password">Пароль</label>
                        <input type="password" id="login-password" placeholder="••••••••" required>
                        <button type="button" class="toggle-password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>

                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" id="remember">
                            <span>Запам'ятати мене</span>
                        </label>
                        <a href="#" class="forgot-password">Забули пароль?</a>
                    </div>

                    <button type="submit" class="btn btn-primary">Увійти</button>

                    <div class="social-login">
                        <p>або увійти через</p>
                        <div class="social-buttons">
                            <button type="button" class="btn-social google">
                                <i class="fab fa-google"></i>
                            </button>
                            <button type="button" class="btn-social facebook">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <form class="auth-form" id="registerForm">
                    <div class="form-group">
                        <label for="reg-name">Ім'я</label>
                        <input type="text" id="reg-name" placeholder="Іван" required>
                    </div>

                    <div class="form-group">
                        <label for="reg-email">Email</label>
                        <input type="email" id="reg-email" placeholder="example@gmail.com" required>
                    </div>

                    <div class="form-group">
                        <label for="reg-phone">Телефон</label>
                        <input type="tel" id="reg-phone" placeholder="+380 XX XXX XX XX" required>
                    </div>

                    <div class="form-group password-group">
                        <label for="reg-password">Пароль</label>
                        <input type="password" id="reg-password" placeholder="Мінімум 8 символів" required>
                        <button type="button" class="toggle-password">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>

                    <div class="form-group">
                        <label for="reg-password-confirm">Підтвердити пароль</label>
                        <input type="password" id="reg-password-confirm" placeholder="Повторіть пароль" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Зареєструватися</button>
                </form>
            </div>
        </div>
    </main>

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