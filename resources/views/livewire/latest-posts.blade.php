<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Blog</span>
                <h2 class="mb-3">Latest Posts</h2>
            </div>
        </div>
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
    </div>
</section>
