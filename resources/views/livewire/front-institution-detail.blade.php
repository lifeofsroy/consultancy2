@push('title')
    {{ $institution->title }}
@endpush

<div>
    <!-- Page Header Section Starts Here -->
    <div class="pageheader" style="background-image: url({{ asset('storage') }}/{{ $pagetitle->image }});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{ $institution->title }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item text-warning"> > </li>
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Facilities</a></li>
                        <li class="breadcrumb-item text-warning"> > </li>
                        <li class="breadcrumb-item active" aria-current="page">Institutions</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header Section Ends Here -->

    <!-- Institution Section Starts Here -->
    <div class="teamMember teamMember__single padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-xl-4 col-lg-5 col-12">
                        <div class="teamMember__memberInfo">
                            <div class="teamMember__memberInfo-thumb">
                                <img src="{{ asset('storage') }}/{{ $institution->image }}"
                                    alt="rajibraj" />
                            </div>
                            <div class="teamMember__memberInfo-content">
                                <ul>
                                    <li>
                                        <span>Location :</span>
                                        <span> {{ $institution->location }}</span>
                                    </li>

                                    <li>
                                        <span>Service :</span>
                                        <span> {{ $institution->service }}</span>
                                    </li>

                                    <li>
                                        <span>Type :</span>
                                        <span> {{ $institution->type }}</span>
                                    </li>

                                    <li>
                                        <span>Document :</span>
                                        <span> <a href="#" class="text-primary" wire:click.prevent="export">Download</a> </span>
                                    </li>

                                    <li>
                                        <span>Contact :</span>
                                        <span> {{ $institution->contact }}</span>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="teamMember__memberDetails">
                            <p>
                                {!! $institution->desc !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Institution Section Ends Here -->

    <!-- Comment Section Starts Here -->
    <div class="testimonial testimonial__three padding-tb bg-img"
        style="background-image: url({{ asset('assets/front/images/bg/04.jpg') }});">
        <div class="container">
            <div class="section__header text-center me-auto">
                <h6>{{$institution->institutionComments->count()}} Replies To “{{ $institution->title }}”</h6>
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
                                <form action="https://labartisan.net/">
                                    <input type="text" placeholder="Your Name">
                                    <input type="email" placeholder="Your Email">
                                    <input type="text" placeholder="Phone Number">
                                    <input type="text" placeholder="Subject">
                                    <textarea cols="30" rows="5" placeholder="Enter Your Message"></textarea>
                                    <button type="submit" class="lab-btn">post comments</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="section__wrapper">
                            <div class="testimonial__rivew overflow-hidden">
                                <div class="testimonial__slider__three">
                                    <div class="swiper-wrapper">
                                        @foreach ($institution->institutionComments as $comment)
                                            <div class="swiper-slide">
                                                <div class="testimonial__item">
                                                    <div class="testimonial__inner">
                                                        <div class="testimonial__thumb">
                                                            <div class="thumb">
                                                                <img src="{{ asset('storage') }}/{{$comment->user->profile_photo_path}}"
                                                                    alt="testimonial" />
                                                            </div>
                                                            <div class="testimonial__author">
                                                                <div class="name">
                                                                    <h5>{{$comment->user->name}}</h5>
                                                                    <span>{{$comment->user->designation}}</span>
                                                                </div>
                                                                <div class="rating">
                                                                    @for ($i = 1; $i <= $comment->rating; $i++)
                                                                        <i class="fa-solid fa-star"></i>
                                                                    @endfor
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial__content">
                                                            <p>{{$comment->desc}}</p>
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
