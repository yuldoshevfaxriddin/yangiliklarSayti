@extends('layout')

@section('meta-data')
<title>category</title>
@endsection

@section('content')
    {{-- <div class="wrapper">
        <main>
            <div class="container">
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
                <div class="single-layout mb-0 pt-0">
                    <div class="single-layout__center sticky-content pr-20">
                        <div class="block-title mb-0 pt-10 pb-10 pl-15 bg-gray"><span class="text-uppercase">O‘zbekiston
                                yangiliklari</span></div>
                        <div class="top-news">
                            <div class="top-news__big">
                                <a class="big-news"
                                    href="https://kun.uz/news/2024/02/22/tashabbusli-budjetda-taklif-kiritish-bosqichi-yakunlandi-loyihada-nimalar-ozgargan"><span
                                        class="big-news__img"><img
                                            src="https://storage.kun.uz/source/thumbnails/_medium/10/YcLbRyGPzSFMaFJ1REY9N_Y9W1Yud_b0_medium.jpg" /></span><span
                                        class="big-news__content">
                                        <div class="news-meta"><span>14:20 / 22.02.2024</span></div><span
                                            class="big-news__title">“Tashabbusli budjet”da taklif kiritish bosqichi
                                            yakunlandi. Loyihada nimalar o‘zgargan?</span><span
                                            class="big-news__description"> 2024 yilda “Tashabbusli budjet”dagi loyihalarga
                                            fuqarolar o‘z nomida nechta sim-kartasi borligidan qat’i nazar faqat bitta ovoz
                                            bera oladi.</span>
                                    </span>
                                </a>
                            </div>
                            <div class="top-news__small-items">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="small-news"><a class="small-news__img"
                                                href="https://kun.uz/news/2024/02/21/toshkentda-ikkita-firma-uy-qurib-berish-aldovi-bilan-fuqarolarni-qariyb-27-mlrd-somga-chuv-tushirdi"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/WkjwRAEOnOX5yux3UToR-8bGJmWiuyQf_medium.jpg" /></a>
                                            <div class="small-news__content">
                                                <div class="news-meta"><span>15:57 / 21.02.2024</span></div><a
                                                    class="small-news__title"
                                                    href="https://kun.uz/news/2024/02/21/toshkentda-ikkita-firma-uy-qurib-berish-aldovi-bilan-fuqarolarni-qariyb-27-mlrd-somga-chuv-tushirdi">Toshkentda
                                                    ikkita firma uy qurib berish aldovi bilan fuqarolarni qariyb 27 mlrd
                                                    so‘mga chuv tushirdi</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="small-news"><a class="small-news__img"
                                                href="https://kun.uz/news/2024/02/20/buxoro-viloyati-prokurori-ozgardi"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/OIVGfV690KbVaiDXf-txMDRSt7gPTmRQ_medium.jpg" /></a>
                                            <div class="small-news__content">
                                                <div class="news-meta"><span>20:30 / 20.02.2024</span></div><a
                                                    class="small-news__title"
                                                    href="https://kun.uz/news/2024/02/20/buxoro-viloyati-prokurori-ozgardi">Buxoro
                                                    viloyati prokurori o‘zgardi</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="small-news"><a class="small-news__img"
                                                href="https://kun.uz/news/2024/02/20/umri-qisqa-bolgan-turkiston-muxtoriyati-uning-yetakchilari-taqdiri-qanday-kechgan"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/w4C-s8zoTPn2OJWANTF12tmDIC1htQhn_medium.jpg" /></a>
                                            <div class="small-news__content">
                                                <div class="news-meta"><span>19:42 / 20.02.2024</span></div><a
                                                    class="small-news__title"
                                                    href="https://kun.uz/news/2024/02/20/umri-qisqa-bolgan-turkiston-muxtoriyati-uning-yetakchilari-taqdiri-qanday-kechgan">Umri
                                                    qisqa bo‘lgan Turkiston muxtoriyati. Uning yetakchilari taqdiri qanday
                                                    kechgan?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="small-news"><a class="small-news__img"
                                                href="https://kun.uz/news/2024/02/20/oqlansamgina-adolat-tiklangan-boladi-sardor-kariyev"><img
                                                    src="https://storage.kun.uz/source/thumbnails/_medium/10/iechPrFzLVhpVypOjiobv-XrEWwit6wJ_medium.jpg" /></a>
                                            <div class="small-news__content">
                                                <div class="news-meta"><span>19:18 / 20.02.2024</span></div><a
                                                    class="small-news__title"
                                                    href="https://kun.uz/news/2024/02/20/oqlansamgina-adolat-tiklangan-boladi-sardor-kariyev">“Oqlansamgina
                                                    adolat tiklangan bo‘ladi” - Sardor Kariyev</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="news-list">
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/23/toshkentda-avtomobillar-harakatini-qisqartirishga-qaratilgan-loyiha-otkaziladi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/W0u43mlyES2U86fvFV2_r7Sq1FNt6mge_medium.jpg" /></a>
                                        <div class="news-meta"><span>08:20</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/23/toshkentda-avtomobillar-harakatini-qisqartirishga-qaratilgan-loyiha-otkaziladi">Toshkentda
                                            avtomobillar harakatini qisqartirishga qaratilgan loyiha o‘tkaziladi </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/23/ozbekistonda-aholini-chang-boroni-va-havo-ifloslanishidan-ogohlantirish-boshlanadi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/3NjMJflYFciOc78leQ3PGSox5Ma_d5Xh_medium.jpg" /></a>
                                        <div class="news-meta"><span>08:10</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/23/ozbekistonda-aholini-chang-boroni-va-havo-ifloslanishidan-ogohlantirish-boshlanadi">O‘zbekistonda
                                            aholini chang bo‘roni va havo ifloslanishidan ogohlantirish boshlanadi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/23/ozbekistonliklar-mart-oyida-necha-kun-dam-olishi-malum-boldi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/W8OCJiyZMiFKYDQxi_rkSU59CnXyAcfZ_medium.jpg" /></a>
                                        <div class="news-meta"><span>08:00</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/23/ozbekistonliklar-mart-oyida-necha-kun-dam-olishi-malum-boldi">O‘zbekistonliklar
                                            mart oyida necha kun dam olishi ma’lum bo‘ldi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/23/toshkentda-nosoz-svetofor-sabab-haydovchiga-kelgan-jarima-bekor-qilindi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/GkY8W0MZiXqGtCrqljyF-rBuKfE37FOO_medium.jpg" /></a>
                                        <div class="news-meta"><span>07:50</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/23/toshkentda-nosoz-svetofor-sabab-haydovchiga-kelgan-jarima-bekor-qilindi">Toshkentda
                                            nosoz svetofor sabab haydovchiga kelgan jarima bekor qilindi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/23/toshkent-havosining-iflosligi-boyicha-dunyoda-3-orinni-egalladi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/RDthgdVeoSguFFoJ3YOtguumR0Myv_Ag_medium.jpg" /></a>
                                        <div class="news-meta"><span>07:40</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/23/toshkent-havosining-iflosligi-boyicha-dunyoda-3-orinni-egalladi">Toshkent
                                            havosining iflosligi bo‘yicha dunyoda 3-o‘rinni egallab turibdi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/23/yonilgi-sarfi-yuqori-bolgan-eski-samolyotlar-sotilib-zamonaviy-va-tejamkor-havo-kemalari-olib-kelinadi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/lKO2BwxyqK_TaPeaXQWLvJoRg009dlkl_medium.jpg" /></a>
                                        <div class="news-meta"><span>07:30</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/23/yonilgi-sarfi-yuqori-bolgan-eski-samolyotlar-sotilib-zamonaviy-va-tejamkor-havo-kemalari-olib-kelinadi">Yonilg‘i
                                            sarfi yuqori bo‘lgan eski samolyotlar sotilib, zamonaviy va tejamkor havo
                                            kemalari olib kelinadi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/23/ozbekistonga-yanvarda-tijorat-maqsadida-qancha-chet-el-fuqarosi-kelgani-malum-qilindi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/gWhFMebY0wPv3If8JkV-FOD7DvIkTuOL_medium.jpg" /></a>
                                        <div class="news-meta"><span>07:20</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/23/ozbekistonga-yanvarda-tijorat-maqsadida-qancha-chet-el-fuqarosi-kelgani-malum-qilindi">O‘zbekistonga
                                            yanvarda tijorat maqsadida qancha chet el fuqarosi kelgani ma’lum qilindi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/23/tashabbusli-budjet-doirasidagi-loyihalar-ish-sifati-boyicha-rozilik-olinganidan-keyin-foydalanishga-qabul-qilinadi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/ps2MZsduQMptE2QOorpenvSxnwaNnyKa_medium.jpg" /></a>
                                        <div class="news-meta"><span>07:10</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/23/tashabbusli-budjet-doirasidagi-loyihalar-ish-sifati-boyicha-rozilik-olinganidan-keyin-foydalanishga-qabul-qilinadi">«Tashabbusli
                                            budjet» doirasidagi loyihalar ish sifati bo‘yicha rozilik olinganidan keyin
                                            foydalanishga qabul qilinadi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/23/2024-yilda-yashil-makon-umumilliy-loyihasi-doirasida-200-mln-daraxt-ekiladi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/bvsLSS6TFmU_JtqISYNYDxIoMm2ddNoq_medium.jpg" /></a>
                                        <div class="news-meta"><span>00:28</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/23/2024-yilda-yashil-makon-umumilliy-loyihasi-doirasida-200-mln-daraxt-ekiladi">2024-yilda
                                            “Yashil makon” umumilliy loyihasi doirasida 200 mln daraxt ekiladi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/23/yirik-shaharlarda-eski-mashinalarning-harakati-bosqichma-bosqich-cheklanadi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/pssSDb75WQSVIgZmizHFWDzwgiEWOZ6c_medium.jpg" /></a>
                                        <div class="news-meta"><span>00:10</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/23/yirik-shaharlarda-eski-mashinalarning-harakati-bosqichma-bosqich-cheklanadi">Yirik
                                            shaharlarda eski mashinalarning harakati bosqichma-bosqich cheklanadi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/toshkent-shahrida-1-martdan-tigiz-vaqt-oraliqlarida-yuk-mashinalari-harakati-taqiqlanadi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/QoKnjAb6T48Jmt60vrqeb6CDSp-POdJi_medium.jpg" /></a>
                                        <div class="news-meta"><span>22:49 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/toshkent-shahrida-1-martdan-tigiz-vaqt-oraliqlarida-yuk-mashinalari-harakati-taqiqlanadi">Toshkent
                                            shahrida 1 martdan tig‘iz vaqt oraliqlarida yuk mashinalari harakati
                                            taqiqlanadi </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/it-park-rezidentlariga-bosh-turgan-davlat-binolari-1-yilgacha-muddatga-tekin-foydalanishga-beriladi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/ofnia-VY-UG4CT_JEOCpH-LEG-afossF_medium.jpg" /></a>
                                        <div class="news-meta"><span>22:15 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/it-park-rezidentlariga-bosh-turgan-davlat-binolari-1-yilgacha-muddatga-tekin-foydalanishga-beriladi">IT-park
                                            rezidentlariga bo‘sh turgan davlat binolari 1 yilgacha muddatga tekin
                                            foydalanishga beriladi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/buxoro-namangan-urganch-va-andijon-aeroportlari-xususiy-boshqaruvga-berilib-modernizatsiya-qilinadi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/qbKOKXhgIfbhiU94wOz0_OV9BHRd58gw_medium.jpg" /></a>
                                        <div class="news-meta"><span>21:26 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/buxoro-namangan-urganch-va-andijon-aeroportlari-xususiy-boshqaruvga-berilib-modernizatsiya-qilinadi">Buxoro,
                                            Namangan, Urganch va Andijon aeroportlari xususiy boshqaruvga berilib,
                                            modernizatsiya qilinadi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/ozboshimchalik-bilan-qurilgan-uy-joylarga-nisbatan-mulk-huquqi-rasmiylashtirilishi-mumkin"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/5ptJcAEJ2dY5dWeLR_gsHPIeMkBtdnA0_medium.jpg" /></a>
                                        <div class="news-meta"><span>20:20 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/ozboshimchalik-bilan-qurilgan-uy-joylarga-nisbatan-mulk-huquqi-rasmiylashtirilishi-mumkin">O‘zboshimchalik
                                            bilan qurilgan uy-joylarga nisbatan mulk huquqi rasmiylashtirilishi mumkin</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/vazirlik-nufuzi-bir-shaxs-harakati-bilan-baholanmaydi-vazir-orinbosari-xorazmlik-pedofil-amaldor-ishi-haqida"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/B1QMQPQVpEp7WtE1kDJ-5NngiRN2EORs_medium.jpg" /></a>
                                        <div class="news-meta"><span>19:20 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/vazirlik-nufuzi-bir-shaxs-harakati-bilan-baholanmaydi-vazir-orinbosari-xorazmlik-pedofil-amaldor-ishi-haqida">“Vazirlik
                                            nufuzi bir shaxs harakati bilan baholanmaydi” – vazir o‘rinbosari xorazmlik
                                            pedofil amaldor ishi haqida</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/turkiyaning-ajet-aviakompaniyasi-ozbekistonga-parvoz-qilishga-ruxsat-oldi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/YYLfn8EtzV_cM39coFi6bUpF0Bd2klqe_medium.jpg" /></a>
                                        <div class="news-meta"><span>19:07 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/turkiyaning-ajet-aviakompaniyasi-ozbekistonga-parvoz-qilishga-ruxsat-oldi">Turkiyaning
                                            AJet aviakompaniyasi O‘zbekistonga parvoz qilishga ruxsat oldi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/ozbekiston-rossiyadan-gaz-olish-hajmini-tort-baravar-oshiradi-oav"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/chBlhBF8NLD5ntcvYOj9sfWnpcFKrAgw_medium.jpg" /></a>
                                        <div class="news-meta"><span>18:42 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/ozbekiston-rossiyadan-gaz-olish-hajmini-tort-baravar-oshiradi-oav">O‘zbekiston
                                            Rossiyadan gaz olish hajmini to‘rt baravar oshiradi – OAV </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/qozogiston-aviakompaniyasi-turkiston-samarqand-yonalishida-parvozlarni-yolga-qoyadi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/v5DRGZE-eS7gxvOV1SD1Qvc09OzbFIIK_medium.jpg" /></a>
                                        <div class="news-meta"><span>18:38 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/qozogiston-aviakompaniyasi-turkiston-samarqand-yonalishida-parvozlarni-yolga-qoyadi">Qozog‘iston
                                            aviakompaniyasi Turkiston-Samarqand yo‘nalishida parvozlarni yo‘lga qo‘yadi </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/ozbekiston-va-saudiya-arabistoni-ortasida-diplomatik-munosabatlar-ornatilganiga-32-yil-boldi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/AQ0PNt3XpJjqyV0lVqjP8P51JexoHaaX_medium.jpg" /></a>
                                        <div class="news-meta"><span>18:29 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/ozbekiston-va-saudiya-arabistoni-ortasida-diplomatik-munosabatlar-ornatilganiga-32-yil-boldi">O‘zbekiston
                                            va Saudiya Arabistoni o‘rtasida diplomatik munosabatlar o‘rnatilganiga 32 yil
                                            bo‘ldi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/sobiq-mxx-binosi-ornida-qiymati-100-mln-dollar-bolgan-mehmonxona-quriladi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/_fpSTvRHe1Ik20EHg1ucN1w7tOCtGzNn_medium.jpg" /></a>
                                        <div class="news-meta"><span>17:04 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/sobiq-mxx-binosi-ornida-qiymati-100-mln-dollar-bolgan-mehmonxona-quriladi">Sobiq
                                            MXX binosi o‘rnida qiymati 100 mln dollar bo‘lgan mehmonxona quriladi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/namanganda-ichimlik-va-oqova-suv-tariflari-oshiriladi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/Lx6Vd0N7DHpyL_HrvBI6ueTE1O28KVNL_medium.jpg" /></a>
                                        <div class="news-meta"><span>16:54 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/namanganda-ichimlik-va-oqova-suv-tariflari-oshiriladi">Namanganda
                                            ichimlik va oqova suv tariflari oshiriladi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/bino-va-inshootlarni-energiya-auditidan-otkazish-rejalashtirilmoqda"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/p1E6RzCzV-HeH06VJYXqlrqHv_v9LvW8_medium.jpg" /></a>
                                        <div class="news-meta"><span>16:49 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/bino-va-inshootlarni-energiya-auditidan-otkazish-rejalashtirilmoqda">Bino
                                            va inshootlarni energiya auditidan o‘tkazish rejalashtirilmoqda</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/jizzaxda-3-yoshli-bogcha-tarbiyalanuvchisi-ariqqa-tushib-ketib-vafot-etgani-boyicha-jinoyat-ishi-qozgatildi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/uTjT5iuDQEakgPcYKkn85v-f0ddS-x8O_medium.jpg" /></a>
                                        <div class="news-meta"><span>16:35 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/jizzaxda-3-yoshli-bogcha-tarbiyalanuvchisi-ariqqa-tushib-ketib-vafot-etgani-boyicha-jinoyat-ishi-qozgatildi">Jizzaxda
                                            3 yoshli bog‘cha tarbiyalanuvchisi ariqqa tushib ketib vafot etgani bo‘yicha
                                            jinoyat ishi qo‘zg‘atildi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/belgiya-elchisi-ozbekistondagi-missiyasini-yakunlayapti"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/1beYrzQvVh2fOnaXBsc5hjx_TN_Xec2x_medium.jpg" /></a>
                                        <div class="news-meta"><span>16:09 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/belgiya-elchisi-ozbekistondagi-missiyasini-yakunlayapti">Belgiya
                                            elchisi O‘zbekistondagi missiyasini yakunlayapti</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/xitoy-ozbekistonga-tez-yordam-uchun-elektromobillar-yetkazib-beradi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/qToXwbscuFge-HJDkOhVMQapw-ZJOMrn_medium.jpg" /></a>
                                        <div class="news-meta"><span>15:07 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/xitoy-ozbekistonga-tez-yordam-uchun-elektromobillar-yetkazib-beradi">Xitoy
                                            O‘zbekistonga tez yordam uchun elektromobillar yetkazib beradi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/nest-one-haqida-tarqatilgan-mish-mish-rad-etildi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/h4pqEGMc0z1sf1t96W3Btnkmvn0VCURc_medium.jpg" /></a>
                                        <div class="news-meta"><span>14:54 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/nest-one-haqida-tarqatilgan-mish-mish-rad-etildi">Nest
                                            One haqida tarqatilgan mish-mish rad etildi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/gazli-gaz-saqlash-omborining-sigimi-uch-barobarga-oshiriladi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/8j0dg5xBByFuBceigq0kDhOgu8yb7OQQ_medium.jpg" /></a>
                                        <div class="news-meta"><span>14:47 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/gazli-gaz-saqlash-omborining-sigimi-uch-barobarga-oshiriladi">Gazli
                                            gaz saqlash omborining sig‘imi uch barobarga oshiriladi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/tashabbusli-budjetda-taklif-kiritish-bosqichi-yakunlandi-loyihada-nimalar-ozgargan"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/YcLbRyGPzSFMaFJ1REY9N_Y9W1Yud_b0_medium.jpg" /></a>
                                        <div class="news-meta"><span>14:20 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/tashabbusli-budjetda-taklif-kiritish-bosqichi-yakunlandi-loyihada-nimalar-ozgargan">“Tashabbusli
                                            budjet”da taklif kiritish bosqichi yakunlandi. Loyihada nimalar o‘zgargan?</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/polsha-ozbekistondan-ishchi-kuchi-oqimini-bir-necha-barobar-oshirmoqchi"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/zdY3AhObLcbnoizSBqdKlbil-qC3PuFV_medium.jpg" /></a>
                                        <div class="news-meta"><span>13:07 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/polsha-ozbekistondan-ishchi-kuchi-oqimini-bir-necha-barobar-oshirmoqchi">Polsha
                                            O‘zbekistondan ishchi kuchi oqimini bir necha barobar oshirmoqchi</a>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-25 l-item">
                                    <div class="news"><a class="news__img"
                                            href="https://kun.uz/news/2024/02/22/pedagoglar-attestatsiyadan-otish-va-malaka-toifasini-olish-uchun-onlayn-ariza-topshirishi-mumkin"><img
                                                src="https://storage.kun.uz/source/thumbnails/_medium/10/jxxTw8o4x8D9nFKZqIJ1AqTS8q2LffP-_medium.jpg" /></a>
                                        <div class="news-meta"><span>12:34 / 22.02.2024</span></div><a class="news__title"
                                            href="https://kun.uz/news/2024/02/22/pedagoglar-attestatsiyadan-otish-va-malaka-toifasini-olish-uchun-onlayn-ariza-topshirishi-mumkin">Pedagoglar
                                            attestatsiyadan o‘tish va malaka toifasini olish uchun onlayn ariza topshirishi
                                            mumkin</a>
                                    </div>
                                </div>
                            </div>
                            <div class="load-more" style="display:none;">
                                <a href="https://kun.uz/news/category/uzbekiston?next=1708587262" class="load-more__link"
                                    id="lpagination">
                                    Ko`proq yangiliklar </a>
                            </div>

                        </div>
                    </div>
                    <div class="single-layout__right" id="last-newsl"
                        data='{"url":"\/news\/list?f=latest&l=5","title":"So\u2018nggi yangiliklar","sub_title":"Reklama","link_title":"Ko`proq yangiliklar","link":"\/news\/list","mb":true}'>
                    </div>

                </div>
                <div class="single-layout">
                    <div class="single-layout__center">
                        <div class='adv-wrapper' style='background-color:#fff;'>
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
                    </div>
                </div>
            </div>
        </main>

    </div> --}}
@endsection
