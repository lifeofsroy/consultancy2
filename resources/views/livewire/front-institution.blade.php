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
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Facilities</a></li>
                        <li class="breadcrumb-item text-warning"> > </li>
                        <li class="breadcrumb-item active" aria-current="page">Institutions</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header Section Ends Here -->

    <!-- Blog Section Starts Here -->
    <div class="blog home blog--classic padding-tb">
        <div class="container">
            <div class="section__wrapper">

                <div class="sidebar__search">
                    <div class="body">
                        <form>
                            <input type="text" placeholder="Search Institutions Here" wire:model="searchTerm">
                            <button type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                </div>

                <div class="row g-4">

                    @forelse ($institutions as $institution)
                        <div class="col-6">
                            <div class="blog__item">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="{{ route('institution.detail', ['institution_slug' => $institution->slug]) }}">
                                            <img src="{{ asset('storage') }}/{{ $institution->thumb }}" alt="rajibraj" />
                                        </a>
                                        <span class="date"><i class="fa-solid fa-calendar-days"></i>{{ $institution->location }}</span>
                                    </div>
                                    <div class="blog__content">
                                        <h3><a
                                                href="{{ route('institution.detail', ['institution_slug' => $institution->slug]) }}">{{ $institution->title }}</a>
                                        </h3>

                                        <p>{{ $institution->short }}</p>
                                        <a class="read-more"
                                            href="{{ route('institution.detail', ['institution_slug' => $institution->slug]) }}">Continue
                                            Reading....</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center">
                            No Institution Found
                        </div>
                    @endforelse
                </div>

                {{ $institutions->links('front-pagination') }}
            </div>
        </div>
    </div>
    <!-- Blog Section Ends Here -->
</div>
