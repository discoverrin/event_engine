@extends('layout')

@section('nav')
    <nav class="navbar navbar-light bg-white">
        <div class="container">
            <div class="row">
            <div clas="col-12">
                <a class="text-muted navbar-brand font-weight-bold" href="/events">
                    <i class="text-light fas fa-arrow-left fs-18"></i>&nbsp;&nbsp;Events
                </a>
            </div>
            </div>
        </div>
    </nav>
@endsection

@section('body')
    <div class="container animated fadeInUp faster">
        <div class="row">

                <!--Grid column-->
                <div class="col-md-12 p-0">

                    <!-- Card -->
                    <div class="card card-cascade wider reverse">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight waves-effect waves-light"></div>
                            </a>
                        </div>

                        <!-- Card content -->
                        <div class="event-detail-card text-center event-search-form">

                            <!-- Title -->
                            <span class="fs-16 orange-text">Mon 1st to Sat 7th April, 2020</span>
                            <h4 class="font-weight-bold text-dark mb-0">Tomorrowland 2020</h4>
                            <!-- Subtitle -->
                            <h6 class="py-2 fs-16 text-gray"><span class="flag-icon flag-icon-be fs-18 mr-2"></span>
                                Boom, Belgium</h6>
                            <hr>
                            <!-- Text -->
                            <p class="card-text fs-18">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
                            </p>

                            <div class="col-12 col-lg-10 d-inline-block m-auto pt-3">
                                <a href="" class="col-8 col-md-3 btn btn-primary font-weight-bold"><i class="fas fa-theater-masks"></i>&nbsp;Performers</a>
                                <a href="" class="col-8 col-md-3 btn btn-cyan font-weight-bold"><i class="fas fa-ticket-alt"></i>&nbsp;Tickets</a>
                                <a href="" class="col-8 col-md-3 btn btn-amber font-weight-bold"><i class="fas fa-info-circle"></i>&nbsp;Learn More</a>
                            </div>

                        </div>

                    </div>
                    <!-- Card -->

                </div>
                <!--Grid column-->

    </div>
    </div>

    <div class="container animated fadeInUp fast">
        <div class="col-12 mt-4">
            <h5 class="font-weight-bold">6 similar events found!</h5>
            <hr>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="row">
                @for($i = 0; $i < 5; $i ++)
                    @include('includes.event_card')
                @endfor
            </div>
        </div>
        </div>
    </div>
@endsection
