@extends('base')
@section('content')
<div class = "float-right">
    <a href = "{{url('/sellers/create')}}" class = "btn btn-primary">
        Add New Seller
    </a>
</div>
<h1>Product</h1>
<table class="table table-bordered table-stripped table-sm">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Product_type</th>
        <th>Total_sales</th>
        
    </thead>
    <tbody>
        @foreach($seller as $sell)
        <tr>
            <td>{{$sell->Name}}</td>
            <td>{{$sell->Email}}</td>
            <td>{{$sell->Product_type}}</td>
            <td>{{$sell->Total_sales}}</td>
            
        </tr>
        @endforeach
    </tbody>
</table>
@stop