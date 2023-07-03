@push('title')
    {{ $sdetail->site_title }}
@endpush

<div>
    <!-- Slider Section Starts Here -->
    <div class="banner__slider__two overflow-hidden">
        <div class="swiper-wrapper" wire:ignore>
            @foreach ($sliders as $slider)
                <div class="swiper-slide">
                    <div class="banner banner__one banner__four bg-img overflow-hidden"
                        style="background-image: url({{ asset('storage/') }}/{{ $slider->image }});">
                        <div class="container">
                            <div class="banner__area">
                                <div class="row {{ $slider->type === 'middle' ? 'justify-content-center ' : '' }}">
                                    <div class="col-lg-6 col-12 {{ $slider->type === 'right' ? 'offset-lg-6 ' : '' }}">
                                        <div class="banner__content">
                                            <h6>{{ $slider->subtitle }}n</h6>
                                            <h2>{{ $slider->title }}</h2>
                                            <div class="banner__btngroup {{ $slider->type === 'middle' ? 'justify-content-sm-center ' : '' }}">

                                                @if ($slider->url)
                                                    <a class="lab-btn" href="{{ $slider->url }}">Know More</a>
                                                @endif

                                                @if ($slider->video)
                                                    <a class="video__btn" data-rel="lightcase" href="{{ $slider->video }}">
                                                        <i class="fa-solid fa-circle-play"></i>
                                                        <span>Video Presentation</span>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Slider Section Ends Here -->

    <!-- notice Section Starts Here -->
    <div class="feature feature__three padding-tb">
        <div class="container">
            <div class="feature__area">
                <div class="row g-4 justify-content-center">
                    @foreach ($features as $feature)
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="feature__item" style="background-color: {{ $feature->color }};">
                                <div class="feature__inner">
                                    <div class="feature__thumb">
                                        <img src="{{ asset('storage') }}/{{ $feature->icon }}" alt="feature icon" />
                                    </div>
                                    <div class="feature__content">
                                        <h4>{{ $feature->title }}</h4>
                                        <p>{{ $feature->desc }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="feature__item" style="padding: 20px 25px; background-color: #96f1cb45;">
                            <div class="feature__inner">
                                <div class="section__header text-center">
                                    <h6>Notice Board</h6>
                                </div>
                                <marquee style="height: 233px;" behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();"
                                    scrollamount=4>
                                    @foreach ($notices as $notice)
                                        <p class="text-light my-4">
                                            <a class="text-primary" href="{{ route('notice.detail', ['notice_slug' => $notice->slug]) }}"
                                                style="font-size: 15px;">{{ $notice->title }}</a>
                                            <hr>
                                        </p>
                                    @endforeach
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- notice Section ends Here -->

    <!-- Welcome Section Starts Here -->
    <div class="about about__one padding-tb bg-color">
        <div class="container">
            <div class="row g-5 align-items-end flex-row-reverse">
                <div class="col-lg-6 col-12 ps-lg-4">
                    <div class="about__content">
                        <h6>{{ $welcometitle->subtitle }}</h6>
                        <h2>{{ $welcometitle->title }}</h2>

                        <p>{{ $welcome->desc }}</p>

                        <ul>
                            <li class="w-100">
                                <div class="icon">
                                    <x-icon class="icon-color absolute h-full w-full" name="{{ $welcome->icon1 }}" />
                                </div>
                                <div class="text">
                                    <h6>{{ $welcome->title1 }}</h6>
                                    <p>{{ $welcome->text1 }}</p>
                                </div>
                            </li>

                            <li class="w-100">
                                <div class="icon">
                                    <x-icon class="icon-color absolute h-full w-full" name="{{ $welcome->icon2 }}" />
                                </div>
                                <div class="text">
                                    <h6>{{ $welcome->title2 }}</h6>
                                    <p>{{ $welcome->text2 }}</p>
                                </div>
                            </li>
                        </ul>

                        <div class="about__footer">
                            <div class="about__author">
                                <div class="thumb">
                                    <img src="{{ asset('storage') }}/{{ $welcome->image }}" alt="about author" />
                                </div>
                                <div class="content">
                                    <h6><a href="{{ route('about') }}">{{ $welcome->name }}</a></h6>
                                    <span>{{ $welcome->position }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="about__thumb">
                        <div class="row g-4">
                            <div class="thumb thumb--2 text-end">
                                <img src="{{ asset('storage') }}/{{ $welcome->image1 }}" alt="welcome" />

                                <div class="thumb--experience text-start">
                                    <img src="{{ asset('assets/front/images/about/icon/03.png') }}" alt="Icon" />
                                    <h5>We're ready to <br /> assist you</h5>
                                </div>

                                <div class="floating-img">
                                    <img src="{{ asset('storage') }}/{{ $welcome->image2 }}" alt="welcome" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome Section Ends Here -->

    <!-- Services Section Starts Here -->
    <div class="service service__three bg-title padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6 class="text-warning">{{ $servicetitle->subtitle }}</h6>
                <h2>{{ $servicetitle->title }}</h2>
            </div>
            <div class="section__wrapper" wire:ignore>
                <div class="service__slider overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach ($allservices as $allservice)
                            <div class="swiper-slide">
                                <div class="service__item">
                                    <div class="service__inner text-center">
                                        <div class="service__thumb">
                                            <a href="{{ route('service.detail', ['service_slug' => $allservice->slug]) }}">
                                                <img src="{{ asset('storage') }}/{{ $allservice->thumb }}" alt="service" />
                                            </a>
                                        </div>
                                        <div class="service__content">

                                            <span>{{ $allservice->serviceCategory->name }}</span>
                                            <h4>
                                                <a href="{{ route('service.detail', ['service_slug' => $allservice->slug]) }}">{{ $allservice->title }}
                                                </a>
                                            </h4>
                                            <p>{{ $allservice->short }}</p>
                                            <a class="read-more" href="{{ route('service.detail', ['service_slug' => $allservice->slug]) }}">more
                                                details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="service__pagination"></div>
                </div>
                <div class="infotext text-center">
                    <p>To get more about our services <a href="{{ route('service.category') }}">Click Here</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section Ends Here -->

    <!-- Appointment Section Starts Here -->
    <div class="about about__four padding-tb">
        <div class="container">
            <div class="row g-4">

                <div class="col-lg-6 col-12">
                    <div class="about__thumb">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="thumb">
                                    <img class="w-100" src="{{ asset('storage') }}/{{ $appointment->image }}" alt="about" />
                                    <div class="thumb--experience text-start">
                                        <img src="{{ asset('assets/front/images/about/icon/03.png') }}" alt="Icon">
                                        <h5>100% consultancy <br> services</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about__content">
                        <h4>{{ $appointment->title }}</h4>
                        <ul>
                            <li class="w-100">
                                <div class="icon">
                                    <x-icon class="icon-color absolute h-full w-full" name="{{ $appointment->icon1 }}" />
                                </div>
                                <div class="text">
                                    <h6>{{ $appointment->title1 }}</h6>
                                    <p>{{ $appointment->text1 }}</p>
                                </div>
                            </li>

                            <li class="w-100">
                                <div class="icon">
                                    <x-icon class="icon-color absolute h-full w-full" name="{{ $appointment->icon2 }}" />
                                </div>
                                <div class="text">
                                    <h6>{{ $appointment->title2 }}</h6>
                                    <p>{{ $appointment->text2 }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <h2>Quick Online Consultancy</h2>
                    <form class="p-4" wire:submit.prevent="appointment">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input class="form-control {{ $errors->first('name') ? ' is-invalid' : '' }}" id="name" type="text"
                                        wire:model.lazy="name" required>

                                    @error('name')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input class="form-control {{ $errors->first('phone') ? ' is-invalid' : '' }}" id="phone" type="text"
                                        wire:model="phone" required>
                                    @error('phone')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mt-2">
                                    <label for="email">Email address</label>
                                    <input class="form-control {{ $errors->first('email') ? ' is-invalid' : '' }}" id="email" type="email"
                                        wire:model.lazy="email" required>
                                    @error('email')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group mt-2">
                                    <label for="dob">Date of Birth</label>
                                    <input class="form-control {{ $errors->first('dob') ? ' is-invalid' : '' }}" id="dob" type="date"
                                        wire:model.lazy="dob" required>
                                    @error('dob')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="form-group mt-2">
                                    <label for="datetime">Appointment Date-Time</label>
                                    <input class="form-control {{ $errors->first('datetime') ? ' is-invalid' : '' }}" id="datetime"
                                        type="datetime-local" wire:model.lazy="datetime" required>
                                    @error('datetime')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mt-2">
                                    <label for="category">Category</label>
                                    <select class="form-control {{ $errors->first('category') ? ' is-invalid' : '' }}" id="category"
                                        wire:model.lazy="category" required>
                                        <option class="text-secondary" value="">Select an option</option>
                                        @foreach ($scats as $scat)
                                            <option value="{{ $scat->id }}">{{ $scat->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category')
                                        <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            @if (!is_null($services))
                                <div class="col-md-6">
                                    <div class="form-group mt-2">
                                        <label for="sservice">Service</label>
                                        <select class="form-control {{ $errors->first('service') ? ' is-invalid' : '' }}" id="sservice"
                                            wire:model.lazy="service">
                                            @foreach ($services as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                            @endforeach

                                        </select>
                                        @error('service')
                                            <small class="form-text text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            @endif

                            <div class="col-md-12">
                                <div class="form-group mt-2">
                                    <label for="msz">Message</label>
                                    <textarea class="form-control {{ $errors->first('msz') ? ' is-invalid' : '' }}" id="msz" cols="30" rows="3"
                                        placeholder="(optional)" wire:model.lazy="msz">
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <button class="lab-btn mt-4" type="submit">book an appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment Section Ends Here -->

    <!-- faq Section Starts Here -->
    <div class="specialtie specialtie__three padding-tb bg-img"
        style="background-image: url({{ asset('assets/front/images/bg/03.jpg') }}); background-position: center;">
        <div class="container">
            <div class="row g-4">
                <div class="col-xl-4 col-12">
                    <div class="section__header text-xl-start text-center">
                        <h6 class="text-warning">Common Questions</h6>
                    </div>
                    <div class="faq__content">
                        <div class="accordion accordion-flush" id="faqAccordion">
                            @foreach ($faqs as $faq)
                                <div class="accordion-item" style="border: 1px solid #f2f6f91f;">
                                    <h6 class="accordion-header" id="faq{{ $faq->id }}">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $faq->id }}" type="button" aria-expanded="false"
                                            aria-controls="collapse{{ $faq->id }}">
                                            <span class="accordion-icon"><i class="fa-solid fa-question"></i></span>
                                            <span class="accordion-headerText text-light">{{ $faq->question }}</span>
                                        </button>
                                    </h6>
                                    <div class="accordion-collapse collapse" id="collapse{{ $faq->id }}" data-bs-parent="#faqAccordion"
                                        aria-labelledby="faq{{ $faq->id }}">
                                        <div class="accordion-body" style="padding-inline-start: 1.5em">
                                            <p class="text-light mt-3">{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-12">
                    <div class="section__wrapper" wire:ignore>
                        <div class="row g-4 justify-content-center">
                            @foreach ($counters as $counter)
                                <div class="col-md-6 col-12">
                                    <div class="specialtie__item">
                                        <div class="specialtie__inner">
                                            <div class="specialtie__thumb">
                                                <img src="{{ asset('storage') }}/{{ $counter->icon }}" alt="{{ $counter->title }}" />
                                            </div>
                                            <div class="specialtie__content">
                                                <h2 class="odometer mb-0" data-odometer-final="{{ $counter->value }}">0</h2>
                                                <span>{{ $counter->unit }}</span>
                                                <h5>{{ $counter->title }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="infotext mt-4 text-center">
                <p>To get more about FAQs <a href="{{ route('faq') }}">Click Here</a></p>
            </div>
        </div>
    </div>
    <!-- faq Section Ends Here -->

    <!-- institution Starts Here -->
    <div class="service service__five bg-color padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6>Best Institutions</h6>
                <h2>We Provide best Institutions</h2>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    @foreach ($institutions as $institution)
                        <div class="col-xl-4 col-sm-6 col-12">
                            <div class="service__item">
                                <div class="service__inner">
                                    <div class="service__thumb">
                                        <a href="{{ route('institution.detail', ['institution_slug' => $institution->slug]) }}">
                                            <img src="{{ asset('storage') }}/{{ $institution->thumb }}" alt="institution" />
                                        </a>
                                    </div>
                                    <div class="service__content">
                                        <span>{{ $institution->location }}</span>
                                        <h4><a
                                                href="{{ route('institution.detail', ['institution_slug' => $institution->slug]) }}">{{ $institution->title }}</a>
                                        </h4>
                                        <p>We are provid best service for high level success your business</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="infotext text-center">
                    <p>To get more about our Institutions <a href="{{ route('facility.institution') }}">Click Here</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- institution Ends Here -->

    <!-- Testimonial Section Starts Here -->
    <div class="testimonial padding-tb bg-img" style="background-image: url({{ asset('assets/front/images/bg/02.jpg') }}); padding-top: 1px;">
        <div class="testimonial__area">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6 col-12">
                        <div class="section__header text-lg-start mb-lg-0 text-center">
                            <h6 class="text-warning">{{ $testititle->subtitle }}</h6>
                            <h2>{{ $testititle->title }}</h2>
                            <div class="testimonial__navigation justify-content-center justify-content-lg-start">
                                <div class="testimonial__prev navi"><i class="fa-solid fa-arrow-left"></i></div>
                                <div class="testimonial__next navi"><i class="fa-solid fa-arrow-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="section__wrapper" wire:ignore>
                            <div class="testimonial__rivew ps-sm-5 overflow-hidden">
                                <div class="testimonial__slider">
                                    <div class="swiper-wrapper">
                                        @foreach ($testimonials as $testimonial)
                                            <div class="swiper-slide">
                                                <div class="testimonial__item">
                                                    <div class="testimonial__inner">
                                                        <div class="testimonial__thumb">
                                                            <div class="thumb">
                                                                <img src="{{ asset('storage') }}/{{ $testimonial->image }}" alt="testimonial" />
                                                                <i class="fa-solid fa-quote-right"></i>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial__content">
                                                            <p>{{ $testimonial->msz }}</p>
                                                            <div class="testimonial__author">
                                                                <div class="name">
                                                                    <h5>{{ $testimonial->name }}</h5>
                                                                    <span>{{ $testimonial->position }}</span>
                                                                </div>
                                                                <div class="rating">
                                                                    @for ($i = 1; $i <= $testimonial->rating; $i++)
                                                                        <i class="fa-solid fa-star"></i>
                                                                    @endfor
                                                                </div>
                                                            </div>
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
    <!-- Testimonial Section Ends Here -->

    <!-- Courses Section Starts Here -->
    <div class="blog home padding-tb bg-primary">
        <div class="container">
            <div class="section__header text-center">
                <h6 class="text-warning">{{ $coursetitle->subtitle }}</h6>
                <h2>{{ $coursetitle->title }}</h2>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    @foreach ($courses as $course)
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="blog__item">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="{{ route('course.detail', ['course_slug' => $course->slug]) }}"><img
                                                src="{{ asset('storage') }}/{{ $course->thumb }}" alt="blog thumb" /></a>
                                        <span class="date"><i class="fa-solid fa-calendar-days"></i>
                                            {{ $course->courseCategory->name }}</span>
                                    </div>
                                    <div class="blog__content">
                                        <h4><a href="{{ route('course.detail', ['course_slug' => $course->slug]) }}">{{ $course->title }}</a>
                                        </h4>
                                        <p>{{ Str::limit($course->short, 70) }}</p>
                                        <a class="read-more" href="{{ route('course.detail', ['course_slug' => $course->slug]) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="infotext mt-4 text-center">
                    <p>To get more about our Courses <a href="{{ route('facility.course') }}">Click Here</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses Section Ends Here -->

    <!-- hr Starts Here -->
    <div class="container">
        <hr class="m-0">
    </div>
    <!-- hr Ends Here -->

    <!-- Sponsor Section Starts Here -->
    <div class="sponsor" wire:ignore>
        <div class="container">
            <div class="sponsor__slider overflow-hidden">
                <div class="swiper-wrapper">
                    @foreach ($partners as $partner)
                        <div class="swiper-slide">
                            <div class="sponsor__item">
                                <div class="sponsor__thumb">
                                    <a href="{{ $partner->url }}">
                                        <img src="{{ asset('storage') }}/{{ $partner->image }}" alt="sponsor thumb" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Sponsor Section Ends Here -->

    @push('script')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <x-addedalert />
    @endpush
</div>
