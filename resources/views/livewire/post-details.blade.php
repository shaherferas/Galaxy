<div>
    <section
        class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight"
        style="background-image: url('{{ Voyager::image( $post->image) }}');"
        data-stellar-background-ratio="0.5"
    >
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div
                class="row no-gutters slider-text js-fullheight align-items-end justify-content-center"
            >
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">{{ $post->title }}</h1>
                    <p class="breadcrumbs">
              <span class="mr-2"
              ><a href="{{ route('home') }}"
                  >Home <i class="ion-ios-arrow-forward"></i></a
                  ></span>
                        <span>{{ $post->title }}<i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    {{ $post->description }}

                </div>
                <!-- .col-md-8 -->
                <div class="col-md-4 pl-md-5 sidebar ftco-animate">


                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        @foreach($latestPosts as $latestPost)
                            <div class="block-21 mb-4 d-flex">
                                <a
                                    class="blog-img"
                                    style="background-image: url({{ Voyager::image( $latestPost->image) }});"
                                ></a>
                                <div class="text pl-3">
                                    <h3 class="heading">
                                        <a href="#"
                                        >{{ $latestPost->title }}</a
                                        >
                                    </h3>
                                    <div class="meta">
                                        <div>
                                            <a href="#"
                                            ><span class="icon-calendar mr-2"></span>   {{ $latestPost->created_at->format('F j, Y') }}</a
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if($tags)
                        <div class="sidebar-box ftco-animate">
                            <h3>Tag Cloud</h3>
                            <div class="tagcloud">
                                @foreach($tags as $tag)
                                    <a href="{{ route('tags.posts', ['tagName' => $tag->name]) }}" class="tag-cloud-link">{{ $tag->name }}</a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

</div>
