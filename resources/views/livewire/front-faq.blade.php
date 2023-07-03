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
                        <li class="breadcrumb-item active" aria-current="page">Faq</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header Section Ends Here -->


    <!-- Faq Section Starts Here -->
    <div class="faq padding-tb">
        <div class="container">
            <div class="section__header text-center">
                <h6>{{ $faqtitle->subtitle }}</h6>
                <h2>{{ $faqtitle->title }}</h2>
            </div>
            <div class="section__wrapper">
                <div class="row g-4">

                    @foreach ($faqs->chunk(2) as $chunk)
                        <div class="col-lg-6">
                            <div class="faq__content">
                                <div class="accordion accordion-flush" id="faqAccordion">
                                    @foreach ($chunk as $faq)
                                        <div class="accordion-item">
                                            <h6 class="accordion-header" id="faq{{ $faq->id }}">
                                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{ $faq->id }}" type="button" aria-expanded="false"
                                                    aria-controls="collapse{{ $faq->id }}">
                                                    <span class="accordion-icon"><i class="fa-solid fa-question"></i></span>
                                                    <span class="accordion-headerText">{{ $faq->question }}</span>
                                                </button>
                                            </h6>
                                            <div class="accordion-collapse collapse" id="collapse{{ $faq->id }}" data-bs-parent="#faqAccordion"
                                                aria-labelledby="faq{{ $faq->id }}">
                                                <div class="accordion-body">
                                                    <p> {{ $faq->answer }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Faq Section Ends Here -->
</div>
