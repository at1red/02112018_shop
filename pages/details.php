<!-- BEM - block element modificator -->
<!-- GULP -->
<!-- NPM - node package manager -->
<!-- CLI - comang line interface -->
<!-- 3.9.1 -->
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/details.css">
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">
    <title>Подробнее о товаре</title>
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
            <div class="menu-basket">
                <div class="menu__basket-icon"></div>
                <div class="menu__basket_active">5</div>
            </div>
            <div class="menu-item">
                <div class="menu-button">
                    <div class="button__stick stick-1"></div>
                    <div class="button__stick stick-2"></div>
                    <div class="button__stick stick-3"></div>
                </div>
                <div class="menu-navigation">
                    <div class="menu__logo"></div>
                    <a class="navigation__link" href="#">Женщинам</a>
                    <a class="navigation__link" href="#">Мужчинам</a>
                    <a class="navigation__link" href="#">Детям</a>
                    <a class="navigation__link" href="#">Новинки</a>
                    <a class="navigation__link" href="#">О нас</a>
                </div>
            </div>
        </div>
        <header class="header">
            <div class="header__flex">
                <div class="logo"></div>
                <nav class="navigation">
                    <a class="navigation__link" href="#">Женщинам</a>
                    <a class="navigation__link" href="#">Мужчинам</a>
                    <a class="navigation__link" href="#">Детям</a>
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
        <main class="details-main">
            <div class="breadcrumbs">
                <a href="" class="breadcrumbs__link">главная</a>
                <div class="breadcrumbs__stick">/</div>
                <a href="" class="breadcrumbs__link">мужчинам</a>
                <div class="breadcrumbs__stick">/</div>
                <a href="" class="breadcrumbs__link">обувь</a>
                <div class="breadcrumbs__stick">/</div>
                <a href="" class="breadcrumbs__link">кеды с полоской</a>
            </div>
            <div class="details">
                <div class="details-img">
                    <div class="details-img__size img-9"></div>
                </div>
                <div class="details-title">кеды с полоской</div>
                <div class="details-articule">Артикул: 385904</div>
                <div class="details-price">4500 руб.</div>
                <div class="details-text">
                    Отличные куды из водонепроницаемого материала. Отлично подходят для любой погоды.
                    Приятно сидят на ноге, стильные и комфортные
                </div>
                <div class="details-size">
                    <div class="size-text">размер</div>
                    <div class="size-list">
                        <div class="size__num">38</div>
                        <div class="size__num">39</div>
                        <div class="size__num">40</div>
                        <div class="size__num">41</div>
                        <div class="size__num">42</div>
                    </div>
                </div>
                <div class="details-button">добавить в корзину</div>

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
</body>
</html>