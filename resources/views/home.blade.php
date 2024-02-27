@extends('layout')

@section('meta-data')
    <title>O‘zbekiston va jahon yangiliklari, eng so‘nggi tezkor xabarlar, qiziqarli maqola, intervyu, foto va video
        materiallar - KUN.UZ</title>
    <meta name="description"
        content="O‘zbekistonda va dunyoda ro‘y berayotgan eng so‘nggi yangiliklar va xabarlar, jamiyat, iqtisodiyot, madaniyat, soprt, tenologiyalarga oid qiziqarli maqolalar. Mashhurlar bilan intervyular, barcha KUN.UZ saytida.">
    <meta name="keywords" content="Yangiliklar,xabarlar,eng so‘nggi yangiliklar, Dunyo Sport">
    <meta property="og:title"
        content="O‘zbekiston va jahon yangiliklari, eng so‘nggi tezkor xabarlar, qiziqarli maqola, intervyu, foto va video materiallar">
    <meta property="og:description"
        content="O‘zbekistonda va dunyoda ro‘y berayotgan eng so‘nggi yangiliklar va xabarlar, jamiyat, iqtisodiyot, madaniyat, soprt, tenologiyalarga oid qiziqarli maqolalar. Mashhurlar bilan intervyular">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kun.uz/">
    <meta property="og:site_name" content="Kun.uz">
@endsection

