@extends('layouts.app')

@section('content')
<h1>Editing Product: {{ $product->name }}</h1>

@if($errors->any())
<ul class="alert alert-danger">
    @foreach($errors->all() as $row)
    <li>{{ $row }}</li>
    @endforeach
</ul>
@endif

{!! Form::open(['route' => ['products.update', $product->id], 'method' => 'put']) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', $product->name, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', $product->description, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', number_format($product->price,2,'.',''), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <div class="checkbox">    
        <label>
            {!! Form::hidden('featured', 0) !!}
            {!! Form::checkbox('featured', 1, ($product->featured) ? 1 : 0) !!} Featured
        </label>
    </div>
</div>

<div class="form-group">
    <div class="checkbox">    
        <label>
            {!! Form::hidden('recommend', 0) !!}
            {!! Form::checkbox('recommend', 1, ($product->recommend) ? 1 : 0) !!} Recommend
        </label>
    </div>
</div>

<div class="form-group">
    {!! Form::submit('Save Product', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection