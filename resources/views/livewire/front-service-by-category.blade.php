@push('title')
    {{ $cat->name }}
@endpush

<div>
    <!-- Page Header Section Starts Here -->
    <div class="pageheader" style="background-image: url({{ asset('storage') }}/{{ $pagetitle->image }});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{ $cat->name }}</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item text-warning"> > </li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header Section Ends Here -->

    <!-- Services Section Starts Here -->
    <div class="service bg-color padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6>{{$sertitle->subtitle}}</h6>
                <h2>{{$sertitle->title}}</h2>
            </div>
            <div class="section__wrapper">
                <div class="row gx-4 gy-5">
                    @forelse ($cat->services as $service)
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="service__item">
                                <div class="service__inner text-center">
                                    <div class="service__thumb">
                                        <a href="{{ route('service.detail', ['service_slug' => $service->slug]) }}">
                                            <img src="{{ asset('storage') }}/{{ $service->thumb }}"
                                                alt="service" />
                                        </a>
                                    </div>
                                    <div class="service__content">
                                        <span>{{ $cat->name }}</span>
                                        <h4><a
                                                href="{{ route('service.detail', ['service_slug' => $service->slug]) }}">{{ $service->title }}</a>
                                        </h4>
                                        <p>{{ $service->short }}s</p>
                                        <a href="{{ route('service.detail', ['service_slug' => $service->slug]) }}"
                                            class="round-btn"><i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">
                            No Service Found
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Services Section Ends Here -->
</div>
