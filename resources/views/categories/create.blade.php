@extends('layouts.app')

@section('content')
<h1>Create Category</h1>

@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $row)
        <li>{{ $row }}</li>
        @endforeach
    </ul>
@endif

{!! Form::open(['route' => 'categories.store']) !!}

<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Add Category', ['class' => 'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@endsection