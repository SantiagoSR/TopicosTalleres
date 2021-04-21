@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1>Available products</h1>
            <ul>
                @foreach($data["products"] as $key => $product)
                    <li>
                        @lang('message.ProductId') {{ $key }} - 
                        @lang('message.ProductName') {{ $product->getName() }} -
                        @lang('message.ProductPrice') {{ $product->getPrice() }} -
                        <a href="{{ route('cart.add', ['id'=> $key]) }}"> @lang('message.AddToCart')  </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1>@lang('message.ProductsCart')</h1>
            <ul>
                @foreach($data["productsInCart"] as $key => $product)
                    <li>
                        @lang('message.ProductId') {{ $key }} - 
                        @lang('message.ProductName') {{ $product->getName() }} -
                        @lang('message.ProductPrice') {{ $product->getPrice() }} 
                    </li>
                @endforeach
            </ul>
            <a href="{{ route('cart.removeAll') }}">@lang('message.RemoveProducts')</a>
        </div>
    </div>
</div>
@endsection
