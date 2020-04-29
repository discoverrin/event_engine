@extends('layout')

@section('nav')
    <nav class="navbar navbar-light bg-white">
        <div class="container">
            <div class="row">
            <div clas="col-12">
                <a class="text-gray navbar-brand font-weight-bold" href="/search">
                    <i class=" fas fa-arrow-left fs-18"></i>&nbsp;&nbsp;Back to form
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
            <h4 class="font-weight-bold">Our top recommendations</h4>
            <hr>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-12 mb-4">
            <div class="row row-eq-height">
                @foreach($events as $i=>$event)
                    @include('includes.event_card')
                @endforeach
                @if(count($events) > 6)
                <div class="col-12 col-md-3 mt-3 mx-auto animated fadeInUp fast">
                    <button id="loadMoreEvents" data-loading="loading events..." class="text-center btn btn-big-round col-12 p-3 btn-primary mx-0 font-weight-bold animated fadeInUp faster">
                        <span class="text-center">Show more events</span>
                    </button>
                </div>
                @endif
            </div>
        </div>
        </div>
    </div>
@endsection
