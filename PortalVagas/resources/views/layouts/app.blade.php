<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links de css -->
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/registro.css') }}">

</head>

<body>
    <!-- header -->
    @include('components.header')

    <div class="container">
        @yield('content')
    </div>
    <!-- footer -->
    @include('components.footer')
</body>
<!-- scripts js -->

</html>