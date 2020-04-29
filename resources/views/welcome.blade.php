@extends('layout')

@section('nav')
<nav class="navbar navbar-light bg-white shadow-none">
    <div class="container">
        <a class="navbar-brand" href="#">Curated Event Engine</a>
    </div>
</nav>
@endsection

@section('body')
    <div class="container-fluid p-0 banner">
        <div class="col-12 p-0 bg-half-opacity">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-6 pt-5">
                            <h1 class="text-shadow fs-70 pt-lg-5 mt-lg-5 text-white font-weight-bold">
                                <span class="text-white">Find</span>
                                <br><small class="font-weight-normal">trending<br>events!</small></h1>
                        </div>
                        <div class="col-12 col-lg-6 pt-5 pb-5 my-0 my-lg-5">
                            @include('includes.form', ['class' => '']);
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{--<div class="jumbotron  animated fadeInUp bg-light faster shadow-none mb-0">
        <div class="container">
            <h1 class="text-dark font-weight-bold">Find<br><small class="font-weight-normal">trending events!</small></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @include('includes.form')
        </div>
    </div>--}}
@endsection
