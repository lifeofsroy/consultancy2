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
                        <li class="breadcrumb-item active" aria-current="page">Cookie Policy</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header Section Ends Here -->

    <!-- Page Body Starts Here -->
    <div class="blog home blog--single padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-5">
                    <div class="col-lg-12 col-12">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="blog__item">
                                    <div class="blog__inner">
                                        <div class="blog__content">
                                            <h2 class="mb-4 text-center">{{ $cookie->title }}</h2>

                                            <p>{!! $cookie->desc !!}</p>

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
    <!-- Page Body Ends Here -->
</div>
