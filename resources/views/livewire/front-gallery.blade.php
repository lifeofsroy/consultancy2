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
                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header Section Ends Here -->

    <!-- Gallery Section Starts Here -->
    <div class="project project__two padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6>{{ $gallerytitle->subtitle }}</h6>
                <h2>{{ $gallerytitle->title }}</h2>
            </div>
            <div class="section__wrapper">
                <div class="grid">
                    @forelse ($photos as $photo)
                        <div class="project__item">
                            <div class="project__inner">
                                <div class="project__thumb">
                                    <img src="{{ asset('storage') }}/{{ $photo->image }}" alt="gallery" />
                                </div>
                                <div class="project__content">
                                    <h4>{{ $photo->title }}</h4>
                                    <span>{{ $photo->location }}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">
                            No Institution Found
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section Ends Here -->
</div>
