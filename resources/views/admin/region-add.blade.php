@extends('admin.index')

@section('content')
    <h1>Region qo'shish</h1>
    <form action="{{ route('admin-region') }}" method="POST">
        @csrf
        <label for="">Region</label><input type="text" name='region'>
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
                    <th>Region</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regions as $region)
                    <tr>
                        <td>{{ $region->id }}</td>
                        <td>{{ $region->name }}</td>
                        <td><a href="{{ route('admin-region', ['id' => $region->id]) }}">Delete</a><a
                                href="{{ route('admin-region-edit', ['id' => $region->id]) }}">Edit</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
