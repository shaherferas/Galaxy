<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    @foreach($clients as $client)
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">
                                {{$client->text}}
                                </p>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="user-img"
                                        style="background-image: url({{ Voyager::image( $client->image) }})"
                                    ></div>
                                    <div class="pl-3">
                                        <p class="name">{{$client->name}}</p>
                                        <span class="position">{{$client->title}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
