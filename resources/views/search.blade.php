@extends('layout')

@section('nav')
    <nav class="navbar navbar-light bg-white shadow-none">
        <div class="container">
            <a class="navbar-brand" href="/">Event Engine</a>
        </div>
    </nav>
@endsection

@section('body')
    <div class="container-fluid p-0 ">
        <div class="col-12 p-0 bg-light p-0">
            <div class="container p-3">
                <div class="col-12 p-0 col-md-7 m-auto">
                @include('includes.form', ['class' => 'show shadow-none'])
                </div>
            </div>
        </div>
    </div>
@endsection

{{--https://eventraveler.com/get_event?event_id=354--}}
{{--https://eventraveler.com/get_events?ids=354--}}
