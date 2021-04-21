@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('plane.ListPlane')</div>
                <div class="card-body">
                    @if($errors->any())
                        <ul id="errors">
                             @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <div class="row p-5">
                    <div class="col-md-12">
                        <ul id="errors">
                            @foreach($data["planes"] as $plane)</br>
                                <div class ="card"> 
                                    <div class ="card-header">
                                        @if($plane->getStatus() == 1)
                                            <p class="text-success">@lang('plane.Name') {{ $plane->getName() }}</p>
                                        @else
                                            <p class="text-danger">@lang('plane.Name') {{ $plane->getName() }} </p>
                                        @endif
                                    </div>
                                    <div class="card-body">    
                                        <a>
                                            @lang('plane.Id'){{ $plane->getId() }}<br/>
                                            @lang('plane.Status') {{ $plane->getStatus() }}<br/>
                                            @lang('plane.Price') {{ $plane->getPrice() }}<br/>
                                        </a>   
                                    </div>  
                                </div>            
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection