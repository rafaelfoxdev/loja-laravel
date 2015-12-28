@extends('layouts.app')

@section('content')
<h1>Create Product</h1>

@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $row)
        <li>{{ $row }}</li>
        @endforeach
    </ul>
@endif

{!! Form::open(['route' => 'products.store']) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <div class="checkbox">    
        <label>
            {!! Form::hidden('featured', 0) !!}
            {!! Form::checkbox('featured', 1) !!} Featured
        </label>
    </div>
</div>

<div class="form-group">
    <div class="checkbox">    
        <label>
            {!! Form::hidden('recommend', 0) !!}
            {!! Form::checkbox('recommend', 1) !!} Recommend
        </label>
    </div>
</div>

<div class="form-group">
    {!! Form::submit('Add Product', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection