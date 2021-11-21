@extends('base')
@section('content')
<h1>Product</h1>
<table class="table table-bordered table-stripped table-sm">
    <thead>
        <th>Product_type</th>
        <th>Product_name</th>
        <th>Product_stock</th>
        <th>Product_description</th>
        <th>Price</th>
    </thead>
    <tbody>
        @foreach($product as $pro)
        <tr>
            <td>{{$pro->Product_type}}</td>
            <td>{{$pro->Product_name}}</td>
            <td>{{$pro->Product_stock}}</td>
            <td>{{$pro->Product_description}}</td>
            <td>{{$pro->Price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop