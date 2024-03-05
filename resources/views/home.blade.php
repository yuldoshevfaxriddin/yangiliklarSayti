@extends('layout')

@section('meta-data')
    
@endsection

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="top-news">
                <div class="top-news__big">
                    <a class="big-news" href="{{ route('single-news', $news[0]) }}">
                        <span class="big-news__img"><img
                                src="{{route('home').'/storage//'.$news[0]->photo}}" /></span>
                        <span class="big-news__content">
                            <div class="news-meta">
                                <span>{{ $news[0]->created_at }}</span>
                            </div><span class="big-news__title">{{ $news[0]->title }}
                        </span>
                            <span class="big-news__description">{{ $news[0]->message }}</span>
                        </span>
                    </a>
                </div>

                <div class="top-news__small-items">
                    <div class="row">
                        @for ($i = 1; $i < 5; $i++)
                            <div class="col-md-6">
                                <div class="small-news"><a class="small-news__img"
                                        href="{{route('single-news',$news[$i])}}"><img
                                            src="{{route('home').'/storage//'.$news[$i]->photo}}" /></a>
                                    <div class="small-news__content">
                                        <div class="news-meta">
                                            <span>{{ $news[$i]->created_at }}</span>
                                        </div>
                                        <a class="small-news__title"
                                            href="{{ route('single-news', $news[$i]) }}">{{ $news[$i]->title }}</a>
                                    </div>
                                </div>
                            </div>
                        @endfor

                    </div>
                </div>

            </div>

            <div class="editor-choice">
                <div class="block-title"><a href="#"><span>Muharrir
                            tanlovi</span></a><a class="link" href="/">Barchasi</a>
                </div>
                <div class="row">
                    @for ($i=5;$i<8;$i++)
                        
                    <div class="col-md-4">
                        <div class="news">
                            <div class="news__img p-relative"><a
                                href="{{route('single-news',$news[$i])}}"><img
                                src="{{route('home').'/storage//'.$news[$i]->photo}}"></a>
                            </div>
                            <div class="news-meta"><span>{{$news[$i]->created_at}}</span></div><a class="news__title"
                            href="{{route('single-news',$news[$i])}}">{{$news[$i]->title}}</a>
                        </div>
                    </div>
                    @endfor

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <a href="/" class="block-title"><span>So‘nggi yangiliklar</span></a>
            <div class="mb-25">
                
                @for ($i=8 ; $i<count($news);$i++)
                    
                <a class="news-lenta"
                href="{{route('single-news',$news[$i])}}">
                <div class="news-meta"><span>{{$news[$i]->created_at}}</span></div>
                <span class="news-lenta__title">{{$news[$i]->title}}</span>
                </a>
                @endfor

            </div>
            {{-- <a href="https://kun.uz/news/list" class="main-btn-v2 w-100">Ko`proq yangiliklar</a> --}}
        </div>
    </div>

    </div>

    </main>

    </div>
@endsection
