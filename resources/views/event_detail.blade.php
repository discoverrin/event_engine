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
    <div class="container-fluid">
        <div class="row">

                <!--Grid column-->
                <div class="col-md-12 p-0">

                    <!-- Card -->
                    <div class="shadow-none no-border-radium card card-cascade wider reverse">

                        <!-- Card image -->
                        <div class="view view-cascade overlay" style="max-height: 300px;overflow: hidden">
                            <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" alt="Card image cap">
                        </div>

                        <!-- Card content -->
                        <div class="container">
                        <div class="col-12">
                            <div class="shadow-none  event-detail-card text-center event-search-form">

                                <!-- Title -->
                                <span class="fs-16 color-orange pb-1 d-block">Mon 1st to Sat 7th April, 2020</span>
                                <h4 class="font-weight-bold text-dark mb-0">Tomorrowland 2020</h4>
                                <!-- Subtitle -->
                                <h6 class="py-2 fs-16 text-gray"><span class="flag-icon flag-icon-be fs-18 mr-2"></span>
                                    Boom, Belgium</h6>
                                <hr>
                                <!-- Text -->
                                <div class="card-text fs-18 col-12 p-0">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat laborum ut beatae ullam suscipit veniam.
                                </div>
                                <div class="bg-light d-inline-block shadow-sm mt-3 p-3">
                                    <strong>Tickets starting from $44</strong>
                                    <a href="" class="btn btn-link">
                                        Get tickets
                                    </a>
                                    <br>
                                    <a href="" class="mt-1 mb-2 btn btn-outline-primary font-weight-bold"><i class="fas fa-info-circle"></i>&nbsp;Learn More</a>
                                </div>

                                <div class="col-12 mt-5">
                                    <h5 class="font-weight-bold text-dark">Performers</h5>
                                </div>

                                <div class="col-12 col-lg-10 d-inline-block m-auto pt-3">
                                    <div class="row">
                                        @for($i = 0; $i <= 7; $i ++)
                                        <div class="col-4 col-lg-3 p-1">
                                            <div class="col-12 p-0 shadow-sm">
                                                <div class="col-12 p-3 performer" style="background-image: url('https://media.resources.festicket.com/image/696x800/smart/filters:quality(70)/www/artists/LEWIS_CAPALDI_Leadshot_RGB.jpg')">

                                                </div>
                                                <div class="col-12 px-0 py-2 font-weight-bold">
                                                    Test
                                                </div>
                                            </div>
                                        </div>
                                        @endfor
                                    </div>

                                </div>

                            </div>
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
        <div class="col-12">
            <div class="row">
                @for($i = 0; $i < 5; $i ++)
                    @include('includes.event_card')
                @endfor
            </div>
        </div>
    </div>
@endsection
