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
                        <li class="breadcrumb-item"><a href="{{ route('contact') }}">Home</a></li>
                        <li class="breadcrumb-item text-warning"> > </li>
                        <li class="breadcrumb-item active" aria-current="page">Contacts</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header Section Ends Here -->

    <!-- contact Section Starts Here -->
    <div class="section__header text-center" style="padding-top: 80px;">
        <h6>{{ $formtitle->subtitle }}</h6>
        <h2>{{ $formtitle->title }}</h2>
    </div>
    <div class="testimonial testimonial__three" style="padding-bottom: 80px;">
        <div class="container">
            <div class="section__wrapper">
                <div class="row g-4">
                    <div class="col-xl-6 col-12">
                        <div class="sidebar__commentForm p-2">
                            <div class="head">
                                <h5 class="px-4">Leave A Query</h5>
                            </div>
                            <form class="p-4" wire:submit.prevent="contactRequest">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input class="form-control {{ $errors->first('name') ? ' is-invalid' : '' }}" id="name"
                                                type="text" wire:model.lazy="name" required>

                                            @error('name')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone Number</label>
                                            <input class="form-control {{ $errors->first('phone') ? ' is-invalid' : '' }}" id="phone"
                                                type="text" wire:model="phone" required>
                                            @error('phone')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mt-2">
                                            <label for="email">Email address</label>
                                            <input class="form-control {{ $errors->first('email') ? ' is-invalid' : '' }}" id="email"
                                                type="email" wire:model.lazy="email" required>
                                            @error('email')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mt-2">
                                            <label for="email">Purpose</label>
                                            <input class="form-control {{ $errors->first('purpose') ? ' is-invalid' : '' }}" id="purpose"
                                                type="text" wire:model.lazy="purpose" required>
                                            @error('purpose')
                                                <small class="form-text text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group mt-2">
                                            <label for="msz">Message</label>
                                            <textarea class="form-control {{ $errors->first('msz') ? ' is-invalid' : '' }}" id="msz" cols="30" rows="3" placeholder="(optional)"
                                                wire:model.lazy="msz">
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                @if (Session::has('message'))
                                    <div class="alert alert-success mt-4 border-0 text-center" role="alert">
                                        <strong>Success!</strong> {{ Session::get('message') }}
                                    </div>
                                @else
                                    <button class="lab-btn mt-4" type="submit">book an appointment</button>
                                @endif
                            </form>

                        </div>
                    </div>

                    <div class="col-xl-6 col-12">
                        <div class="section__wrapper">
                            <div class="testimonial__rivew overflow-hidden">
                                <div class="row justify-content-center g-4">

                                    <div class="col-xl-6 col-md-4 col-sm-6 col-12">
                                        <div class="information__item">
                                            <div class="information__icon">
                                                <i class="fa-solid fa-mobile-screen"></i>
                                            </div>
                                            <div class="information__content">
                                                <h5>Phone numbers</h5>
                                                <p>{{ $info->phone }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-4 col-sm-6 col-12">
                                        <div class="information__item">
                                            <div class="information__icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="information__content">
                                                <h5>Email address</h5>
                                                <p>{{ $info->email }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-4 col-sm-6 col-12">
                                        <div class="information__item">
                                            <div class="information__icon">
                                                <i class="fa-solid fa-house"></i>
                                            </div>
                                            <div class="information__content">
                                                <h5>our Address</h5>
                                                <p>{{ $info->address }}</p>
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
    <!-- contact Section Ends Here -->

    <!-- GoogleMap Section Starts Here -->
    <div class="section__header text-center">
        <h6>{{ $maptitle->subtitle }}</h6>
        <h2>{{ $maptitle->title }}</h2>
    </div>
    <div class="googleMap">
        <iframe src="{{ $info->mapurl }}"></iframe>
    </div>
    <!-- GoogleMap Section Ends Here -->

    @push('script')
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

        <x-addedalert />
    @endpush
</div>
