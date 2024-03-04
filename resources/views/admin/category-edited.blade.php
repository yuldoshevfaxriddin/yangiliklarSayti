@extends('admin.index')

@section('content')
    <h3>Categoryani o'zgartirish</h3>
    <form action="{{ route('admin-news-edit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="news_id" value="{{$news->id}}">
        <select name="category" id="">
            <option value="{{$news->category_id}}" selected >{{App\Models\Category::find($news->category_id)->name}}</option>
            @foreach ($categorys as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <select name="region" id="">
            <option value="{{$news->region_id}}" selected>{{App\Models\Region::find($news->region_id)->name}}</option>
            @foreach ($regions as $region)
                <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach
        </select>
        <label for="">Image</label><input type="file" name='image'>
        <label for="">Sarlavha</label><input type="text" name='title' value="{{$news->title}}">
        <label for="">Habar</label>
        <textarea name="message" cols="30" rows="20">{{$news->message}}</textarea>
        <input type="submit" value="edit">
    </form>
@endsection
