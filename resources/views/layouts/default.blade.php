<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('includes.head')
    @livewireStyles
</head>

<body>
    @include('includes.header')
    @yield('content')

    @livewireScripts
    @include('includes.footer')
    @include('includes.page-js')

</body>

</html>
