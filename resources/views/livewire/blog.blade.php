<div>
    <section
        class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight"
        style="background-image: url({{asset('images/listing-5.jpg')}});"
        data-stellar-background-ratio="0.5"
    >
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div
                class="row no-gutters slider-text js-fullheight align-items-end justify-content-center"
            >
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">Blog</h1>
                    <p class="breadcrumbs">
              <span class="mr-2"
              ><a href="index.html"
                  >Home <i class="ion-ios-arrow-forward"></i></a
                  ></span>
                        <span>Blog <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">

                @foreach($posts as $post)
                    <div class="col-md-3 d-flex   ">
                        <div class="blog-entry justify-content-end">
                            <div class="text">
                                <a
                                    href="{{ route('post.details', ['id' => $post->id]) }}"
                                    class="block-20 img"
                                    style="background-image: url('{{ Voyager::image( $post->image) }}');"
                                >
                                </a>
                                <h3 class="heading">
                                    <a href="{{ route('post.details', ['id' => $post->id]) }}">{{ $post->title }}</a>
                                </h3>
                                <div class="meta mb-3">
                                    <div>
                                        <a href="{{ route('post.details', ['id' => $post->id]) }}">
                                            {{ $post->created_at->format('F j, Y') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            @if ($posts->hasPages())
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                {{-- Previous Page Link --}}
                                @if ($posts->onFirstPage())
                                    <li class="disabled"><span>&lt;</span></li>
                                @else
                                    <li><a href="#" wire:click.prevent="previousPage">&lt;</a></li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($posts->links()->elements as $element)
                                    {{-- "Three Dots" Separator --}}
                                    @if (is_string($element))
                                        <li class="disabled"><span>{{ $element }}</span></li>
                                    @endif

                                    {{-- Array Of Links --}}
                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $posts->currentPage())
                                                <li class="active"><span>{{ $page }}</span></li>
                                            @else
                                                <li><a href="#" wire:click.prevent="gotoPage({{ $page }})">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if ($posts->hasMorePages())
                                    <li><a href="#" wire:click.prevent="nextPage">&gt;</a></li>
                                @else
                                    <li class="disabled"><span>&gt;</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

</div>
