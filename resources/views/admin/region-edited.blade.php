@extends('admin.index')

@section('content')
<h3>Regionni o'zgartirish</h3>
   
<form action="{{ route('admin-region-edit') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="region_id" value="{{$region->id}}">

    <label for="">Region name</label>
    <input type="text" name="name" value="{{$region->name}}">
    <input type="submit" value="edit">
</form>
@endsection
