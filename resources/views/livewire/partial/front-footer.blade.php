<footer class="footer">
    <div class="footer__top padding-tb bg-title overflow-hidden">
        <div class="container">
            <div class="row g-5 g-lg-4">
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer__about">
                        <div class="footer__title">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/front/images/logo.png') }}" alt="logo" width="185" />
                                </a>
                            </div>
                        </div>

                        <p>{{ $footer->desc }}</p>
                        <ul>
                            @foreach ($socials as $social)
                                <li>
                                    <a href="{{ $social->url }}">
                                        <i class="fa-brands {{ $social->icon }}" style="color:blue; line-height: 2.5;"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer__page">
                        <div class="footer__title">
                            <h5>Important Links</h5>
                        </div>
                        <div class="footer__wrapper">
                            <ul>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('service.category') }}">services</a></li>
                                <li><a href="{{ route('facility.course') }}">Courses</a></li>
                                <li><a href="{{ route('facility.institution') }}">Institutions</a></li>
                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                <li><a href="{{ route('faq') }}">FAQ</a></li>
                                <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                <li><a href="{{ route('terms.show') }}">Terms</a></li>
                                <li><a href="{{ route('policy.show') }}">Policy</a></li>
                                <li><a href="{{ route('cookie-policy') }}">Cookie</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer__post">
                        <div class="footer__title">
                            <h5>Amazing Services</h5>
                        </div>
                        <div class="footer__wrapper">
                            <ul>
                                @foreach ($scats as $scat)
                                    <li>
                                        <div class="thumb">
                                            <a href="{{ route('service.by.category', ['servicecat_slug' => $scat->slug]) }}">
                                                <img src="{{ asset('storage') }}/{{ $scat->image }}" alt="recentpost" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h6><a
                                                    href="{{ route('service.by.category', ['servicecat_slug' => $scat->slug]) }}">{{ $scat->name }}</a>
                                            </h6>
                                            <span class="date">{{ Str::limit($scat->short, 40) }}</span>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="footer__gallery">
                        <div class="footer__title">
                            <h5>Recent Photos</h5>
                        </div>
                        <div class="footer__wrapper">
                            <ul>
                                @foreach ($photos as $photo)
                                    <li>
                                        <a data-rel="lightcase" href="{{ asset('storage') }}/{{ $photo->image }}">
                                            <img src="{{ asset('storage') }}/{{ $photo->image }}" alt="{{ $photo->title }}" />
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__bottom" style="padding-block: 5px;">
        <div class="container">
            <div class="footer__copytext text-center">
                <p>&copy; {{ date('Y') }} <a href="{{route('home')}}">{{ $footer->name }}</a> | {{ $footer->copyright }}</p>
            </div>
        </div>
    </div>

</footer>
