@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <img class="" width="200" src="{{$product->img}}" alt="{{$product->name}}">
        <div class="card-body">
            <h4 class="card-title">{{$product->name}}</h4>
            <p class="card-text">description:{{$product->description}}</p>
            <p class="card-text">{{$product->weight}}</p>
            <p class="card-text">{{$product->in_stock}}</p>
        </div>
        <div class="card-footer">
            <p class="card-text">{{$product->product_code}}</p>
            <p class="card-text">{{$product->price}}</p>
        </div>
    </div>
</div>

@endsection