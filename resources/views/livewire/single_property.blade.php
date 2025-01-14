@extends('layouts.master')

@section('title', 'Page Title')


@section('content')

<div>
    <!-- Hero Section -->

    <section
        class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight"
        style="background-image: url({{asset('images/bg_1.jpg')}});"
        data-stellar-background-ratio="0.5"
    >
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div
                class="row no-gutters slider-text js-fullheight align-items-end justify-content-center"
            >
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">{{$property->title}}</h1>
                    <p class="breadcrumbs">
              <span class="mr-2"
              ><a href="{{route('home')}}"
                  >Home <i class="ion-ios-arrow-forward"></i></a
                  ></span>
                        <span
                        >{{$property->title}}<i class="ion-ios-arrow-forward"></i
                            ></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-property-details">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="property-details">
                        <div
                            class="img rounded"
                            style="background-image: url({{Voyager::image( $property->image) }});"
                        ></div>
                        <div class="row property-wrap">
                            <div class="col-md-8">
                                <div class="text">
                                    <p class="price mb-3">
                                        @if($property['sale_price'])
                      <span class="old-price"> {{ $property['sale_price'] }} {{ $property->country['currency'] }}</span>
                          @endif
                      <span class="orig-price"> {{ $property['price'] }} {{ $property->country['currency'] }}</span>
                                    </p>
                                    <h2>{{$property->title}}</h2>
                                    <span class="subheading"
                                    >{{$property->address}}</span
                                    >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card " style="width: 18rem;">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Get in touch now for more information.
                                        </h5>
                                        <a href="tel://{{$property->phone}}" class="btn btn-outline-secondary btn-larg w-100"
                                        ><i class="bi bi-whatsapp"> Whatsapp</i></a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 pills">
                    <div class="bd-example bd-example-tabs">
                        <div class="d-flex">
                            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        id="pills-description-tab"
                                        data-toggle="pill"
                                        href="#pills-description"
                                        role="tab"
                                        aria-controls="pills-description"
                                        aria-expanded="true"
                                    >Features</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="pills-manufacturer-tab"
                                        data-toggle="pill"
                                        href="#pills-manufacturer"
                                        role="tab"
                                        aria-controls="pills-manufacturer"
                                        aria-expanded="true"
                                    >Description</a
                                    >
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="pills-tabContent">
                            <div
                                class="tab-pane fade show active"
                                id="pills-description"
                                role="tabpanel"
                                aria-labelledby="pills-description-tab"
                            >
                                @if($property->features)
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="features">
                                            <li class="check">
                                                <span class="ion-ios-checkmark-circle"></span>Lot
                                                Area: {{$property->features->area}} SQ FT
                                            </li>
                                            <li class="check">
                                                <span class="ion-ios-checkmark-circle"></span>Bed
                                                Rooms: {{$property->features->bed_rooms}}
                                            </li>
                                            <li class="check">
                                                <span class="ion-ios-checkmark-circle"></span>Bath
                                                Rooms: {{$property->features->bath_rooms}}
                                            </li>
                                            @if($property->features->luggage)
                                            <li class="check">
                                                <span class="ion-ios-checkmark-circle"></span>Luggage
                                            </li>
                                            @endif
                                            <li class="check">
                                                <span class="ion-ios-checkmark-circle"></span>Garage:
                                                {{$property->features->garage}}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="features">

                                            <li class="check">
                                                <span class="ion-ios-checkmark-circle"></span>Year
                                                Build:: {{$property->features->year_build}}
                                            </li>
                                            @if($property->features->water)
                                            <li class="check">
                                                <span class="ion-ios-checkmark-circle"></span>Water
                                            </li>
                                            @endif

                                            <li class="check">
                                                <span class="ion-ios-checkmark-circle"></span>Stories:
                                                {{$property->features->stories}}
                                            </li>
                                            <li class="check">
                                                <span class="ion-ios-checkmark-circle"></span>Roofing:
                                                {{$property->features->roofing}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <div
                                class="tab-pane fade"
                                id="pills-manufacturer"
                                role="tabpanel"
                                aria-labelledby="pills-manufacturer-tab"
                            >
                                <p>
                                    {{$property->description}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
