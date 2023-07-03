@push('title')
    {{ $service->title }}
@endpush

<div>
    <!-- Page Header Section Starts Here -->
    <div class="pageheader" style="background-image: url({{ asset('storage') }}/{{ $pagetitle->image }});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{ $service->title }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item text-warning"> > </li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header Section Ends Here -->

    <!-- Services Section Starts Here -->
    <div class="service service__single padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center flex-row-reverse">
                    <div class="col-lg-8 col-12">
                        <div class="mainarea">
                            <div class="service__item">
                                <div class="service__inner">
                                    <div class="service__thumb">
                                        <img src="{{ asset('storage') }}/{{ $service->image }}" alt="rajibraj" />
                                    </div>
                                    <div class="service__content">
                                        <h4>{{ $service->title }}</h4>
                                        <p>{!! $service->desc !!}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sidebar">
                            <div class="row g-4">
                                <div class="col-lg-12 col-sm-6 col-12">
                                    <div class="sidebar__service">
                                        <div class="head">
                                            <h5>Amazing Services</h5>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                @foreach ($cats as $cat)
                                                    <li>
                                                        <div class="thumb">
                                                            <a href="{{ route('service.by.category', ['servicecat_slug' => $cat->slug]) }}">
                                                                <x-icon class="text-danger" name="{{ $cat->icon }}" width="50" />
                                                            </a>
                                                        </div>
                                                        <div class="content">
                                                            <h5>
                                                                <a
                                                                    href="{{ route('service.by.category', ['servicecat_slug' => $cat->slug]) }}">{{ $cat->name }}</a>
                                                            </h5>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-6 col-12">
                                    <div class="sidebar__brochure">
                                        <div class="head">
                                            <h5>Service Brochure</h5>
                                        </div>
                                        <div class="body">
                                            <div class="thumb">
                                                <img src="{{ asset('storage') }}/{{ $service->thumb }}" alt="rajibraj">
                                            </div>
                                            <div class="content">
                                                <p>{{ $service->short }}</p>
                                                <a class="lab-btn" href="#">download Pdf</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-sm-6 col-12">
                                    <div class="sidebar__helps">
                                        <div class="head">
                                            <h5>Need Help?</h5>
                                        </div>
                                        <div class="body">
                                            <div class="content">
                                                <ul>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{ asset('assets/front/images/header/icon/call.png') }}" alt="rajibraj">
                                                        </div>
                                                        <div class="content">
                                                            <span>We Are Available</span>
                                                            <p>{{ $contact->phone }}</p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{ asset('assets/front/images/header/icon/mail.png') }}" alt="rajibraj">
                                                        </div>
                                                        <div class="content">
                                                            <span>We Are Active</span>
                                                            <p>{{ $contact->email }}</p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{ asset('assets/front/images/header/icon/location.png') }}" alt="rajibraj">
                                                        </div>
                                                        <div class="content">
                                                            <span>Our Head Office</span>
                                                            <p>{{ $contact->address }}</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section Ends Here -->

    <!-- Comment Section Starts Here -->
    <div class="testimonial testimonial__three padding-tb bg-img" style="background-image: url({{ asset('assets/front/images/bg/04.jpg') }});">
        <div class="container">
            <div class="section__header me-auto text-center">
                <h6>{{ $service->serviceComments->count() }} Replies To “{{ $service->title }}”</h6>
                <h2>Leave A Comment</h2>
            </div>
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-xl-6 col-12">
                        <div class="sidebar__commentForm">
                            <div class="head">
                                <h5>Leave A Comment</h5>
                            </div>
                            <div class="body">
                                <form action="">
                                    <input type="text" placeholder="Your Name">
                                    <input type="email" placeholder="Your Email">
                                    <input type="text" placeholder="Phone Number">
                                    <input type="text" placeholder="Subject">
                                    <textarea cols="30" rows="5" placeholder="Enter Your Message"></textarea>
                                    <button class="lab-btn" type="submit">post comments</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="section__wrapper">
                            <div class="testimonial__rivew overflow-hidden">
                                <div class="testimonial__slider__three">
                                    <div class="swiper-wrapper">
                                        @foreach ($service->serviceComments as $comment)
                                            <div class="swiper-slide">
                                                <div class="testimonial__item">
                                                    <div class="testimonial__inner">
                                                        <div class="testimonial__thumb">
                                                            @if (!$comment->user->profile_photo_path == null)
                                                                <div class="thumb">
                                                                    <img src="{{ asset('storage') }}/{{ $comment->user->profile_photo_path }}"
                                                                        alt="testimonial" />
                                                                </div>
                                                            @endif
                                                            <div class="testimonial__author">
                                                                <div class="name">
                                                                    <h5>{{ $comment->user->name }}</h5>
                                                                    <span>{{ $comment->user->designation }}</span>
                                                                </div>
                                                                <div class="rating">
                                                                    @for ($i = 1; $i <= $comment->rating; $i++)
                                                                        <i class="fa-solid fa-star"></i>
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial__content">
                                                            <p>{{ $comment->desc }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Comment Section Ends Here -->
</div>
