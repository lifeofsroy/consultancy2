<x-app-layout>
    @push('title')
        Reset Password
    @endpush

    <div>
        <!-- Page Header Section Starts Here -->
        <div class="pageheader" style="background-image: url({{ asset('assets/front/images/bg/pageheader.jpg') }});">
            <div class="container">
                <div class="pageheader__content">
                    <h2>Reset Password</h2>
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

                            <x-validation-errors class="text-danger mb-4" />

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                <input name="password" type="password" placeholder="Enter Password" required autocomplete="new-password">

                                <input name="password_confirmation" type="password" placeholder="Confirm Password" required autocomplete="new-password">

                                <input name="email" type="email" value="{{ old('email', $request->email) }}" required readonly>

                                <button class="lab-btn col-12" type="submit">Update Password</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Appointment Section Ends Here -->
    </div>
</x-app-layout>
