<x-app-layout>
    @push('title')
        Page Not Found
    @endpush

    <!-- Page Header Section Starts Here -->
    <div class="pageheader" style="margin-top: 0;">
    </div>
    <!-- Page Header Section Ends Here -->

    <!-- Four Zero Four Section Starts Here -->
    <div class="fourzero padding-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10 col-12">
                    <div class="fourzero__item">
                        <div class="fourzero__thumb">
                            <img src="{{asset('assets/front/images/404.png')}}" alt="rajibraj" />
                        </div>
                        <div class="fourzero__content text-center">
                            <h2>Ooops! This Page Not Found</h2>
                            <p>We’re sorry but we can’t seem to find the page you requested. This might be because you have typed the web address
                                incorrectly.</p>
                            <a class="lab-btn" href="{{route('home')}}">go back to home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Four Zero Four Section Ends Here -->
</x-app-layout>