@section('content')
    <!-- <div class="wrapper">
                    <main>
                        <div class="container mb-50">
                            <div class="countries">
                                <div class="countries-list">
                                    <div class="regions">Hududlar</div>
                                    <ul class="list">
                                        <li><a href="https://kun.uz/region/toshkent">Toshkent sh.</a></li>
                                        <li><a href="https://kun.uz/region/qoraqalpogiston">Qoraqalpog‘iston</a></li>
                                        <li><a href="https://kun.uz/region/andijon">Andijon</a></li>
                                        <li><a href="https://kun.uz/region/fargona">Farg‘ona</a></li>
                                        <li><a href="https://kun.uz/region/namangan">Namangan</a></li>
                                        <li><a href="https://kun.uz/region/samarqand">Samarqand</a></li>
                                        <li><a href="https://kun.uz/region/buxoro">Buxoro</a></li>
                                        <li><a href="https://kun.uz/region/xorazm">Xorazm</a></li>
                                        <li><a href="https://kun.uz/region/surxondaryo">Surxondaryo</a></li>
                                        <li><a href="https://kun.uz/region/qashqadaryo">Qashqadaryo</a></li>
                                        <li><a href="https://kun.uz/region/jizzax">Jizzax</a></li>
                                        <li><a href="https://kun.uz/region/sirdaryo">Sirdaryo</a></li>
                                        <li><a href="https://kun.uz/region/toshkent-viloyati">Toshkent vil.</a></li>
                                        <li><a href="https://kun.uz/region/navoiy">Navoiy</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="top-news">
                                        <div class="top-news__big">
                                            <a class="big-news"
                                                href="https://kun.uz/news/2024/02/22/tashabbusli-budjetda-taklif-kiritish-bosqichi-yakunlandi-loyihada-nimalar-ozgargan">
                                                <span class="big-news__img"><img
                                                        src="https://storage.kun.uz/source/thumbnails/_medium/10/YcLbRyGPzSFMaFJ1REY9N_Y9W1Yud_b0_medium.jpg" /></span>
                                                <span class="big-news__content">
                                                    <div class="news-meta"><span>14:20 / 22.02.2024</span></div><span
                                                        class="big-news__title">“Tashabbusli budjet”da taklif kiritish bosqichi
                                                        yakunlandi. Loyihada nimalar o‘zgargan?</span>
                                                    <span class="big-news__description">2024 yilda “Tashabbusli budjet”dagi
                                                        loyihalarga fuqarolar o‘z nomida nechta sim-kartasi borligidan qat’i
                                                        nazar faqat bitta ovoz bera oladi.</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="top-news__small-items">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="small-news"><a class="small-news__img"
                                                            href="https://kun.uz/news/2024/02/21/toshkent-havosi-takliflardan-qachon-kompleks-reja-va-amaliy-harakatlarga-otiladi"><img
                                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/PFVoLLu9MxuV9MJU4ck4XKNif73tVM6s_medium.jpg" /></a>
                                                        <div class="small-news__content">
                                                            <div class="news-meta"><span>21:47 / 21.02.2024</span></div><a
                                                                class="small-news__title"
                                                                href="https://kun.uz/news/2024/02/21/toshkent-havosi-takliflardan-qachon-kompleks-reja-va-amaliy-harakatlarga-otiladi">Toshkent
                                                                havosi: “Takliflar”dan qachon kompleks reja va amaliy
                                                                harakatlarga o‘tiladi?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="small-news"><a class="small-news__img"
                                                            href="https://kun.uz/news/2024/02/21/universitet-ochganimizga-pushaymon-qildirishyapti-himoyasiz-xususiy-otmlar-dardini-kim-eshitadi"><img
                                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/KinlhJFGd0IRKWPKcqmZLKyQkfhumgPs_medium.jpg" /></a>
                                                        <div class="small-news__content">
                                                            <div class="news-meta"><span>15:04 / 21.02.2024</span></div><a
                                                                class="small-news__title"
                                                                href="https://kun.uz/news/2024/02/21/universitet-ochganimizga-pushaymon-qildirishyapti-himoyasiz-xususiy-otmlar-dardini-kim-eshitadi">“Universitet
                                                                ochganimizga pushaymon qildirishyapti” - Himoyasiz xususiy
                                                                OTMlar dardini kim eshitadi?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="small-news"><a class="small-news__img"
                                                            href="https://kun.uz/news/2024/02/21/yaxshi-niyatda-misqollab-yiggan-pulimizni-qaytarishsin-panorama-airways-ishi-yiriklashadigan-korinadi"><img
                                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/_dxicuOJw8nPMYFnUJpCiGe7sOxtAQu9_medium.jpg" /></a>
                                                        <div class="small-news__content">
                                                            <div class="news-meta"><span>15:01 / 21.02.2024</span></div><a
                                                                class="small-news__title"
                                                                href="https://kun.uz/news/2024/02/21/yaxshi-niyatda-misqollab-yiggan-pulimizni-qaytarishsin-panorama-airways-ishi-yiriklashadigan-korinadi"> “Yaxshi
                                                                niyatda misqollab yig‘gan pulimizni qaytarishsin” – Panorama
                                                                Airways ishi “yiriklashadigan” ko‘rinadi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="small-news"><a class="small-news__img"
                                                            href="https://kun.uz/news/2024/02/21/toshkent-jahonda-havosi-eng-iflos-shaharlar-royxatida-1-oringa-chiqdi"><img
                                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/_bEBFJMvBBD1puNMBRi8pcFjMWka2Xjw_medium.jpg" /></a>
                                                        <div class="small-news__content">
                                                            <div class="news-meta"><span>09:15 / 21.02.2024</span></div><a
                                                                class="small-news__title"
                                                                href="https://kun.uz/news/2024/02/21/toshkent-jahonda-havosi-eng-iflos-shaharlar-royxatida-1-oringa-chiqdi">Toshkent
                                                                jahonda havosi eng iflos shaharlar ro‘yxatida 1-o‘ringa
                                                                chiqdi</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="editor-choice">
                                        <div class="block-title"><a href="https://kun.uz/news/list?f=selected"><span>Muharrir
                                                    tanlovi</span></a><a class="link"
                                                href="https://kun.uz/news/list?f=selected">Barchasi</a></div>
                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="news">
                                                    <div class="news__img p-relative"><a
                                                            href="https://kun.uz/news/2024/02/20/maishiy-texnika-importida-yangi-talab-energosamaradorlik-testlari-kop-vaqt-va-xarajat-talab-qilyapti"><img
                                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/B8MDnB0xvp7iYt5OvEG88M0MDos5jfNi_medium.jpeg"></a>
                                                    </div>
                                                    <div class="news-meta"><span>18:05 / 20.02.2024</span></div><a
                                                        class="news__title"
                                                        href="https://kun.uz/news/2024/02/20/maishiy-texnika-importida-yangi-talab-energosamaradorlik-testlari-kop-vaqt-va-xarajat-talab-qilyapti">Maishiy
                                                        texnika importida yangi talab. Energosamaradorlik testlari ko‘p vaqt va
                                                        xarajat talab qilyapti</a>
                                                </div>
                                            </div>




                                            <div class="col-md-4">
                                                <div class="news">
                                                    <div class="news__img p-relative"><a
                                                            href="https://kun.uz/news/2024/02/19/bolalarimni-oqitish-uchun-mardikorlik-qilganman-ota"><img
                                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/IAjc6LcI2CW1mzhmKZnl0eS-K63_yOVW_medium.jpg"></a>
                                                    </div>
                                                    <div class="news-meta"><span>17:00 / 19.02.2024</span></div><a
                                                        class="news__title"
                                                        href="https://kun.uz/news/2024/02/19/bolalarimni-oqitish-uchun-mardikorlik-qilganman-ota">«Bolalarimni
                                                        o‘qitish uchun mardikorlik qilganman» - ota</a>
                                                </div>
                                            </div>




                                            <div class="col-md-4">
                                                <div class="news">
                                                    <div class="news__img p-relative"><a
                                                            href="https://kun.uz/news/2024/02/17/jurnalist-kim-jurnalistika-nima-uchun-kerak"><img
                                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/6cvgvLy71rVKrBGmV-g6q6INLQAxUnqp_medium.jpg"></a>
                                                    </div>
                                                    <div class="news-meta"><span>17:24 / 17.02.2024</span></div><a
                                                        class="news__title"
                                                        href="https://kun.uz/news/2024/02/17/jurnalist-kim-jurnalistika-nima-uchun-kerak">Jurnalist
                                                        – kim? Jurnalistika nima uchun kerak?</a>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <a href="https://kun.uz/news/list" class="block-title"><span>So‘nggi yangiliklar</span></a>
                                    <div class="mb-25">
                                        <a class="news-lenta"
                                            href="https://kun.uz/news/2024/02/23/albaniya-italiya-orniga-muhojirlarni-qabul-qilishga-rozi-boldi">
                                            <div class="news-meta"><span>08:40</span></div>
                                            <span class="news-lenta__title"> Albaniya Italiya o‘rniga muhojirlarni qabul
                                                qilishga rozi bo‘ldi</span>
                                        </a>
                                        <a class="news-lenta"
                                            href="https://kun.uz/news/2024/02/23/toshkentda-avtomobillar-harakatini-qisqartirishga-qaratilgan-loyiha-otkaziladi">
                                            <div class="news-meta"><span>08:20</span></div>
                                            <span class="news-lenta__title"> Toshkentda avtomobillar harakatini qisqartirishga
                                                qaratilgan loyiha o‘tkaziladi </span>
                                        </a>
                                        <a class="news-lenta"
                                            href="https://kun.uz/news/2024/02/23/ozbekistonda-aholini-chang-boroni-va-havo-ifloslanishidan-ogohlantirish-boshlanadi">
                                            <div class="news-meta"><span>08:10</span></div>
                                            <span class="news-lenta__title"> O‘zbekistonda aholini chang bo‘roni va havo
                                                ifloslanishidan ogohlantirish boshlanadi</span>
                                        </a>
                                        <a class="news-lenta"
                                            href="https://kun.uz/news/2024/02/23/ozbekistonliklar-mart-oyida-necha-kun-dam-olishi-malum-boldi">
                                            <div class="news-meta"><span>08:00</span></div>
                                            <span class="news-lenta__title"> O‘zbekistonliklar mart oyida necha kun dam olishi
                                                ma’lum bo‘ldi</span>
                                        </a>
                                        <a class="news-lenta"
                                            href="https://kun.uz/news/2024/02/23/toshkentda-nosoz-svetofor-sabab-haydovchiga-kelgan-jarima-bekor-qilindi">
                                            <div class="news-meta"><span>07:50</span></div>
                                            <span class="news-lenta__title"> Toshkentda nosoz svetofor sabab haydovchiga kelgan
                                                jarima bekor qilindi</span>
                                        </a>
                                        <a class="news-lenta"
                                            href="https://kun.uz/news/2024/02/23/toshkent-havosining-iflosligi-boyicha-dunyoda-3-orinni-egalladi">
                                            <div class="news-meta"><span>07:40</span></div>
                                            <span class="news-lenta__title"> Toshkent havosining iflosligi bo‘yicha dunyoda
                                                3-o‘rinni egallab turibdi</span>
                                        </a>
                                        <a class="news-lenta"
                                            href="https://kun.uz/news/2024/02/23/yonilgi-sarfi-yuqori-bolgan-eski-samolyotlar-sotilib-zamonaviy-va-tejamkor-havo-kemalari-olib-kelinadi">
                                            <div class="news-meta"><span>07:30</span></div>
                                            <span class="news-lenta__title"> Yonilg‘i sarfi yuqori bo‘lgan eski samolyotlar
                                                sotilib, zamonaviy va tejamkor havo kemalari olib kelinadi</span>
                                        </a>
                                        <a class="news-lenta"
                                            href="https://kun.uz/news/2024/02/23/ozbekistonga-yanvarda-tijorat-maqsadida-qancha-chet-el-fuqarosi-kelgani-malum-qilindi">
                                            <div class="news-meta"><span>07:20</span></div>
                                            <span class="news-lenta__title"> O‘zbekistonga yanvarda tijorat maqsadida qancha
                                                chet el fuqarosi kelgani ma’lum qilindi</span>
                                        </a>
                                    </div>
                                    <a href="https://kun.uz/news/list" class="main-btn-v2 w-100">Ko`proq yangiliklar</a>
                                </div>
                            </div>
                        </div>
                        <div class='adv-wrapper'>
                            <div class='container'>
                                <div id='adfox_162618030148559683'></div>
                                <script>
                                    window.Ya.adfoxCode.create({
                                        ownerId: 367651,
                                        containerId: 'adfox_162618030148559683',
                                        params: {
                                            pp: 'g',
                                            ps: 'eudb',
                                            p2: 'hhcg'
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="container" id="actual-news-content"
                            data='{"url":"\/news\/list?f=actual","title":"Dolzarb Xabarlar"}'></div>
                        <div class="interview">
                            <div class="container" id="interview-news-content"
                                data='{"url":"\/news\/list?f=interview","title":"Intervyu","btn_title":"Barchasi","img":"\/assets\/1a256e39\/img\/blue-right-arrow.svg","link":"\/interviews"}'>
                            </div>
                        </div>

                        <div class="container" id="day-theme-content-c"
                            data='{"url":"\/time\/news\/main","btn_title":"Barcha maqolalar"}'></div>
                        <div class="container" id="authored-news"
                            data='{"title_all":"Barchasi","url":"\/news\/list?f=authored","img":"\/assets\/1a256e39\/img\/blue-right-arrow.svg"}'>
                        </div>
                        <div class="business-block" id="business-news"
                            data='{"url":"\/news\/list?f=business","title":"Biznes","link_title":"Hamkorlik qilish","link":"\/page\/reklama","img":"\/assets\/1a256e39\/img\/blue-right-arrow.svg","logo":"\/assets\/1a256e39\/img\/kun-uz-logo.svg","max_card":7}'>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6" id="video-news-content"
                                    data='{"title":"Video yangiliklar","url":"\/news\/list?f=video&t=1","link":"\/news\/list?f=video","img":"\/assets\/1a256e39\/img\/blue-right-arrow.svg","btn_title":"Barcha maqolalar"}'>
                                </div>
                                <div class="col-md-6" id="photo-news-content"
                                    data='{"url":"\/news\/list?f=photo&t=1","link":"\/news\/list?f=photo","title":"fotoyangiliklar","img":"\/assets\/1a256e39\/img\/blue-right-arrow.svg","btn_title":"Barcha maqolalar"}'>
                                </div>
                            </div>
                        </div>
                        <div class='adv-wrapper' style='background-color:#fff;'>
                            <div class='container'>
                                <div id='adfox_162618030148559653'></div>
                                <script>
                                    window.Ya.adfoxCode.create({
                                        ownerId: 367651,
                                        containerId: 'adfox_162618030148559653',
                                        params: {
                                            pp: 'g',
                                            ps: 'eudb',
                                            p2: 'hhcg'
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                    </main>

                </div> -->
@endsection
