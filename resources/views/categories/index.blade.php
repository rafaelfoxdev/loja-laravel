@extends('layouts.app')

@section('content')
<h1>Categories</h1>

<br clear="all" />

<a href="{{ route('categories.create') }}" class="btn btn-success">New Category</a>

<br clear="all" />
<br clear="all" />

<table class="table">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    @foreach($categories as $row)
    <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ $row->description }}</td>
        <td>
            <a href="{{ route('categories.edit', ['id' => $row->id]) }}">edit</a> | 
            <a href="{{ route('categories.destroy', ['id' => $row->id]) }}">delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection