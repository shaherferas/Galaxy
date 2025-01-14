

    <div class="container">
        @if($propertiesCount>0)
        <h1>Search Results</h1>



        <div class="properties row">

                @foreach($properties as $property)

                    <div class="col-md-4">
                        <div class="property-wrap ftco-animate">
                            <div
                                class="img d-flex align-items-center justify-content-center"
                                style="background-image: url({{Voyager::image( $property->image) }});"
                            >
                                <a
                                    href="{{route('properties.get',$property->id)}}"
                                    class="icon d-flex align-items-center justify-content-center btn-custom"
                                >
                                    <span class="ion-ios-link"></span>
                                </a>
                            </div>
                            <div class="text">
                                <p class="price mb-3">
                                    @if($property['sale_price'])
                                        <span class="old-price"> {{ $property['sale_price'] }} {{ $property->country['currency'] }}</span>
                          @endif
                      <span class="orig-price"> {{ $property['price'] }} {{ $property->country['currency'] }}</span>
                                </p>
                                <h3 class="mb-0">
                                    <a href="{{route('properties.get',$property->id)}}">{{ $property['title'] }}</a>
                                </h3>
                                <span class="location d-inline-block mb-3"
                                ><i class="ion-ios-pin mr-2"></i>{{ \Illuminate\Support\Str::limit($property['description'], 100, '...') }}</span
                                >
                                <ul class="property_list">
                                    @if($property->features)
                                    <li><span class="flaticon-bed"></span>{{$property->features['bed_rooms']}}</li>
                                    <li><span class="flaticon-bathtub"></span>{{$property->features['bath_rooms']}}</li>
                                    <li><span class="flaticon-floor-plan"></span>{{$property->features['area']}} sqft</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

        </div>
        @else

        <div class="d-flex justify-content-center flex-column align-items-center" >
            <h1>No Result Found</h1>
            <p>Request it on Whatsapp:</p>
            <a href="tel://00971585939229" class="btn btn-outline-secondary btn-larg w-25"
            ><i class="bi bi-whatsapp"> Whatsapp</i></a
            >
        </div>
        @endif
    </div>

