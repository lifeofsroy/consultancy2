@push('title')
    {{ $coursecat->name }}
@endpush

<div>
    <!-- Page Header Section Starts Here -->
    <div class="pageheader" style="background-image: url({{ asset('storage') }}/{{ $pagetitle->image }});">
        <div class="container">
            <div class="pageheader__content">
                <h2>{{ $coursecat->name }}</h2>
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
    <div class="blog home padding-tb">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-5">
                    <div class="col-lg-8 col-12">
                        <div class="row g-4">
                            @forelse($coursecat->courses as $course)
                                <div class="col-sm-6 col-12">
                                    <div class="blog__item">
                                        <div class="blog__inner">
                                            <div class="blog__thumb">
                                                <a href="{{ route('course.detail', ['course_slug' => $course->slug]) }}">
                                                    <img src="{{ asset('storage') }}/{{ $course->thumb }}" alt="blog thumb" />
                                                </a>
                                                <span class="date">
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    {{ $course->courseCategory->name }}
                                                </span>
                                            </div>
                                            <div class="blog__content">
                                                <h4><a href="{{ route('course.detail', ['course_slug' => $course->slug]) }}">{{ $course->title }}/a>
                                                </h4>
                                                <p>{{ $course->short }}</p>
                                                <a class="read-more" href="{{ route('course.detail', ['course_slug' => $course->slug]) }}">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center">
                                    No Course Found
                                </div>
                            @endforelse

                        </div>

                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sidebar">
                            <div class="row g-4">

                                <div class="col-12">
                                    <div class="sidebar__categorie">
                                        <div class="head">
                                            <h5>all Categories</h5>
                                        </div>
                                        <div class="body">
                                            <div class="content">
                                                <ul>
                                                    @foreach ($cats as $cat)
                                                        <li>
                                                            <a class="{{ $cat->name == $coursecat->name ? 'text-danger' : '' }}"
                                                                href="{{ route('course.by.category', ['coursecat_slug' => $cat->slug]) }}">
                                                                <i class="fa-solid fa-folder-closed"></i>
                                                                {{ $cat->name }}
                                                            </a>
                                                            <span
                                                                class="{{ $cat->name == $coursecat->name ? 'text-danger' : '' }}">{{ $cat->courses->count() }}</span>
                                                        </li>
                                                    @endforeach
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
</div>
