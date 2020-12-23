@extends('layouts.app')

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 h-50" src="{{asset('img/pexels-nubia-navarro-(nubikini)-386009.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block font-weight-bold">
                    <h4>Travel</h4>
                    <p>Travel can also include relatively short stays between successive movements, as in the case of tourism.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-50" src="{{asset('img/pexels-pixabay-326279.jpg')}}"  alt="Second slide">
                <div class="carousel-caption d-none d-md-block font-weight-bold">
                    <h4>Food</h4>
                    <p>Time to take a trip around the world and delve into all the weird foods our species like to chow down.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 h-50" src="{{asset('img/pexels-burst-373946.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block font-weight-bold">
                    <h4>Lifestyle</h4>
                    <p>Lifestyle is the interests, opinions, behaviours, and behavioural orientations of an individual, group, or culture.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="album py-5 bg-light">
        <div class="container">
            <div style=" font-family: 'Bodoni MT'; font-size: 40px">
                Latest Posts
            </div>






            <div class="row">

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/pexels-artem-beliaikin-2490930.jpg') }}" alt="" class="card-img-top" width="100%" height="225">

                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar mr-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment mr-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user mr-2"></i>
                                        Chamathka
                                    </small>
                                </p>

                            </div>

                            <h5 class="card-title">
                                Card Title

                            </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                            <span class="badge float-end" style="background-color: #0dcaf0">Category</span>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/pexels-artem-beliaikin-2490930.jpg') }}" alt="" class="card-img-top" width="100%" height="225">

                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar mr-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment mr-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user mr-2"></i>
                                        Chamathka
                                    </small>
                                </p>

                            </div>

                            <h5 class="card-title">
                                Card Title

                            </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                            <span class="badge float-end" style="background-color: #0dcaf0">Category</span>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/pexels-artem-beliaikin-2490930.jpg') }}" alt="" class="card-img-top" width="100%" height="225">

                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar mr-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment mr-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user mr-2"></i>
                                        Chamathka
                                    </small>
                                </p>

                            </div>

                            <h5 class="card-title">
                                Card Title

                            </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                            <span class="badge float-end" style="background-color: #0dcaf0">Category</span>

                        </div>
                    </div>
                </div>






                </div>

            <div class="row">

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/pexels-artem-beliaikin-2490930.jpg') }}" alt="" class="card-img-top" width="100%" height="225">

                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar mr-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment mr-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user mr-2"></i>
                                        Chamathka
                                    </small>
                                </p>

                            </div>

                            <h5 class="card-title">
                                Card Title

                            </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                            <span class="badge float-end" style="background-color: #0dcaf0">Category</span>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/pexels-artem-beliaikin-2490930.jpg') }}" alt="" class="card-img-top" width="100%" height="225">

                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar mr-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment mr-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user mr-2"></i>
                                        Chamathka
                                    </small>
                                </p>

                            </div>

                            <h5 class="card-title">
                                Card Title

                            </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                            <span class="badge float-end" style="background-color: #0dcaf0">Category</span>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/pexels-artem-beliaikin-2490930.jpg') }}" alt="" class="card-img-top" width="100%" height="225">

                        <div class="card-body">
                            <div class="d-flex justify-content-around">
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-calendar mr-2"></i>
                                        December 10, 2017
                                    </small>
                                </p>

                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-comment mr-2"></i>
                                        50
                                    </small>
                                </p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <i class="far fa-user mr-2"></i>
                                        Chamathka
                                    </small>
                                </p>

                            </div>

                            <h5 class="card-title">
                                Card Title

                            </h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                            <span class="badge float-end" style="background-color: #0dcaf0">Category</span>

                        </div>
                    </div>
                </div>






            </div>

        </div>
    </div>










@endsection
