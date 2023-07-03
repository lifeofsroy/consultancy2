@push('title')
    {{ $course->title }}
@endpush

<div>
    <!-- Page Header Section Starts Here -->
    <div class="pageheader" style="background-image: url({{ asset('storage') }}/{{ $pagetitle->image }});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{ $course->title }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item text-warning"> > </li>
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Facilities</a></li>
                        <li class="breadcrumb-item text-warning"> > </li>
                        <li class="breadcrumb-item active" aria-current="page">Courses</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header Section Ends Here -->

    <!-- Course Section Starts Here -->
    <div class="blog home blog--single padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-5">
                    <div class="col-lg-8 col-12">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="blog__item">
                                    <div class="blog__inner">
                                        <div class="blog__thumb">
                                            <img src="{{ asset('assets/front/images/blog/01.jpg') }}" alt="rajibraj" />
                                            <span class="date"><i class="fa-solid fa-calendar-days"></i>
                                                {{ $course->courseCategory->name }}</span>
                                        </div>
                                        <div class="blog__content">
                                            <h2>{{ $course->title }}</h2>
                                            <p>{!! $course->desc !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sidebar">
                            <div class="row g-4">

                                <div class="col-12">
                                    <div class="sidebar__recentpost">
                                        <div class="head">
                                            <h5>Latest Institutes</h5>
                                        </div>
                                        <div class="body">
                                            <ul>
                                                @foreach ($institutions as $institution)
                                                    <li>
                                                        <div class="thumb">
                                                            <a
                                                                href="{{ route('institution.detail', ['institution_slug' => $institution->slug]) }}"><img
                                                                    src="{{ asset('storage') }}/{{ $institution->thumb }}"
                                                                    alt="rajibraj"></a>
                                                        </div>
                                                        <div class="content">
                                                            <h6><a
                                                                    href="{{ route('institution.detail', ['institution_slug' => $institution->slug]) }}">{{ $institution->title }}</a>
                                                            </h6>
                                                            <span>{{ $institution->location }}</span>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sidebar__categorie">
                                        <div class="head">
                                            <h5>Course Categories</h5>
                                        </div>
                                        <div class="body">
                                            <div class="content">
                                                <ul>
                                                    @foreach ($cats as $cat)
                                                        <li>
                                                            <a class="{{ $cat->name == $course->courseCategory->name ? 'text-danger' : 'text-primary' }}"
                                                                href="{{ route('course.by.category', ['coursecat_slug' => $cat->slug]) }}"><i
                                                                    class="fa-solid fa-folder-closed"></i>
                                                                {{ $cat->name }}</a>
                                                            <span
                                                                class="{{ $cat->name == $course->courseCategory->name ? 'text-danger' : '' }}">{{ $cat->courses->count() }}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="sidebar__helps">
                                        <div class="head">
                                            <h5>Need Help?</h5>
                                        </div>
                                        <div class="body">
                                            <div class="content">
                                                <ul>
                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{ asset('assets/front/images/header/icon/call.png') }}"
                                                                alt="rajibraj">
                                                        </div>
                                                        <div class="content">
                                                            <span>We Are Available</span>
                                                            <p>{{$contact->phone}}</p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{ asset('assets/front/images/header/icon/mail.png') }}"
                                                                alt="rajibraj">
                                                        </div>
                                                        <div class="content">
                                                            <span>We Are Active</span>
                                                            <p>{{$contact->email}}</p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="thumb">
                                                            <img src="{{ asset('assets/front/images/header/icon/location.png') }}"
                                                                alt="rajibraj">
                                                        </div>
                                                        <div class="content">
                                                            <span>Our Head Office</span>
                                                            <p>{{$contact->address}}</p>
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
    <!-- Course Section Ends Here -->

    <!-- Comment Section Starts Here -->
    <div class="testimonial testimonial__three padding-tb bg-img"
        style="background-image: url({{ asset('assets/front/images/bg/04.jpg') }});">
        <div class="container">
            <div class="section__header text-center me-auto">
                <h6>{{$course->courseComments->count()}} Replies To “{{ $course->title }}”</h6>
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
                                        @foreach ($course->courseComments as $comment)
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
