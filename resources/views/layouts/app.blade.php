<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        
        @include('layouts.includes.links')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper" id="app">
            @include('layouts.includes.navbar')

            
            @include('layouts.includes.sidebar')
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            
            @include('layouts.includes.footer')
        </div>
        
        @include('layouts.includes.scripts')
        
        @include('layouts.includes.system-alerts')
        
        @yield('js')
    </body>
</html>
