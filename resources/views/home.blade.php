@extends('layouts.main-layout')

@section('pageName')
    home
@endsection

@section('content')
    <div class="container">

        <div class="row my-4">

            @foreach ($fumetti as $fumetto)
                <div class="col-sm-6 col-md-3 col-lg-2">
                    <div class="card bg-transparent text-light border-0">
                        <img class="squared_img_top" src="{{ $fumetto['thumb'] }}" alt="">
                        <p>{{ $fumetto['title'] }} </p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection
