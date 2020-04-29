@extends('layout')

@section('nav')
    <nav class="navbar navbar-light bg-white">
        <div class="container">
            <div class="row">
            <div clas="col-12">
                <a class="text-gray navbar-brand font-weight-bold" href="/">
                    <i class=" fas fa-arrow-left fs-18"></i>&nbsp;&nbsp;Search
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
            <h4 class="font-weight-bold">{{count($events)}} events found!</h4>
            <hr>
        </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-12 my-4">
            <div class="row">
                @foreach($events as $event)
                    @include('includes.event_card')
                @endforeach
            </div>
        </div>
        </div>
    </div>
@endsection
