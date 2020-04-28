@extends('layout')

@section('nav')
    <nav class="navbar navbar-light bg-white">
        <div class="container">
            <div class="row">
            <div clas="col-12">
                <a class="text-muted navbar-brand font-weight-bold" href="/">
                    <i class="text-light fas fa-arrow-left fs-18"></i>&nbsp;&nbsp;Search
                </a>
            </div>
            </div>
        </div>
    </nav>
@endsection

@section('body')
    <div class="container animated fadeInUp faster">
        <div class="row">
        <div class="col-12 mt-4">
            <h4 class="font-weight-bold">21 events found!</h4>
            <hr>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-12 my-4">
            <div class="row">
                @for($i = 0; $i < 10; $i ++)
                    @include('includes.event_card')
                @endfor
            </div>
        </div>
        </div>
    </div>
@endsection
