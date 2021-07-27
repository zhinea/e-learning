
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
 {{-- BEGIN: Head --}}

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    
    
    {{-- <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT"> --}}
    
    <title>{{ $title }}</title>
    
    <link rel="apple-touch-icon" href="{{ asset('ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

     {{-- BEGIN: Vendor CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ app_vendor('css/vendors.min.css') }}">
    @stack('css_vendor')
     {{-- END: Vendor CSS --}}

     {{-- BEGIN: Theme CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-extended') }}.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/dark') }}-layout.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/themes/semi-dark-layout.css') }}">

     {{-- BEGIN: Page CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/core/menu/menu-types/vertical-menu.css') }}">
{{--     <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/page-knowledge-base.css') }}"> --}}

    @stack('css_page')
     {{-- END: Page CSS --}}

     {{-- BEGIN: Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
     {{-- END: Custom CSS --}}

</head>
 {{-- END: Head --}}

     {{-- BEGIN: Header --}}
    
    @include('layouts.admin.header')

     {{-- END: Header --}}


     {{-- BEGIN: Main Menu --}}
    
    @include('layouts.admin.menu')

     {{-- END: Main Menu --}}


     {{-- BEGIN: Main Content --}}

     <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            {{ $slot }}
        </div>
    </div>

     {{-- END: Main Content --}}


     {{-- BEGIN: Vendor JS --}}
    <script src="{{ asset('js/vendors.min.js') }}"></script>
     {{-- BEGIN Vendor JS --}}

     {{-- BEGIN: Page Vendor JS --}}
    @stack('js_vendor')    
     {{-- END: Page Vendor JS --}}

     {{-- BEGIN: Theme JS --}}
    <script src="{{ asset('js/core/app-menu.js') }}"></script>
    <script src="{{ asset('js/core/app.js') }}"></script>
     {{-- END: Theme JS --}}

     {{-- BEGIN: Page JS --}}
    {{-- <script src="{{ asset('js/scripts/pages/page-knowledge-base.js') }}"></script> --}}
    @stack('js_page')
     {{-- END: Page JS --}}

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
 {{-- END: Body --}}

</html>