@extends('base')
@section('content')
<h1>Sales</h1>
<table class="table table-bordered table-stripped table-sm"> 
    <thead>
        <th>Product Id</th>
        <th>Total_sales</th>
    </thead>
    <tbody>
        @foreach($sales as $sale)
        <tr>
            <td>{{$sale->ProductId}}</td>
            <td>{{$sale->Total_sales}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop