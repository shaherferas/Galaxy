<!DOCTYPE html>
<html lang="en">
<head>

    <title>{{ $title ?? 'Page Title' }}</title>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="author" content="Galaxy Elite Real Estate" />
    <meta
        name="keywords"
        content="real estate, luxury properties, Abu Dhabi real estate, property buying, property selling, luxury rentals, investment opportunities, global reach, seamless transactions"
    />
    <meta
        name="description"
        content="Galaxy Elite Real Estate specializes in buying, selling, and renting luxury properties. Experience seamless transactions, global reach, and expert services in Abu Dhabi, UAE, India, and the UK."
    />

    <!-- Open Graph / Social Media Tags -->
    <meta property="og:title" content="Galaxy Elite Real Estate" />
    <meta
        property="og:description"
        content="Your trusted partner for premium real estate services including buying, selling, luxury rentals, and investment opportunities."
    />
    <meta property="og:image" content="URL-to-your-feature-image.jpg" />
    <meta property="og:url" content="https://galaxyelite.ae" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Galaxy Elite Real Estate" />
    <meta
        name="twitter:description"
        content="Premium real estate services tailored to meet your needs, from luxury rentals to investment opportunities."
    />
    <meta name="twitter:image" content="URL-to-your-feature-image.jpg" />
    <meta name="author" content="Galaxy Elite Real Estate" />
    <meta
        name="keywords"
        content="real estate, luxury properties, Abu Dhabi real estate, property buying, property selling, luxury rentals, investment opportunities, global reach, seamless transactions"
    />
    <meta
        name="description"
        content="Galaxy Elite Real Estate specializes in buying, selling, and renting luxury properties. Experience seamless transactions, global reach, and expert services in Abu Dhabi, UAE, India, and the UK."
    />

    <!-- Open Graph / Social Media Tags -->
    <meta property="og:title" content="Galaxy Elite Real Estate" />
    <meta
        property="og:description"
        content="Your trusted partner for premium real estate services including buying, selling, luxury rentals, and investment opportunities."
    />
    <meta property="og:image" content="URL-to-your-feature-image.jpg" />
    <meta property="og:url" content="https://galaxyelite.ae" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Galaxy Elite Real Estate" />
    <meta
        name="twitter:description"
        content="Premium real estate services tailored to meet your needs, from luxury rentals to investment opportunities."
    />
    <meta name="twitter:image" content="URL-to-your-feature-image.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    />

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css"
        rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
</head>
<body>
@include('layouts.nav')


{{ $slot }}

<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Galaxy Elite Real Estate</h2>
                    <p>Excellence in Every Transaction</p>

                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Community</h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('home')}}/#search"
                            ><span class="icon-long-arrow-right mr-2"></span>Search
                                Properties</a
                            >
                        </li>

                        <li>
                            <a href="{{route('posts')}}"
                            ><span class="icon-long-arrow-right mr-2"></span>BLog</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">About Us</h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('about')}}"
                            ><span class="icon-long-arrow-right mr-2"></span>Who We
                                Are</a
                            >
                        </li>
                        <li>
                            <a href="{{route('about')}}"
                            ><span class="icon-long-arrow-right mr-2"></span>Why Choose
                                Us</a
                            >
                        </li>
                        <li>
                            <a href="{{route('about')}}"
                            ><span class="icon-long-arrow-right mr-2"></span>clients</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Company</h2>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{route('about')}}"
                            ><span class="icon-long-arrow-right mr-2"></span>About Us</a
                            >
                        </li>

                        <li>
                            <a href="{{route('contact')}}"
                            ><span class="icon-long-arrow-right mr-2"></span>Contact</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
            <livewire:social-media />
        </div>
    </div>
</footer>
<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle
            class="path-bg"
            cx="24"
            cy="24"
            r="22"
            fill="none"
            stroke-width="4"
            stroke="#eeeeee"
        />
        <circle
            class="path"
            cx="24"
            cy="24"
            r="22"
            fill="none"
            stroke-width="4"
            stroke-miterlimit="10"
            stroke="#F96D00"
        />
    </svg>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/aos.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/jquery.timepicker.min.js') }}"></script>
<script src="{{ asset('js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('js/google-map.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
