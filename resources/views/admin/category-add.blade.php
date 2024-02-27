@extends('admin.index')

@section('content')
    <h1>category qo'shish</h1>
    <form action="{{ route('admin-category') }}" method="POST">
        @csrf
        <label for="">category</label><input type="text" name='category'>
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
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td><a href="{{ route('admin-category', ['id' => $category->id]) }}">Delete</a><a
                                href="{{ route('admin-category-edit', ['id' => $category->id]) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection