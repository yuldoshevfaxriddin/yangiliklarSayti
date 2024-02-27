<!DOCTYPE html>
<html lang="uz">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="https://kun.uz/favicon.ico?v=1" />
    <link rel="apple-touch-icon" sizes="180x180" href="https://kun.uz/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://kun.uz/favicon32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://kun.uz/favicon1616.png">
    <link rel="mask-icon" href="https://kun.uz/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="alternate" type="application/rss+xml" title="RSS feed" href="https://kun.uz/rss" />
    <meta name="author" content="Kun uz">
    <meta name="theme-color" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <meta name="google-site-verification" content="XRKGT7ifCTNLGtaaVKVLrQLffNnYmSRe5A6BvwCfTy4" />
    
    @yield('meta-data')
    
    <style media="screen">
        .adv-wrapper img {
            max-height: 100% !important;
        }
    </style>

    
    <link href="https://kun.uz/assets/1a256e39/styles/vendor.css?v=1707575291" rel="stylesheet">
    <link href="https://kun.uz/assets/1a256e39/styles/style.css?v=1707575291" rel="stylesheet">
    <link href="https://kun.uz/assets/1a256e39/styles/fonts.css?v=1707575291" rel="stylesheet">
    <script src="https://yastatic.net/pcode/adfox/loader.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="page-preloader">
        <div class="inner-loader"></div>
    </div>

    <div class="outer-wrapper">
        <header class="page-header">
            <div class="container">

                <div class="page-header__wrapper"><a href="https://kun.uz/" class="page-header__logo"><img
                            src="https://kun.uz/assets/1a256e39/img/kun-uz-logo.svg" alt="Logo"></a>
                    <ul class="page-header__menu reset-list">
                        <li class="page-header__menu-item"><a href="https://kun.uz/news/category/uzbekiston"
                                class="menu-link">O‘zbekiston</a></li>
                        <li class="page-header__menu-item"><a href="https://kun.uz/news/category/jahon"
                                class="menu-link">Jahon</a></li>
                        <li class="page-header__menu-item"><a href="https://kun.uz/news/category/iktisodiet"
                                class="menu-link">Iqtisodiyot</a></li>
                        <li class="page-header__menu-item"><a href="https://kun.uz/news/category/jamiyat"
                                class="menu-link">Jamiyat</a></li>
                        <li class="page-header__menu-item"><a href="https://kun.uz/news/category/tehnologia"
                                class="menu-link">Fan-texnika</a></li>
                        <li class="page-header__menu-item"><a href="https://kun.uz/news/category/sport"
                                class="menu-link">Sport</a></li>
                        <li class="page-header__menu-item"><a href="https://kun.uz/news/category/nuqtai-nazar"
                                class="menu-link">Nuqtayi nazar</a></li>
                        <li class="page-header__menu-item"><a href="https://kun.uz/news/audio/list"
                                class="menu-link">Audio</a></li>
                    </ul>
                    <div class="page-header__search-block">
                        <form action="/news/search" method="get">
                            <div class="form-group"><button class="search-button"></button><input type="text"
                                    id="search-input" name="q" value="" placeholder="Qidiruv" required="true"></div>
                        </form>
                    </div>
                    <div class="page-header__options">
                        <div class="menu-btn"></div>
                        <div class="lang-wrapper">
                            <div class="lang-block">
                                <div class="lang-toggle">
                                    <div class="lang-current">O'zbekcha</div>
                                </div>
                                <div class="lang-list">
                                    <div class="lang-block"><a class="lang-link"
                                            href="https://kun.uz/changelang/kr?c=%2Fkr%2F">Ўзбекча</a></div>
                                    <div class="lang-block"><a class="lang-link"
                                            href="https://kun.uz/changelang/ru?c=%2Fru%2F">Русский</a></div>
                                    <div class="lang-block"><a class="lang-link"
                                            href="https://kun.uz/changelang/en?c=%2Fen%2F">English</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-search"></div>
                        <div class="profile"></div>
                    </div>
                </div>
            </div>
        </header>
        
        @yield('content')


        <footer class="page-footer">

            <div class="page-footer__bottom">
                <div class="footer-menu-list">
                    <div class="container space-between">
                        <ul class="footer-menu reset-list">
                            <li class="footer-menu__item"><a href="https://kun.uz/page/about">Sayt haqida</a>
                            </li>
                            <li class="footer-menu__item"><a href="https://kun.uz/news/rss">RSS</a>
                            </li>
                            <li class="footer-menu__item"><a href="https://kun.uz/contact">Aloqa</a>
                            </li>
                            <li class="footer-menu__item"><a href="https://kun.uz/page/reklama">Reklama</a>
                            </li>
                            <li class="footer-menu__item"><a href="https://kun.uz/time/news">Kun mavzulari</a></li>
                            <li class="footer-menu__item"><a href="https://kun.uz/our-team">Kun.uz jamoasi</a>
                            </li>
                        </ul><a class="d-flex" href="https://kun.uz/page/privacy-18"><img
                                src="https://kun.uz/assets/1a256e39/img/18plus-v2.svg"></a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container space-between">
                        <div class="footer-text"> “KUN.UZ” saytida eʼlon qilingan materiallardan nusxa koʻchirish,
                            tarqatish va boshqa shakllarda foydalanish faqat tahririyat yozma roziligi bilan amalga
                            oshirilishi mumkin.<br />Guvohnoma: №0987. Berilgan sanasi: 22.06.2015-yil. Muassis: “WEB
                            EXPERT” MCHJ. Tahririyat manzili: 100043, Toshkent shahri, K. Yormatov koʻchasi, 12-uy.
                            Elektron manzil: info@kun.uz.<br />Saytda eʼlon qilinayotgan mualliflik maqolalarida
                            keltirilgan fikrlar muallifga tegishli va ular Kun.uz tahririyati nuqtayi nazarini ifoda
                            etmasligi mumkin.<br />Ⓣ - maqola va materiallarda qo‘yilgan mazkur belgi ularning tijorat
                            va reklama huquqlari asosida eʼlon qilinganligini bildiradi. </div>
                        <ul class="social-items reset-list">
                            <div class="social-item"><a href="https://www.youtube.com/channel/UCVPst_iSyaVYpuOP4ogRhlw"
                                    target="_blank"><img src="https://kun.uz/assets/1a256e39/img/social-youtube.svg"></a></div>
                            <div class="social-item"><a href="https://telegram.me/kunuzofficial" target="_blank"><img
                                        src="https://kun.uz/assets/1a256e39/img/social-telegram.svg"></a></div>
                            <div class="social-item"><a href="https://www.facebook.com/kunuznews/" target="_blank"><img
                                        src="https://kun.uz/assets/1a256e39/img/social-facebook.svg"></a></div>
                            <div class="social-item"><a href="https://twitter.com/KunUzNews" target="_blank"><img
                                        src="https://kun.uz/assets/1a256e39/img/social-twitter.svg"></a></div>
                            <div class="social-item"><a href="https://www.instagram.com/kun.uz" target="_blank"><img
                                        src="https://kun.uz/assets/1a256e39/img/social-instagram.svg"></a></div>
                            <div class="social-item"><a href="https://kun.uz/news/rss" target="_blank"><img
                                        src="https://kun.uz/assets/1a256e39/img/social-rss.svg"></a></div>
                        </ul>
                    </div>
                </div>
            </div>
        </footer><a class="cd-top js-cd-top cd-top--fade-out" href="#0">Top</a>
    </div>
    
    <script src="https://kun.uz/assets/fd2abdd1/jquery.min.js?v=1707575291"></script>
    <script src="https://kun.uz/assets/1a256e39/js/app.js?v=1707575291" version="1.1"></script>
    <div id="adfox_165028636255075108"></div>
   
</body>

</html>