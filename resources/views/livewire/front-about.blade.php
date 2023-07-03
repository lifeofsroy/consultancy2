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
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header Section Ends Here -->

    <!-- Feature Section Starts Here -->
    <div class="feature feature__two padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6>{{$featuretitle->subtitle}}</h6>
                <h2>{{$featuretitle->title}}</h2>
            </div>
            <div class="section__wrapper">
                <div class="row g-4 justify-content-center">
                    @foreach ($features as $feature)
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12">
                            <div class="feature__item">
                                <div class="feature__inner">
                                    <div class="feature__thumb">
                                        <x-icon class="icon-color" name="{{ $feature->icon }}" width="100" />
                                    </div>
                                    <div class="feature__content">
                                        <h4>{{ $feature->title }}</h4>
                                        <p>{{ $feature->desc }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Section Ends Here -->

    <!-- Misson Section Starts Here -->
    <div class="misson padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6>{{$welcometitle->subtitle}}</h6>
                <h2>{{$welcometitle->title}}</h2>
            </div>
            <div class="section__wrapper">
                <ul class="nav nav-tabs justify-content-center misson__tabul" id="myTab" role="tablist">
                    @foreach ($welcomes as $welcometab)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link {{ $welcometab->id === 1 ? 'active' : '' }} lab-btn" id="tab{{ $welcometab->id }}"
                                data-bs-toggle="tab" data-bs-target="#tab{{ $welcometab->id }}-pane" type="button" role="tab"
                                aria-controls="tab{{ $welcometab->id }}-pane" aria-selected="true">{{ $welcometab->section }}</button>
                        </li>
                    @endforeach
                </ul>
                <div class="tab-content" id="myTabContent">
                    @foreach ($welcomes as $welcomepane)
                        <div class="tab-pane fade {{ $welcomepane->id === 1 ? 'show active' : '' }}" id="tab{{ $welcomepane->id }}-pane"
                            role="tabpanel" aria-labelledby="tab{{ $welcomepane->id }}" tabindex="0">
                            <div class="misson__item">
                                <div class="misson__inner">
                                    <div class="misson__thumb">
                                        <img src="{{ asset('storage') }}/{{ $welcomepane->image }}" alt="rajibraj" />
                                    </div>
                                    <div class="misson__content">
                                        <h4>{{ $welcomepane->title }}</h4>
                                        <p>{{ $welcomepane->desc }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Misson Section Ends Here -->

    <!-- Gallery Section Starts Here -->
    <div class="project project__two padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6>{{$gallerytitle->subtitle}}</h6>
                <h2>{{$gallerytitle->title}}</h2>
            </div>
            <div class="section__wrapper">

                <div class="grid">
                    @foreach ($photos as $photo)
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
                    @endforeach
                </div>
                <div class="mt-4 text-center">
                    <a class="lab-btn" href="{{ route('gallery') }}">view all Photos</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Section Ends Here -->
</div>
