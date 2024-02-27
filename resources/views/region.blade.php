@extends('layout')


@section('meta-data')
<title>region</title>
@endsection

@section('content')
    {{-- <div class="wrapper">
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
                            <li class="active"><a href="https://kun.uz/region/samarqand">Samarqand</a></li>
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
                            <div class="top-news__big"><a class="big-news"
                                    href="https://kun.uz/news/2024/02/08/samarqandda-milliy-gvardiya-xodimi-va-advokat-pora-bilan-qolga-olindi"><span
                                        class="big-news__img"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/SAl7kJ3FI6gzW5neZjbIGniSBM3Of6Xy_medium.jpg" /></span><span
                                        class="big-news__content"><span class="big-news__title">Samarqandda Milliy gvardiya
                                            xodimi va advokat pora bilan qo‘lga olindi</span><span
                                            class="big-news__description">Milliy gvardiya xodimi fuqaroga nisbatan
                                            qo‘zg‘atilgan jinoyat ishini ijobiy hal qilib berish uchun 1 500 dollar, advokat
                                            esa qamoqqa olish ehtiyot chorasi qo‘llanishini bekor qilib berishni va’da qilib
                                            600 dollar olganda ushlangan. </span></span></a>
                            </div>
                        </div>
                        <div class="editor-choice">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="news">
                                        <div class="news__img p-relative"><a class="news__category"
                                                href="https://kun.uz/news/category/uzbekiston">O‘zbekiston</a><a
                                                href="https://kun.uz/news/2024/02/02/samarqandda-bozor-raisi-qamoqqa-olindi"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/oub0PCh0sbAKqYthOBfWVQdO5kyZ4hft_medium.jpg" /></a>
                                        </div>
                                        <div class="news-meta"><span>21:26 / 02.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/02/samarqandda-bozor-raisi-qamoqqa-olindi">Samarqandda
                                            bozor raisi qamoqqa olindi </a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="news">
                                        <div class="news__img p-relative"><a class="news__category"
                                                href="https://kun.uz/news/category/uzbekiston">O‘zbekiston</a><a
                                                href="https://kun.uz/news/2024/02/02/samarqandda-belgilanmagan-joyga-chiqindi-tashlagan-shaxs-jarimaga-tortildi"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/1PAWAzO62at2uuRItAY1aYBKkD5RaDcj_medium.jpg" /></a>
                                        </div>
                                        <div class="news-meta"><span>09:33 / 02.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/02/samarqandda-belgilanmagan-joyga-chiqindi-tashlagan-shaxs-jarimaga-tortildi">Samarqandda
                                            belgilanmagan joyga chiqindi tashlagan shaxs jarimaga tortildi</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="news">
                                        <div class="news__img p-relative"><a class="news__category"
                                                href="https://kun.uz/news/category/uzbekiston">O‘zbekiston</a><a
                                                href="https://kun.uz/news/2024/01/16/samarqandda-yuk-mashinasi-bilan-toqnashgan-yolovchi-avtobusi-agdarilib-ketdi"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/uXeuneWbX-79KAyLAoLH03qV7cgBFGXt_medium.jpg" /></a>
                                        </div>
                                        <div class="news-meta"><span>19:10 / 16.01.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/01/16/samarqandda-yuk-mashinasi-bilan-toqnashgan-yolovchi-avtobusi-agdarilib-ketdi">Urgutda
                                            yuk mashinasi bilan to‘qnashgan avtobus ag‘darilib ketdi</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="post-line">
                            <div class="line-block" id="news-list">
                                <div class="l-item">
                                    <div class="start-date">21 Fevral</div>
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">19:17</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/21/samarqanddagi-maktab-qurilishida-bir-qancha-qoidabuzarliklar-aniqlandi">Samarqanddagi
                                                maktab qurilishida bir qancha qoidabuzarliklar aniqlandi</a></div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/USvug_7YnauzkSFfVwKxyMzToZv6IdvP_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Obektda buyurtmachining texnik, loyihachining mualliflik, pudratchining
                                                    ichki nazorati olib borilmagani ta’kidlanmoqda. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">17:29</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/21/uch-viloyatda-noqonuniy-yer-sotish-holatlarining-oldi-olindi">Uch
                                                viloyatda noqonuniy yer sotish holatlarining oldi olindi</a></div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/K2WKAlyTJ2azTRV6PXEIrRDUvQZfQDcx_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Samarqand, Qashqadaryo va Jizzax viloyatlarida noqonuniy ravishda yer
                                                    maydonlarini sotmoqchi bo‘lgan shaxslar ushlandi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="start-date">20 Fevral</div>
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">17:30</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/20/tort-hududda-noqonuniy-yer-savdolariga-chek-qoyildi">To‘rt
                                                hududda noqonuniy yer savdolariga chek qo‘yildi</a></div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/onRSUVxCO8woMQB56U90sciQJlNVDXY5_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Surxondaryo, Samarqand, Farg‘ona va Namangan viloyatlarida yer maydonlari
                                                    savdosi bilan bog‘liq firibgarlik holatlari fosh etildi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="start-date">19 Fevral</div>
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">20:28</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/19/bolaning-otasi-bilan-gururlanishi-emas-ota-onaning-oz-farzandi-bilan-gururlanishi-muhimroq-erkinjon-turdimov">«Bolaning
                                                otasi bilan g‘ururlanishi emas, ota-onaning o‘z farzandi bilan g‘ururlanishi
                                                muhimroq» - Erkinjon Turdimov</a></div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/hUYmuG16AjeZsHEC-SJaMVUM-iP6VRFu_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Samarqand viloyat hokimi Erkinjon Turdimov maktabda ota-onalar oldida
                                                    chiqish qilar ekan, dabdabavozlikdan voz kechib, farzandlarga sharoit
                                                    yaratish haqida gapirdi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="start-date">18 Fevral</div>
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">11:56</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/18/jizzax-samarqand-va-buxoro-viloyatlarida-50-mingdan-oshiq-istemolchi-elektr-taminotidan-uzildi">Uchta
                                                viloyatda 50 mingdan oshiq iste’molchi elektr ta’minotidan uzildi</a></div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/SXMCq1JwrucwRQ7fncM7dsi1sibqEs3f_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Bir kun oldin kuchli shamol oqibatida Buxoro viloyatidagi 2 ta yuqori
                                                    kuchlanishli elektr uzatish tarmog‘ida nosozlik yuzaga kelgandi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="start-date">15 Fevral</div>
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">18:05</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/15/samarqand-yaqinida-m-39-avtomobil-yolidagi-xavf-bartaraf-etilib-qatnov-tiklandi">Samarqand
                                                yaqinida M-39 avtomobil yo‘lidagi xavf bartaraf etilib, qatnov tiklandi</a>
                                        </div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/R_8ubeFkcsEkX7B7_OFTJyFmSidQPMyt_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Samarqand viloyati IIB YHXB va FVB xodimlari sa’y-harakatlari bilan xavf
                                                    bartaraf etilgan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="start-date">14 Fevral</div>
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">18:19</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/14/m-39-xalqaro-avtomobil-yolida-yoriqlar-paydo-boldi-yuk-mashinalari-samarqand-shahrini-aylanib-otadi">M-39
                                                xalqaro avtomobil yo‘li yoqasida yoriqlar paydo bo‘ldi. Yuk mashinalari
                                                Samarqand shahrini aylanib o‘tadi</a></div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/clS-eTx8IFmH7PD6TbKvH502emFty7VG_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Cho‘pon ota tepaligi yaqinida yo‘l yengil mashinalar uchun bir tomonlama
                                                    tashkil etilgan. Janubiy viloyatlarga qatnaydigan yuk mashinalari esa
                                                    M-37 yo‘li orqali aylanib o‘tadi.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">17:49</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/14/samarqandda-davlat-kadastrlar-palatasi-filiali-xodimi-qolga-olindi">Samarqandda
                                                davlat kadastrlar palatasi filiali xodimi qo‘lga olindi</a></div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/xgnKGENl2r0somedqmb81_ZTN7motT4z_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Xodim fuqarolardan biriga uning yerini turar joy toifasidan noturar joy
                                                    toifasiga o‘tkazib berish uchun 19,2 mln so‘m talab qilib, pullarning
                                                    bir qismini olayotganda ushlangan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="start-date">11 Fevral</div>
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">19:42</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/11/oqdaryotumangaz-bolim-boshligi-pora-olayotganda-ushlandi">«Oqdaryotumangaz»
                                                bo‘lim boshlig‘i pora olayotganda ushlandi</a></div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/0pOKmoMFHeiOnQVkZJUKIcpB_XGGbqIo_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>DXX Samarqand viloyati boshqarmasi tomonidan poraxo‘rlikka qarshi
                                                    kurashish yo‘nalishidagi tadbirlar davom ettirilmoqda.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">09:24</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/11/samarqandda-elektr-va-gazdan-noqonuniy-foydalangan-istemolchilar-tizimga-5-mlrd-som-zarar-yetkazdi">Samarqandda
                                                elektr va gazdan noqonuniy foydalangan iste’molchilar tizimga 5 mlrd so‘m
                                                zarar yetkazdi</a></div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/op5WefC29lAQuQRJCo3B73Z39sIEJpDD_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Eng katta zararni gazdan noqonuniy foydalangan Paxtachi tumanidagi
                                                    issiqxona yetkazgan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="start-date">8 Fevral</div>
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">15:20</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/08/samarqandda-fermer-xojaligiga-qarashli-yerni-70-ming-dollarga-sotmoqchi-bolgan-shaxslar-qolga-olindi">Samarqandda
                                                fermer xo‘jaligiga qarashli yerni 70 ming dollarga sotmoqchi bo‘lgan
                                                shaxslar qo‘lga olindi</a></div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/_neacl1BfoelvniHLTxTluQ_wYLnPzEW_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Fermer ota va uning o‘g‘li kelishilgan puldan 35 ming dollar olayotganda
                                                    ushlangan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-item">
                                    <div class="line-post">
                                        <div class="lp-head"><span class="publish-date">10:41</span><a class="lp-title"
                                                href="https://kun.uz/news/2024/02/08/tez-yordam-xizmatining-3-ta-filialiga-30-ta-volkswagen-caddy-topshirildi">Tez
                                                yordam xizmatining 3 ta filialiga 30 ta Volkswagen Caddy topshirildi</a>
                                        </div>
                                        <div class="lp-body">
                                            <div class="post-thumb"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/p296XbAZJE3gRcFBURJXpfGWHMTjO1OZ_medium.jpg" />
                                            </div>
                                            <div class="post-desc">
                                                <p>Bu bilan tizimdagi Volkswagen Caddy tez tibbiy yordam mashinalari soni
                                                    800 dan oshgan. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="https://kun.uz/region/samarqand?next=1707370869" class="load-more-btn"
                            id="lpagination"><img class="loading" src="/assets/1a256e39/img/loading.svg" /><span
                                class="ml-10">Ko`proq yangiliklar</span></a>
                    </div>
                    <div class="col-md-3">

                        <div class="block-title mb-10"><span>Samarqand ayni damda</span></div>

                        <div class="province-slider swiper-container mb-20">
                            <div class="swiper-wrapper">
                                <div class="ps-item swiper-slide"><a
                                        href="https://kun.uz/news/2024/02/21/samarqanddagi-maktab-qurilishida-bir-qancha-qoidabuzarliklar-aniqlandi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/USvug_7YnauzkSFfVwKxyMzToZv6IdvP_medium.jpg" /></a>
                                </div>
                                <div class="ps-item swiper-slide"><a
                                        href="https://kun.uz/news/2024/02/21/uch-viloyatda-noqonuniy-yer-sotish-holatlarining-oldi-olindi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/K2WKAlyTJ2azTRV6PXEIrRDUvQZfQDcx_medium.jpg" /></a>
                                </div>
                                <div class="ps-item swiper-slide"><a
                                        href="https://kun.uz/news/2024/02/20/tort-hududda-noqonuniy-yer-savdolariga-chek-qoyildi"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/onRSUVxCO8woMQB56U90sciQJlNVDXY5_medium.jpg" /></a>
                                </div>
                                <div class="ps-item swiper-slide"><a
                                        href="https://kun.uz/news/2024/02/19/bolaning-otasi-bilan-gururlanishi-emas-ota-onaning-oz-farzandi-bilan-gururlanishi-muhimroq-erkinjon-turdimov"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/hUYmuG16AjeZsHEC-SJaMVUM-iP6VRFu_medium.jpg" /></a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <div class="block-title"><span>So‘nggi yangiliklar</span></div>
                        <div class="mb-25">
                            <a class="news-lenta"
                                href="https://kun.uz/news/2024/02/23/nova-c-xususiy-qonish-moduli-oy-yuzasiga-yetib-bordi">
                                <div class="news-meta"><span>09:00</span></div><span class="news-lenta__title"> Nova-C
                                    xususiy qo‘nish moduli Oy yuzasiga yetib bordi</span>
                            </a>

                            <a class="news-lenta"
                                href="https://kun.uz/news/2024/02/23/albaniya-italiya-orniga-muhojirlarni-qabul-qilishga-rozi-boldi">
                                <div class="news-meta"><span>08:40</span></div><span class="news-lenta__title"> Albaniya
                                    Italiya o‘rniga muhojirlarni qabul qilishga rozi bo‘ldi</span>
                            </a>

                            <a class="news-lenta"
                                href="https://kun.uz/news/2024/02/23/toshkentda-avtomobillar-harakatini-qisqartirishga-qaratilgan-loyiha-otkaziladi">
                                <div class="news-meta"><span>08:20</span></div><span class="news-lenta__title"> Toshkentda
                                    avtomobillar harakatini qisqartirishga qaratilgan loyiha o‘tkaziladi </span>
                            </a>

                            <a class="news-lenta"
                                href="https://kun.uz/news/2024/02/23/ozbekistonda-aholini-chang-boroni-va-havo-ifloslanishidan-ogohlantirish-boshlanadi">
                                <div class="news-meta"><span>08:10</span></div><span class="news-lenta__title">
                                    O‘zbekistonda aholini chang bo‘roni va havo ifloslanishidan ogohlantirish
                                    boshlanadi</span>
                            </a>

                            <a class="news-lenta"
                                href="https://kun.uz/news/2024/02/23/ozbekistonliklar-mart-oyida-necha-kun-dam-olishi-malum-boldi">
                                <div class="news-meta"><span>08:00</span></div><span class="news-lenta__title">
                                    O‘zbekistonliklar mart oyida necha kun dam olishi ma’lum bo‘ldi</span>
                            </a>

                            <a class="news-lenta"
                                href="https://kun.uz/news/2024/02/23/toshkentda-nosoz-svetofor-sabab-haydovchiga-kelgan-jarima-bekor-qilindi">
                                <div class="news-meta"><span>07:50</span></div><span class="news-lenta__title"> Toshkentda
                                    nosoz svetofor sabab haydovchiga kelgan jarima bekor qilindi</span>
                            </a>

                            <a class="news-lenta"
                                href="https://kun.uz/news/2024/02/23/toshkent-havosining-iflosligi-boyicha-dunyoda-3-orinni-egalladi">
                                <div class="news-meta"><span>07:40</span></div><span class="news-lenta__title"> Toshkent
                                    havosining iflosligi bo‘yicha dunyoda 3-o‘rinni egallab turibdi</span>
                            </a>

                            <a class="news-lenta"
                                href="https://kun.uz/news/2024/02/23/yonilgi-sarfi-yuqori-bolgan-eski-samolyotlar-sotilib-zamonaviy-va-tejamkor-havo-kemalari-olib-kelinadi">
                                <div class="news-meta"><span>07:30</span></div><span class="news-lenta__title"> Yonilg‘i
                                    sarfi yuqori bo‘lgan eski samolyotlar sotilib, zamonaviy va tejamkor havo kemalari olib
                                    kelinadi</span>
                            </a>

                        </div>

                    </div>
                </div>
            </div>
        </main>

    </div> --}}
@endsection
