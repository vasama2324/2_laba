<?php
    $conn = new PDO("mysql:host=localhost;dbname=screenshots", "user", "12345678");
    $sql = "SELECT i.* FROM images as i where i.is_available=true limit 8";
    $images = $conn->query($sql)->fetchAll();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Скриншоты</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="Logo.png" alt="Логотип" class="logo-image">
            <span>Скриншоты</span>
        </div>
        <div class="auth-buttons">
            <a href="#" id="openRegisterModal">Регистрация</a>
            <a href="#" id="openInModal">Вход</a>
        </div>
    </header>

    <section class="gallery-section">
        <div class="container">
            <h1>Август, 2024</h1>
            <button class="add-screenshot">+ Добавить скриншот</button>
            <div class="gallery-grid">

                <?php foreach ($images as $image):  ?>
                <div class="image-item">
                    <img src="<?php echo $image['filename'];?>" alt="Screenshot 1">
                    <p>Добавлено <?php $image['created_at'];?></p>
                </div>
                <?php endforeach; ?>

        </div>
        <button class="load-more">Показать еще</button>
        </section>

    <footer>
        <p>info@gmail.com</p>
        <a href="http://vk.com/kaktomasshelby" class="VK">Информация о разработчике</a>
    </footer>

    <!-- Модальное окно регистрации -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Регистрация</h2>
            <form action="#">
                <input type="text" placeholder="Ваше имя" required>
                <input type="email" placeholder="Email" required>
                <input type="text" placeholder="Мобильный телефон" required>
                <input type="password" placeholder="Пароль" required>
                <input type="password" placeholder="Повторите пароль" required>
                <label>
                    <input type="checkbox" required> Согласен на обработку персональных данных
                </label>
                <button type="submit" class="register-btn">Зарегистрироваться</button>
            </form>
        </div>
    </div>

    <!-- Модальное окно входа -->
    <div id="inModal" class="modal"> <!-- Изменен id для окна входа -->
        <div class="modal-content">
            <span class="close-btn in-close-btn">&times;</span> <!-- Добавлен уникальный класс для кнопки закрытия входа -->
            <h2>Вход</h2>
            <form action="#">
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Пароль" required>
                <button type="submit" class="in-btn">Вход</button>
            </form>
        </div>
    </div>

    <!-- Подключаем JavaScript файл -->
    <script src="BrainForLaba1.js"></script>
</body>
</html>
