@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["product"]->getName() }}</div>

                <div class="card-body">
                    <b>Product name:</b> {{ $data["product"]->getName() }}<br />
                    @if($data["product"]->getPrice()>200)
                    <b>Product price:</b> <strong style="color: red">{{ $data["product"]->getPrice() }}</strong><br />
                    @else
                    <b>Product price:</b> {{ $data["product"]->getPrice()}}<br /> c 
                    @endif

                    <b>This product is available in the next sizes:</b><br />
                    <ul>
                    @foreach($data["sizes"] as $s)
                    <li>{{$s}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
