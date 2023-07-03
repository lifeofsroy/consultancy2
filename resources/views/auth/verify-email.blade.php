<x-app-layout>
    @push('title')
        Verify Your Email
    @endpush

    <div>
        <!-- Page Header Section Starts Here -->
        <div class="pageheader" style="background-image: url({{ asset('assets/front/images/bg/pageheader.jpg') }});">
            <div class="container">
                <div class="pageheader__content">
                    <h2>Verify Your Email</h2>
                </div>
            </div>
        </div>
        <!-- Page Header Section Ends Here -->

        <!-- Appointment Section Starts Here -->
        <div class="callAaction padding-tb bg-img" style="background-image: url({{ asset('assets/front/images/bg/01.jpg') }});">
            <div class="container">

                <div class="row g-4">
                    <div class="col-xl-6 col-lg-9 col-12 offset-lg-3 offset-xl-6">
                        <div class="callAaction__form">
                            <p>
                                We have sent you an email with a verification link. Please click on
                                that link to verify your email.
                            </p>

                            @if (session('status') == 'verification-link-sent')
                                <h5 class="text-success my-4 text-center">Verification Link Sent !</h5>
                            @endif

                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <button class="lab-btn col-12" type="submit">Resend Verification Email</button>

                                <div class="d-flex justify-content-center" style="margin-bottom: 0; margin-top: 2rem;">

                                    <a class="mx-2" href="{{ route('profile.show') }}" style="font-size: 18px; color: #015e15; font-weight: 800;">
                                        Edit Profile
                                    </a>

                                    <a class="mx-2" href="{{ route('logout') }}" style="font-size: 18px; color: #7c2b05; font-weight: 800;"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment Section Ends Here -->
    </div>
</x-app-layout>
