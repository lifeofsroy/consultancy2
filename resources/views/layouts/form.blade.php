<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/form/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/form/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/form/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/form/css/style.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('assets/form/css/colors/switch.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body>

    {{ $slot }}

    <script src="{{ asset('assets/form/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/form/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/form/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/form/js/switch.js') }}"></script>
    <script src="{{ asset('assets/form/js/main.js') }}"></script>
    <script>
        $("#files").change(function() {
            filename = this.files[0].name
            console.log(filename);
        });
    </script>

    @livewireScripts
</body>

</html>
