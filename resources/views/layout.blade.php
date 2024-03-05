<!DOCTYPE html>
<html lang="uz">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1" />
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#000">
    <meta name="msapplication-navbutton-color" content="#000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <title>Yangiliklar sayti</title>
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

                <div class="page-header__wrapper">
                    <ul class="page-header__menu reset-list">
                        @foreach (App\Models\Category::all() as $category)
                        <li class="page-header__menu-item">
                            <a href="{{route('category',$category)}}"
                            class="menu-link">{{$category->name}}</a>
                        </li>
                            
                        @endforeach

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
        
        <div class="wrapper">
            <main>
                <div class="container mb-50">
                    <div class="countries">
                        <div class="countries-list">
                            <div class="regions">Hududlar</div>
                            <ul class="list">
                                @foreach (App\Models\Region::all() as $region)
                                <li><a href="{{route('region',$region)}}">{{$region->name}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>


        @yield('content')





       </div>
    
    <script src="https://kun.uz/assets/fd2abdd1/jquery.min.js?v=1707575291"></script>
    <script src="https://kun.uz/assets/1a256e39/js/app.js?v=1707575291" version="1.1"></script>

   
</body>

</html>