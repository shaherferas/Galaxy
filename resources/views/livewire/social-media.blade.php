<div class="col-md">
    <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Have a Questions?</h2>
        <div class="block-23 mb-3">
            <ul>
                <li>
                    <span class="icon icon-map-marker"></span
                    ><span class="text">Abu Dhabi, UAE, India, UK</span>
                </li>
                @foreach($socialLinks as $link)
                    @if($link->type == "whatsapp")
                        <li>
                            <a href="tel://{{$link->url}}">
                                <span class=" icon-phone  pr-4"></span>
                                <span class="text">{{$link->url}}</span></a>
                        </li>
                    @elseif($link->type == "email")
                        <li>
                            <a href="mailto:{{$link->url}}">
                                <span class=" icon-envelope pr-4"></span>
                                <span class="text">{{$link->url}}</span></a>
                        </li>
                    @elseif($link->type == "instagram")
                        <li>
                            <a href="{{$link->url}}">
                            <span
                                class="icon-instagram  mr-4"
                                style="background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); border-radius: 5px;padding:1px 2px;">
                            </span>
                                <span class="text">{{$link->placeholder}}</span>
                            </a>
                        </li>
                        <li>
                            @elseif($link->type == "linkedin")
                                <a href="{{$link->url}}"><span
                                        class="icon-linkedin  pr-4"
                                        style="color:#0A66C2"></span>
                                    <span class="text">Linkedin</span></a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
