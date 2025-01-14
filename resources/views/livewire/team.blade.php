<section class="ftco-section ftco-agent">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Team</span>
                <h2 class="mb-4">Our Team</h2>
            </div>
        </div>
        <div class="row " >
            @foreach($team as $member)
            <div class="col-md-3 ftco-animate">
                <div class="agent">
                    <div class="img  w-100" style="height: 40vh">
                        <img src="{{ Voyager::image( $member->image) }}" class=" w-100 h-100 "  style="object-fit: cover" alt="Colorlib Template">
                    </div>
                    <div class="desc">
                        <h3>
                            {{$member->name}}</h3>
                        <p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">
{{$member->title}}</span></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
