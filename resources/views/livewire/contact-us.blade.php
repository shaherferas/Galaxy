{{--<div class="contact-form">--}}
{{--    <form wire:submit.prevent="submit">--}}
{{--        <div>--}}
{{--            <input type="text" wire:model="name" placeholder="Your Name">--}}
{{--            @error('name') <span>{{ $message }}</span> @enderror--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <input type="email" wire:model="email" placeholder="Your Email">--}}
{{--            @error('email') <span>{{ $message }}</span> @enderror--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <input type="text" wire:model="phone" placeholder="Phone Number">--}}
{{--            @error('phone') <span>{{ $message }}</span> @enderror--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <input type="text" wire:model="subject" placeholder="Subject">--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <textarea wire:model="message" placeholder="Message"></textarea>--}}
{{--            @error('message') <span>{{ $message }}</span> @enderror--}}
{{--        </div>--}}
{{--        <button type="submit">Send Message</button>--}}
{{--    </form>--}}

{{--    <div class="social-links">--}}
{{--        @foreach($socialLinks as $link)--}}
{{--            <div>--}}
{{--                <span>{{ $link->platform }}:</span>--}}
{{--                <a href="{{ $link->url }}">{{ $link->url }}</a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}
<div>
<section
    class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight"
    style="background-image: url('{{asset('/images/listing-4.jpg')}}');"
    data-stellar-background-ratio="0.5"
>
    <div class="overlay"></div>
    <div class="overlay-2"></div>
    <div class="container">
        <div
            class="row no-gutters slider-text js-fullheight align-items-end justify-content-center"
        >
            <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                <h1 class="mb-3 bread">Contact Us</h1>
                <p class="breadcrumbs">
              <span class="mr-2"
              ><a href="{{route('home')}}"
                  >Home <i class="ion-ios-arrow-forward"></i></a
                  ></span>
                    <span>Contact <i class="ion-ios-arrow-forward"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row block-9 justify-content-center mb-5">
            <div class="col-md-6 align-items-stretch d-flex">
                <form wire:submit.prevent="submit" class="bg-light p-2 p-md-5 contact-form">
                    <div class="form-group">
                        <input
                            type="text" wire:model="name" placeholder="Your Name" class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <input
                            type="email" wire:model="email" placeholder="Your Email" class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="w-25">
                                <input
                                    list="countryCodes"
                                    placeholder="123"
                                    class="bg-transparent form-control border-right-0"
                                />
                                <datalist id="countryCodes">
                                    <option value="+1">United States (+1)</option>
                                    <option value="+44">United Kingdom (+44)</option>
                                    <option value="+971">United Arab Emirates (+971)</option>
                                    <option value="+91">India (+91)</option>
                                    <option value="+61">Australia (+61)</option>
                                    <option value="+81">Japan (+81)</option>
                                    <option value="+49">Germany (+49)</option>
                                    <option value="+33">France (+33)</option>
                                    <option value="+86">China (+86)</option>
                                    <option value="+7">Russia (+7)</option>
                                    <option value="+39">Italy (+39)</option>
                                    <option value="+34">Spain (+34)</option>
                                    <option value="+55">Brazil (+55)</option>
                                    <option value="+27">South Africa (+27)</option>
                                    <option value="+20">Egypt (+20)</option>
                                    <option value="+62">Indonesia (+62)</option>
                                    <option value="+63">Philippines (+63)</option>
                                    <option value="+64">New Zealand (+64)</option>
                                    <option value="+92">Pakistan (+92)</option>
                                    <option value="+880">Bangladesh (+880)</option>
                                    <option value="+212">Morocco (+212)</option>
                                    <option value="+66">Thailand (+66)</option>
                                    <option value="+90">Turkey (+90)</option>
                                    <option value="+82">South Korea (+82)</option>
                                    <option value="(+-246">Barbados (+1-246)</option>
                                    <option value="(+-876">Jamaica (+1-876)</option>
                                    <option value="+974">Qatar (+974)</option>
                                    <option value="+965">Kuwait (+965)</option>
                                    <option value="+968">Oman (+968)</option>
                                    <option value="+973">Bahrain (+973)</option>
                                    <option value="+964">Iraq (+964)</option>
                                    <option value="+961">Lebanon (+961)</option>
                                    <option value="+962">Jordan (+962)</option>
                                    <option value="+218">Libya (+218)</option>
                                    <option value="+94">Sri Lanka (+94)</option>
                                    <option value="+960">Maldives (+960)</option>
                                    <option value="+356">Malta (+356)</option>
                                    <option value="+593">Ecuador (+593)</option>
                                    <option value="+502">Guatemala (+502)</option>
                                    <option value="+233">Ghana (+233)</option>
                                    <option value="+234">Nigeria (+234)</option>
                                    <option value="+31">Netherlands (+31)</option>
                                    <option value="+48">Poland (+48)</option>
                                    <option value="+46">Sweden (+46)</option>
                                    <option value="+47">Norway (+47)</option>
                                    <option value="+358">Finland (+358)</option>
                                    <option value="+34">Denmark (+45)</option>
                                    <option value="+351">Portugal (+351)</option>
                                    <option value="+36">Hungary (+36)</option>
                                    <option value="+48">Poland (+48)</option>
                                    <option value="+30">Greece (+30)</option>
                                    <option value="+52">Mexico (+52)</option>
                                    <option value="+420">Czech Republic (+420)</option>
                                    <option value="+386">Slovenia (+386)</option>
                                    <option value="+389">North Macedonia (+389)</option>
                                    <option value="+375">Belarus (+375)</option>
                                    <option value="+380">Ukraine (+380)</option>
                                    <option value="+65">Singapore (+65)</option>
                                    <option value="+94">Sri Lanka (+94)</option>
                                    <option value="+372">Estonia (+372)</option>
                                    <option value="+373">Moldova (+373)</option>
                                    <option value="+995">Georgia (+995)</option>
                                    <option value="+380">Ukraine (+380)</option>
                                    <option value="+259">Zambia (+259)</option>
                                    <option value="+254">Kenya (+254)</option>
                                    <!-- Add all other countries here -->
                                </datalist>
                                <script>
                                    $(document).ready(function () {
                                        $('#countryCode').select2({
                                            placeholder: 'Select a country or code',
                                            allowClear: true,
                                        });
                                    });
                                </script>
                            </div>

                            <input
                                type="tel" wire:model="phone" placeholder="Phone Number" class="form-control"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject"/>
                    </div>
                    <div class="form-group">
                <textarea
                    wire:model="message"
                    name="message"
                    id=""
                    cols="30"
                    rows="7"
                    class="form-control"
                    placeholder="Message"
                ></textarea>
                    </div>
                    <div class="form-group">
                        <input
                            type="submit"
                            value="Send Message"
                            class="btn btn-primary py-3 px-5"
                        />
                    </div>
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                </form>

            </div>
            <div class="col-md-6">
                <div class="row d-flex mb-5 contact-info justify-content-center">
                    <div class="col-md-8">
                        <div class="row mb-5">

                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Have a Questions?</h2>
                                <div class="block-23 mb-3">
                                    <ul>
                                        <li>
                          <span class="icon-map-marker  pr-4"></span
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
