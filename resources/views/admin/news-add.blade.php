@extends('admin.index')

@section('content')

<h1>Yangilik qo'shish</h1>
    <form action="{{ route('admin-news') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <select name="category" id="">
            @foreach ($categorys as $category)            
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        <select name="region" id="">
            @foreach ($regions as $region)            
                <option value="{{$region->id}}">{{$region->name}}</option>
            @endforeach
        </select>
        <label for="">Image</label><input type="file" name='image'>
        <label for="">Sarlavha</label><input type="text" name='title'>
        <label for="">Habar</label><textarea name="message" cols="30" rows="20"></textarea>
        <input type="submit" value='send'>
    </form>
    @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
    @endif
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Sarlavha</th>
                    <th>Habar</th>
                    <th>Category</th>
                    <th>Region</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $new)
                    <tr>
                        <td>{{ $new->id }}</td>
                        <td><img width="120px" src="{{ route('home').'/storage//'. $new->photo }}" alt="photo"></td>
                        <td>{{ $new->title }}</td>
                        <td>{{ $new->message }}</td>
                        <td>{{ $new->category_id }}</td>
                        <td>{{ $new->region_id }}</td>
                        <td>
                            <a href="{{ route('admin-news', ['id' => $new->id]) }}">Delete</a>
                            <a href="{{ route('admin-news-edit', ['id' => $new->id]) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection