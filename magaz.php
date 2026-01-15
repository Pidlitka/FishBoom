<?php
include 'db.php';
$search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';
$sort = isset($_GET['sort']) ? $_GET['sort'] : 'newest';
$sql = "SELECT * FROM fishes WHERE 1=1";
if (!empty($search)) {
    $sql .= " AND name LIKE '%$search%'";
}
switch ($sort) {
    case 'price-asc':
        $sql .= " ORDER BY price ASC";
        break;
    case 'price-desc':
        $sql .= " ORDER BY price DESC";
        break;
    case 'name-asc':
        $sql .= " ORDER BY name ASC";
        break;
    default:
        $sql .= " ORDER BY created_at DESC";
        break;
}

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин — FishBoom</title>
      <link rel="icon" href="img/favicon/favicon.ico" type="image/png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="container header-content">
            <div class="logo">
                <a href="index.php">
                    <i class="fas fa-fish"></i>
                    <span>FishBoom</span>
                </a>
            </div>

            <div class="burger" id="burger">
                <i class="fas fa-bars"></i>
            </div>

            <nav class="nav" id="nav-menu">
                <a href="index.php" class="nav-link">Головна</a>
                <a href="magaz.php" class="nav-link active">Магазин</a>
                <a href="kontakti.php" class="nav-link">Контакти</a>
            </nav>

            <div class="user-actions">
                <a href="koshik.php" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">0</span>
                </a>
                <a href="login.php"><i class="fas fa-user"></i></a>
            </div>
        </div>
    </header>

<main class="shop-page">
    <div class="container">
        <h1 class="page-title">Магазин</h1>

        <form action="magaz.php" method="GET" id="filterForm">
            <div class="shop-toolbar">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" name="search" placeholder="Пошук риби..." 
                           id="searchInput" value="<?php echo htmlspecialchars($search); ?>">
                </div>

                <div class="filter-sort">
                    <div class="sort-select">
                        <select name="sort" id="sortSelect" onchange="document.getElementById('filterForm').submit()">
                            <option value="newest" <?php if($sort == 'newest') echo 'selected'; ?>>Спочатку нові</option>
                            <option value="price-asc" <?php if($sort == 'price-asc') echo 'selected'; ?>>Ціна: за зростанням</option>
                            <option value="price-desc" <?php if($sort == 'price-desc') echo 'selected'; ?>>Ціна: за спаданням</option>
                            <option value="name-asc" <?php if($sort == 'name-asc') echo 'selected'; ?>>Назва: А → Я</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>

        <div class="shop-grid" id="productGrid">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="img/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>">
                        </div>
                        <div class="product-info">
                            <h3 class="product-title"><?php echo $row['name']; ?></h3>
                            <p class="price"><?php echo number_format($row['price'], 0, '.', ' '); ?> грн/кг</p>
                            <button class="btn-add-to-cart" 
                                    data-id="<?php echo $row['id']; ?>" 
                                    data-name="<?php echo $row['name']; ?>" 
                                    data-price="<?php echo $row['price']; ?>">
                                До кошика
                            </button>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p class='no-results'>На жаль, за вашим запитом нічого не знайдено.</p>";
            }
            ?>
        </div>

        <div class="pagination">
            <button class="page-btn active">1</button>
            <button class="page-btn">2</button>
            <button class="page-btn">3</button>
            <button class="page-btn">→</button>
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

<?php
$conn->close();
?>