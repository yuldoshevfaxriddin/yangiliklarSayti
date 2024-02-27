@extends('admin.index')

@section('content')
    {{ $edit_form_name }}

    <form action="{{ $edit_adress }}" method="POST">
        @csrf
        <label for="name">{{ $edit_type }}</label>
        <input type="hidden" name='id' value="{{ $region->id }}">
        <input type="text" name ='name'value="{{ $region->name }}">
        <input type="submit" value="edit">
    </form>
@endsection
