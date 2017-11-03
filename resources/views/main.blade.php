<!DOCTYPE html>
<html lang="nl">

<head>
@include('partials._head')

@yield('code')
<style>
img[alt="www.000webhost.com"] {
    display: none;
}
</style>
</head>

<body>

    @yield('header')



        @yield('content')




        @include('partials._javascript')

        @yield('scripts')

</body>

</html>
