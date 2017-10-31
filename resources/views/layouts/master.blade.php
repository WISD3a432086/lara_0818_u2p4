<html>
<head>
    <tittle>@yield('tittle')| My Blog</tittle>
</head>
        <body>
        @include('layouts.partials.navigation')
<div class="container">
    @yield('content')
</div>
</body>
</html>