@extends('layout')

@section('meta-data')
    <title>single-news</title>
@endsection

@section('content')
    <div class="single-layout">
        <div class="single-layout__left" id="last-newsl"
            data='{"url":"\/news\/list?f=latest&l=5","title":"So\u2018nggi yangiliklar","mb":true}'></div>
        <div class="single-layout__center slc">
            <div class="single-header">
                <div class="single-header__meta">
                    <div class="date">{{ $new->created_at }}</div>
                    {{-- <div class="view">4357</div> --}}

                </div>
                <h1 class="single-header__title" style="margin-bottom:-0.1em;">{{ $new->title }}</h1>
            </div>
            <div class="single-content">
                <div class="main-img">
                    <img src="{{route('home').'/storage//'.$new->photo}}" />
                    {{-- <div class="main-img__caption">Foto: Videodan kadr</div> --}}
                </div>
                <p dir="auto">{{ $new->message }}</p>

            </div>

        </div>
    </div>

    <div class="single-layout">
        <div class="single-layout__center">

            <div class="block-title"><span>Boshqa yangiliklar</span></div>
            <div class="row">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-md-3 mb-25">
                        <div class="news">
                            <div class="news__img p-relative"><a class="news__category"
                                    href="{{ route('category', $news[$i]->category_id) }}">{{ App\Models\Category::find($news[$i]->category_id)->name }}</a><a
                                    href="{{ route('single-news', $news[$i]) }}">
                                <img src="{{route('home').'/storage//'.$news[0]->photo}}"></a>
                            </div>
                            <div class="news-meta"><span>{{ $news[$i]->created_at }}</span></div>
                            <a class="news__title" href="{{ route('single-news', $news[$i]) }}">{{ $news[$i]->title }}</a>
                        </div>
                    </div>
                @endfor


            </div>
            <div class="row">
               @for ($i = 4; $i < 8; $i++)
                   <div class="col-md-3 mb-25">
                       <div class="news">
                           <div class="news__img p-relative"><a class="news__category"
                                   href="{{ route('category', $news[$i]->category_id) }}">{{ App\Models\Category::find($news[$i]->category_id)->name }}</a><a
                                   href="{{ route('single-news', $news[$i]) }}">
                                   <img
                                       src="{{route('home').'/storage//'.$news[$i]->photo}}"></a>
                               {{-- <img src="{{image}}"></a> --}}
                           </div>
                           <div class="news-meta"><span>{{ $news[$i]->created_at }}</span></div>
                           <a class="news__title" href="{{ route('single-news', $news[$i]) }}">{{ $news[$i]->title }}</a>
                       </div>
                   </div>
               @endfor

           </div>
        </div>
    </div>

    <div class="single-layout">
        <div class="single-layout__left"></div>
        <div class="single-layout__center">
        </div>
        <div class="single-layout__right"></div>
    </div>
    </div>
    </main>
    </div>
@endsection
