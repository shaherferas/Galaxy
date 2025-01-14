@extends('layouts.master')

@section('title', 'Properties')


@section('content')
<div>
    <!-- Hero Section -->
    <section
        class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight"
        style="background-image: url('images/image_5.jpg');"
        data-stellar-background-ratio="0.5"
    >
        <div class="overlay"></div>
        <div class="overlay-2"></div>
        <div class="container">
            <div
                class="row no-gutters slider-text js-fullheight align-items-end justify-content-center"
            >
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">Properties</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="#">Home <i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>Properties <i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="ftco-section goto-here">
        <div class="container">
            <!-- Filter Component -->
            <!-- Properties List -->
            <div class="row">
                @include('livewire.components.properties-component')
            </div>

            <!-- Pagination -->
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        @if($properties->hasPages())
                            <ul>
                                {{-- Previous Page Link --}}
                                @if($properties->onFirstPage())
                                    <li class="disabled"><span>&lt;</span></li>
                                @else
                                    <li><a href="{{ $properties->previousPageUrl() }}">&lt;</a></li>
                                @endif

                                {{-- Pagination Elements --}}
                                @foreach ($properties->links()->elements as $element)
                                    @if (is_string($element))
                                        <li class="disabled"><span>{{ $element }}</span></li>
                                    @endif

                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $properties->currentPage())
                                                <li class="active"><span>{{ $page }}</span></li>
                                            @else
                                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                {{-- Next Page Link --}}
                                @if($properties->hasMorePages())
                                    <li><a href="{{ $properties->nextPageUrl() }}">&gt;</a></li>
                                @else
                                    <li class="disabled"><span>&gt;</span></li>
                                @endif
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
