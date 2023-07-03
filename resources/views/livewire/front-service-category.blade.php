@push('title')
    {{ $pagetitle->title }}
@endpush

<div>
    <!-- Page Header Section Starts Here -->
    <div class="pageheader" style="background-image: url({{ asset('storage') }}/{{ $pagetitle->image }});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{ $pagetitle->heading }}</h2>
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
    <div class="service service__two padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6>{{$cattitle->subtitle}}</h6>
                <h2>{{$cattitle->title}}</h2>
            </div>
            <div class="section__wrapper">
                <div class="row g-4">
                    @forelse ($scats as $scat)
                        <div class="col-lg-4 col-sm-6 col-12">
                            <div class="service__item position-relative">
                                <div class="pp-fornt">
                                    <div class="service__inner text-center">
                                        <div class="service__thumb">
                                            <a href="{{ route('service.by.category', ['servicecat_slug' => $scat->slug]) }}">

                                                <x-icon class="text-danger" name="{{ $scat->icon }}" width="100" />
                                            </a>
                                        </div>
                                        <div class="service__content">
                                            <h4><a
                                                    href="{{ route('service.by.category', ['servicecat_slug' => $scat->slug]) }}">{{ $scat->name }}</a>
                                            </h4>
                                            <p>{{ $scat->short }}</p>
                                            <a class="read-more text-danger"
                                                href="{{ route('service.by.category', ['servicecat_slug' => $scat->slug]) }}">more details</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pp-back" style="background-image: url({{ asset('storage') }}/{{ $scat->image }});">
                                    <a class="lab-btn" href="{{ route('service.by.category', ['servicecat_slug' => $scat->slug]) }}">more details</a>
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
