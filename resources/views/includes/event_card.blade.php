@php
    $externalImage = strpos($event['img_src'], 'ttps:');
    $imgSrc = $event['img_src'];
    if(!$externalImage)
    {
           $imgSrc = 'https://s3.us-east-2.amazonaws.com/eventraveler/'.$event['img_src'];
    }
@endphp

<div class="col-md-4 animated fadeInUp event-card fast @if($i >= 6) d-none @endif">

    <!-- Card Wider -->
    <a class="card card-cascade wider mb-4" href="/event/{{$event['event_id']}}">

        <div class="row m-0">
            <div class="col-5 col-lg-12 p-3 p-lg-0">
                <!-- Card image -->
                <div class="view view-cascade overlay p-0 event-card-image">
                    <img class="card-img-top" src="{{$imgSrc}}" alt="Card image cap">
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                </div>
            </div>
            <div class="col-7 col-lg-12 p-0 px-lg-3">
                <!-- Card content -->
                <div class="pl-0 card-body card-body-cascade text-left">

                    <!-- Title -->
                    <span class="d-none text-gray fs-12">MUSIC</span>

                    <h4 class="card-title font-weight-bold text-dark fs-16 mb-1 mb-lg-0 mt-lg-0 mt-0">
                        {{str_replace("2020", "", $event['name'])}}
                    </h4>
                    <span class="d-block d-lg-none color-orange fs-12">
                        {{\App\Helpers\EventDateHelper::printStartEndDate($event['s_date'], $event['e_date'])}}
                    </span>
                    <p class="d-none d-lg-block">
                        <span class="color-orange fs-14">
                            <i class="far fa-calendar"></i> {{\App\Helpers\EventDateHelper::printStartEndDate($event['s_date'], $event['e_date'])}}
                        </span>
                        <span class=" d-block text-gray fs-14">
                            <i class="fas fa-map-marker-alt"></i> {{$event['city_name']}}, {{$event['short_name']}}
                        </span>
                    </p>
                    <!-- Subtitle -->
                    <p class="d-block d-lg-none  text-gray pb-0 mb-0 fs-12">
                        <i class="fas fa-map-marker-alt"></i>
                        <strong>{{$event['city_name']}}, {{$event['short_name']}}</strong>
                    </p>

                    <button class="d-none d-lg-block btn btn-primary">Learn More</button>

                    {{--<div class="row">
                        <div class="col-3">
                            <button class="m-0 btn-outline-primary btn">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                        <div class="col-9">
                            <button class="m-0 btn btn-primary font-weight-bold col-12">
                                <span class="float-left">View Event</span>
                                <i class="fas fa-arrow-right float-right pt-1"></i>
                            </button>
                        </div>
                    </div>--}}

                </div>
            </div>
        </div>

    </a>
    <!-- Card Wider -->

</div>
