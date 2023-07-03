<x-app-layout>
    @push('title')
    Forgot Password
    @endpush

    <div>
        <!-- Page Header Section Starts Here -->
        <div class="pageheader" style="background-image: url({{ asset('assets/front/images/bg/pageheader.jpg') }});">
            <div class="container">
                <div class="pageheader__content">
                    <h2>Forgot Password</h2>
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
                            <h4>Forgot Password ?</h4>
                            <p>
                                No problem. Just let us know your email address and we will email you a password reset
                                link.
                            </p>

                            <x-validation-errors class="text-danger mb-4" />

                            @if (session('status'))
                                <div class="text-success mb-4 text-sm">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <input name="email" type="email" value="{{ old('email') }}" placeholder="Enter Email" required autofocus>

                                <button class="lab-btn" type="submit">Send Password Reset Link</button>

                                <div class="text-center" style="margin-bottom: 0; margin-top: 2rem;">

                                    <span>
                                        <a href="{{ route('login') }}" style="font-size: 18px; color: #015e15; font-weight: 800;">
                                            Remember Password ?
                                        </a>
                                    </span>

                                    <span>
                                        <a href="{{ route('login') }}" class="text-primary">
                                            Let's Login
                                        </a>
                                    </span>

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
