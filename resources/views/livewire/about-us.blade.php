
<div>
    <section
        class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight rounded"
        style="background-image: url('images/listing-1.jpg');"
        data-stellar-background-ratio="0.5"
    >
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div
                class="row no-gutters slider-text js-fullheight align-items-end justify-content-center"
            >
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">About Us</h1>
                    <p class="breadcrumbs">
              <span class="mr-2"
              ><a href="{{route('home')}}"
                  >Home <i class="ion-ios-arrow-forward"></i></a
                  ></span>
                        <span>About us <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row">
                <div
                    class="col-md-6 img img-3 d-flex justify-content-center align-items-center rounded"
                    style="background-image: url({{Voyager::image( $data->image) }});"
                ></div>
                <div class="col-md-6 wrap-about pl-md-5 ftco-animate">
                    <div class="heading-section">
                        <h2 class="mb-4">{{$data->title}}</h2>

                        {{$data->description}}


                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
