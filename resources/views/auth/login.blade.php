<x-app-layout>
    @push('title')
        Login
    @endpush

    <div>
        <!-- Page Header Section Starts Here -->
        <div class="pageheader" style="background-image: url({{ asset('assets/front/images/bg/pageheader.jpg') }});">
            <div class="container">
                <div class="pageheader__content">
                    <h2>Login Your Account</h2>
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
                            <h2>Welcome Back !</h2>

                            <x-validation-errors class="text-danger mb-4" />

                            @if (session('status'))
                                <div class="text-success mb-4 text-sm">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <input name="email" type="email" value="{{ old('email') }}" placeholder="Enter Email" required autofocus>

                                <input name="password" type="password" placeholder="Enter Password" required autocomplete="current-password">

                                <div class="col-xl-12">
                                    <div class="become-volunteer-page__input">
                                        <input id="remember_me" name="remember" type="checkbox" style="width: 7%">
                                        <label for="remember_me">&ensp; Keep me logged in</label>
                                    </div>
                                </div>

                                <button class="lab-btn" type="submit">Login Here</button>

                                @if (Route::has('password.request'))
                                    <div class="col-xl-8 text-end" style="padding: 10px 0;">
                                        <a href="{{ route('password.request') }}">
                                            <h5>Forgot Password ?</h5>
                                        </a>
                                    </div>
                                @endif

                                <div class="text-center" style="margin-bottom: 0; margin-top: 2rem;">

                                    <span>
                                        <a href="{{ route('register') }}" style="font-size: 18px; color: #015e15; font-weight: 800;">
                                            Register Here
                                        </a>
                                    </span>

                                    <span>&ensp; OR, Sign in with &ensp;</span>

                                    <span>
                                        <a href="{{ route('google.login') }}" class="text-primary">
                                            <i class="fab fa-google"></i>oogle
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
