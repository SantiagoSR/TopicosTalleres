@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('plane.TotalAvailable')</div>
                <div class="card-body">
                    @lang('plane.Total')  {{ $data["available"]}}
                </div>
                <div class="card-header">@lang('plane.TotalNotAvailable')</div>
                <div class="card-body">
                    @lang('plane.Total')  {{ $data["notAvailable"]}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
