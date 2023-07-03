<x-app-layout>
    @push('title')
        Register
    @endpush

    <div>
        <!-- Page Header Section Starts Here -->
        <div class="pageheader" style="background-image: url({{ asset('assets/front/images/bg/pageheader.jpg') }});">
            <div class="container">
                <div class="pageheader__content">
                    <h2>Register</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item text-warning"> > </li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header Section Ends Here -->

        <!-- Appointment Section Starts Here -->
        <div class="callAaction padding-tb bg-img"
            style="background-image: url({{ asset('assets/front/images/bg/01.jpg') }});">
            <div class="container">

                <div class="row g-4">
                    <div class="col-xl-6 col-lg-9 col-12 offset-lg-3 offset-xl-6">
                        <div class="callAaction__form">
                            <h2>Create an Account</h2>
                            <x-validation-errors class="mb-4 text-danger" />

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <input type="text" placeholder="Full Name" name="name" value="{{ old('name') }}"
                                    required autofocus autocomplete="name">

                                <input type="text" placeholder="Email Address" name="email"
                                    value="{{ old('email') }}" required autofocus>

                                <input type="password" placeholder="Password" name="password" required
                                    autocomplete="new-password">

                                <input type="password" placeholder="Confirm Password" name="password_confirmation"
                                    required autocomplete="new-password">

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="col-xl-12">
                                        <div class="become-volunteer-page__input">
                                            <input style="width: 6%" type="checkbox" id="terms" name="terms">
                                            <label for="terms">&ensp; I accept <a href="{{ route('terms.show') }}" class="text-primary"
                                                    target="_blank">Terms</a> & <a href="{{ route('policy.show') }}" class="text-primary"
                                                    target="_blank">Policy</a></label>
                                        </div>
                                    </div>
                                @endif

                                <button type="submit" class="lab-btn">Register Here</button>

                            </form>

                            <div class="text-center" style="margin-bottom: 0; margin-top: 2rem;">
                                <span>Already have an account ?</span>
                                <span> <a href="{{ route('login') }}"
                                        style="font-size: 18px; color: #015e15; font-weight: 800;">&ensp; Login
                                        Here</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment Section Ends Here -->
    </div>
</x-app-layout>
