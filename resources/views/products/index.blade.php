@extends('layouts.app')

@section('content')
<h1>Products</h1>

<br clear="all" />

<a href="{{ route('products.create') }}" class="btn btn-success">New Product</a>

<br clear="all" />
<br clear="all" />

<table class="table">
    <tr>
        <th>#</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    @foreach($products as $row)
    <tr>
        <td>{{ $row->id }}</td>
        <td>{{ $row->name }}</td>
        <td>{{ number_format($row->price,2,',','.') }}</td>
        <td>
            <a href="{{ route('products.edit', ['id' => $row->id]) }}">edit</a> | 
            <a href="{{ route('products.destroy', ['id' => $row->id]) }}">delete</a>
        </td>
    </tr>
    @endforeach
</table>
@endsection