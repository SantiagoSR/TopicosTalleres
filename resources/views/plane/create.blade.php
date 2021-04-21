@extends('layouts.master')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
                <div class="card">
                    <div class="card-header">@lang('plane.CreatePlane')</div>
                        <div class="card-body">
                            @if($errors->any())
                                <ul id="errors">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif

                            <form method="POST" action="{{ route('plane.save') }}">
                                @csrf
                                <div class="form-group-row">
                                    <div class="form-group row-md-5">
                                        <input type="text" placeholder="Enter name" name="name"  required value="{{ old('name') }}" />
                                    </div>
                                    <div class="form-group">
                                        <div class="row-md-5">
                                            @lang('plane.Status') <input type="checkbox" placeholder="Enter status" name="status"  value="{{ old('status') }}" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter price" name="price" required value="{{ old('price') }}" />
                                    </div>
                                </div>
                                <input type="submit" value="Send" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
