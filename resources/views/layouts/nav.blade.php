<nav
    class="navbar navbar-expand-lg navbar-light ftco_navbar ftco-navbar-light"
    id="ftco-navbar"
>
    <div class="container">
        <a class="navbar-brand" href="/"
        ><img class="w-100" src="{{ asset('/images/logo.png') }}" alt=""
            /></a>
        <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#ftco-nav"
            aria-controls="ftco-nav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="ftco-nav">
            <ul class="navbar-nav ">
                <li class="nav-item ">
                    <a href="{{route('home')}}/#search" class="nav-link"><i class="bi bi-search"></i></a>
                </li>
                <li class="nav-item active">
                    <a href="{{route('home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('about')}}" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('posts')}}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item text-white" href="{{route('properties.getByType','buy')}}">Buy</a></li>
                        <li><a class="dropdown-item text-white" href="{{route('properties.getByType','sell')}}">Sell</a></li>
                        <li><a class="dropdown-item text-white" href="{{route('properties.getByType','rent')}}">Rand</a></li>
                        <li><a class="dropdown-item text-white" href="{{route('properties.getbyestate','Residential')}}">Residential</a></li>
                        <li><a class="dropdown-item text-white" href="{{route('properties.getbyestate','Holiday')}}">Short-Stay</a></li>
                        <li><a class="dropdown-item text-white" href="{{route('properties.getbyestate','New Development')}}">New Development</a></li>
                        <li><a class="dropdown-item text-white" href="{{route('properties.getbyestate','Commercial')}}">Commercial</a></li>
                        <li><a class="dropdown-item text-white" href="{{route('properties.getbyestate','Land')}}">Land</a></li>

                    </ul>
                 </li>
                <li class="nav-item">
                    <a href="{{route('list_prop')}}" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
