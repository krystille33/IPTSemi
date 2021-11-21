@extends('base')
@section('content')
    <h1> Create New Seller</h1>
    <div class="row">
        <div class="col-md-5">
        {!! Form::open(['url'=>'/sellers', 'method'=>'post']) !!}
    <div class = "form-group">
        {{Form::label('Name')}}
        {{Form::text('Name','',['class'=>'form-control'])}}
    </div>
    <div class = "form-group">
        {{Form::label('Email')}}
        {{Form::text('Email','',['class'=>'form-control'])}}
    </div>
    <div class = "form-group">
        {{Form::label('Product_type')}}
        {{Form::text('Product_type','',['class'=>'form-control'])}}
    </div>
    <div class = "form-group">
        {{Form::label('Total_sales')}}
        {{Form::number('Total_sales','',['class'=>'form-control'])}}
    </div>
    <div class = "form-group">
        <button class = "btn btn-primary float-right">Enter</button>
    </div>

    {!!  Form::close()  !!}
        </div>

    </div>
@endsection