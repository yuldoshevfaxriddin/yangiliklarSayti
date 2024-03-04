@extends('admin.index')

@section('content')
    <h3>Categoryani o'zgartirish</h3>
   
    <form action="{{ route('admin-category-edit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="category_id" value="{{$category->id}}">

        <label for="">Category name</label>
        <input type="text" name="name" value="{{$category->name}}">
        <input type="submit" value="edit">
    </form>
@endsection
