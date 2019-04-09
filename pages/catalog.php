<!-- BEM - block element modificator -->
<!-- GULP -->
<!-- NPM - node package manager -->
<!-- CLI - comang line interface -->
<!-- 3.9.1 -->
<?php
    $template = [
        'section' => (isset($_GET['section'])) ? $_GET['section'] : 'man',
        'name' => (isset($_GET['data-name'])) ? $_GET['data-name'] : 'Мужчинам'
    ];



?>



<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/catalog.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <title>Каталог магазина</title>
</head>
<body>
    <div class="wrapper">
        <div class="mobile-menu">
            <div class="menu-login">
                <div class="menu__login-icon"></div>
                <div class="menu__login-text">
                    Привет, Алексей (<span class="inside-text inside-text_orange">выйти</span>)
                </div>
            </div>
            <a href="/pages/basket.php" class="menu-basket">
                <div class="menu__basket-icon"></div>
                <div class="menu__basket_active">5</div>
            </a>
            <div class="menu-item">
                <div class="menu-button">
                    <div class="button__stick stick-1"></div>
                    <div class="button__stick stick-2"></div>
                    <div class="button__stick stick-3"></div>
                </div>
                <div class="menu-navigation">
                    <div class="menu__logo"></div>
                    <a class="navigation__link" href="/pages/catalog.php?section=woman">Женщинам</a>
                    <a class="navigation__link" href="/pages/catalog.php?section=man">Мужчинам</a>
                    <a class="navigation__link" href="/pages/catalog.php?section=child">Детям</a>
                    <a class="navigation__link" href="#">Новинки</a>
                    <a class="navigation__link" href="#">О нас</a>
                </div>
            </div>
        </div>
        <header class="header">
            <div class="header__flex">
                <div class="logo"></div>
                <nav class="navigation">
                    <a class="navigation__link" href="/pages/catalog.php?section=woman">Женщинам</a>
                    <a class="navigation__link" href="/pages/catalog.php?section=man">Мужчинам</a>
                    <a class="navigation__link" href="/pages/catalog.php?section=child">Детям</a>
                    <a class="navigation__link" href="#">Новинки</a>
                    <a class="navigation__link" href="#">О нас</a>
                </nav>
            </div>
            <div class="header__flex"> 
                <div class="login">
                    <div class="login__pic"></div>
                    <div class="login__text">
                        Привет, Алексей (<span class="inside-text inside-text_orange">выйти</span>)
                    </div>
                </div>
                <div class="basket">
                    <div class="basket__pic"></div>
                    <div class="basket__text">
                        Корзина(5)
                    </div>
                </div>
            </div>
        </header>
        <main class="main">
            <div class="breadcrumbs">
                <a href="" class="breadcrumbs__link">главная</a>
                <div class="breadcrumbs__stick">/</div>
                <a href="" class="breadcrumbs__link"><?=$template['section']?></a>
            </div>
            <div class="title">
                <h1 class="name"><?=$template['section']?></h1>
                <p class="text">Все товары</p>
            </div>
            <div class="features">
                <div class="features__items">
                    <div class="features__stick"></div>
                    <div class="features__title">Категория</div>
                    <div class="features__dropdawn">
                        <span class="features__link">Верхняя одежда</span>
                        <span class="features__link">Обувь</span>
                        <span class="features__link">Джинсы</span>
                    </div>
                </div>
                <div class="features__items">
                    <div class="features__stick"></div>
                    <div class="features__title">Размер</div>
                    <div class="features__dropdawn">
                        <span class="features__link">0-1000 руб.</span>
                        <span class="features__link">1000-3000 руб.</span>
                        <span class="features__link">3000-6000 руб.</span>
                        <span class="features__link">6000-20000 руб.</span>
                    </div>
                </div>      
                <div class="features__items"> 
                    <div class="features__stick"></div>
                    <div class="features__title">Стоимость</div>
                    <div class="features__dropdawn">
                        <span class="features__link">0-1000 руб.</span>
                        <span class="features__link">1000-3000 руб.</span>
                        <span class="features__link">3000-6000 руб.</span>
                        <span class="features__link">6000-20000 руб.</span>
                    </div>
                </div>
            </div>
            
            <div class="content" data-section='<?=$template['section']?>' data-name='<?=$template['name']?>'>
                <div class="preload"></div>
                <!-- <div class="product">
                    <div class="product__img img1"></div>
                    <div class="product__name">Куртка синяя</div>
                    <div class="product__price">5400 руб.</div>
                </div> -->
            </div>
            <div class="pagination">
                <!-- <a href="#" class="pagination__num pagination__num_active">1</a>
                <a href="#" class="pagination__num">2</a>
                <a href="#" class="pagination__num">3</a>
                <a href="#" class="pagination__num">4</a> -->
            </div>
        </main>
        <footer class="footer">
            <div class="footer-navigation">
                <h3 class="footer__name">Коллекции</h3>
                <a href="#" class="footer__link">Женщинам (1725)</a>
                <a href="#" class="footer__link">Мужчинам (635)</a>
                <a href="#" class="footer__link">Детям (2514)</a>
                <a href="#" class="footer__link">Новинки (76)</a>
            </div>
            <div class="footer-navigation">
                <h3 class="footer__name">Магазин</h3>
                <a href="" class="footer__link">О нас</a>
                <a href="" class="footer__link">Доставка</a>
                <a href="" class="footer__link">Работай с нами</a>
                <a href="" class="footer__link">Контакты</a>
            </div>
            <div class="social">
                <div>
                    <h3 class="social__name">Мы в социальных сетях</h3>
                    <p class="social__text">Сайт разработан в inordic.ru</p>
                    <p class="social__text">2018 © Все права защищены</p>
                </div>
                <div class="social-item">
                    <a href="" class="social-item__link twitter"></a>
                    <a href="" class="social-item__link facebook"></a>
                    <a href="" class="social-item__link instagram"></a>
                </div>
            </div>
        </footer>
    </div>
<script src="/script/script_modules/mobile_menu.js"></script>
<script src="/script/catalog.js"></script>
<script src="/script/script_modules/dropdown.js"></script>
</body>
</html>