@extends('admin.index')

@section('content')
    <h3>Yangilikni o'zgartirish</h3>

    <form action="{{ route('admin-news-edit') }}" method="POST">
        @csrf
        <select name="category" id="">
            {{-- <option value="{{ $category->id }} " selected >{{ $categorys->name }}</option> --}}
            @foreach ($categorys as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @dd($news);
        <select name="region" id="">
            <option value="{{$news->region_id}}" selected>{{$regions[4]->name}}</option>
            @foreach ($regions as $region)
                <option value="{{ $region->id }}">{{ $region->name }}</option>
            @endforeach
        </select>
        <label for="">Image</label><input type="file" name='image'>
        <label for="">Sarlavha</label><input type="text" name='title'>
        <label for="">Habar</label>
        <textarea name="message" cols="30" rows="20"></textarea>
        <input type="submit" value='send'>
        <input type="submit" value="edit">
    </form>
@endsection
