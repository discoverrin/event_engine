@extends('layout')

@section('nav')
    <nav class="navbar navbar-light bg-white">
        <div class="container">
            <div class="row">
            <div clas="col-12">
                <a class="text-gray navbar-brand font-weight-bold" href="/events">
                    <i class="fas fa-arrow-left fs-18"></i>&nbsp;&nbsp;Events
                </a>
            </div>
            </div>
        </div>
    </nav>
@endsection

@section('body')

    @php
        $externalImage = strpos($info['img_src'], 'ttps:');
        $imgSrc = $info['img_src'];
        if(!$externalImage)
        {
               $imgSrc = 'https://s3.us-east-2.amazonaws.com/eventraveler/'.$info['img_src'];
        }
    @endphp

    <div class="container-fluid">
        <div class="row">

                <!--Grid column-->
                <div class="col-md-12 p-0">

                    <!-- Card -->
                    <div class="shadow-none no-border-radium card card-cascade wider reverse">

                        <!-- Card image -->
                        <div class="view view-cascade overlay" style="background-image:url('{{$imgSrc}}'); background-position:center; background-size:cover;height: 300px;overflow: hidden">
                        </div>

                        <!-- Card content -->
                        <div class="container">
                        <div class="col-12">
                            <div class="shadow-none  event-detail-card text-center event-search-form px-0">

                                <!-- Title -->
                                <span class="fs-16 color-orange pb-1 d-block">
                                    {{\App\Helpers\EventDateHelper::printStartEndDate($event['s_date'], $event['e_date'])}}
                                </span>
                                <h4 class="font-weight-bold text-dark mb-0">{{$event['name']}}</h4>
                                <!-- Subtitle -->
                                <h6 class="py-2 fs-16 text-gray"><span class="flag-icon flag-icon-{{strtolower($info['iso2'])}} fs-18 mr-2"></span>
                                    {{$info['city_name']}}, {{$info['short_name']}}
                                </h6>
                                <hr>
                                <!-- Text -->
                                <div class="card-text fs-18 col-12 p-0">
                                    {!! $event['short_desc'] !!}
                                </div>
                                <div class="bg-light d-inline-block shadow-sm mt-3 p-3">
                                    <strong>Tickets starting from $44</strong>
                                    <a href="" class="btn btn-link">
                                        Get tickets
                                    </a>
                                    <br>
                                    <a href="" class="mt-1 mb-2 btn btn-outline-primary font-weight-bold"><i class="fas fa-info-circle"></i>&nbsp;Learn More</a>
                                </div>

                                @if(count($performers))
                                <div class="col-12 mt-5">
                                    <h5 class="font-weight-bold text-dark">Performers</h5>
                                </div>

                                <div class="col-12 col-lg-10 d-inline-block m-auto pt-3">
                                    <div class="row">
                                        @foreach($performers as $performer)
                                        <div class="col-4 col-lg-3 p-1">
                                            <div class="col-12 p-0 shadow-sm">
                                                <div class="col-12 p-3 performer" style="background-position:top; background-image: url('/assets/images/f1/{{$performer['img_src']}}')">

                                                </div>
                                                <div class="col-12 px-0 py-2 font-weight-bold">
                                                    {{ucwords($performer['name'])}}
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!--Grid column-->

    </div>
    </div>

    @if(count($similar_events))
    <div class="container animated fadeInUp fast">
        <div class="col-12 mt-4">
            <h5 class="font-weight-bold">{{count($similar_events)}} similar events found!</h5>
            <hr>
        </div>
    </div>

    <div class="container">
        <div class="col-12">
            <div class="row">

                @foreach($similar_events as $event)
                    @include('includes.event_card')
                @endforeach

            </div>
        </div>
    </div>
    @endif
@endsection
