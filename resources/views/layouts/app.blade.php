<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
{{-- BEGIN: Head --}}

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">


    <title>{{ $title ?? 'Dashboard' }}</title>
    
    <link rel="apple-touch-icon" href="{{ ui_asset('images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ ui_asset('images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    {{-- BEGIN: Vendor CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('vendors/css/extensions/toastr.min.css') }}">
    {{-- END: Vendor CSS --}}

    {{-- BEGIN: Theme CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/themes/semi-dark-layout.css') }}">

    {{-- BEGIN: Page CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/plugins/extensions/ext-component-toastr.css') }}">
    {{-- END: Page CSS --}}

    {{-- BEGIN: Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    {{-- END: Custom CSS --}}

</head>
{{-- END: Head --}}

{{-- BEGIN: Body --}}

<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">




    {{-- BEGIN: Header --}}
    @include('layouts.app.header')
    {{-- END: Header --}}


    {{-- BEGIN: Main Menu --}}
    @include('layouts.app.menu')
    {{-- END: Main Menu --}}



    {{-- BEGIN: Main Content --}}

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">

            <x-breadchumb></x-breadchumb>
            {{ $slot }}
        </div>
    </div>

    {{-- END: Main Content --}}


    {{-- BEGIN: Vendor JS --}}
    <script src="{{ ui_asset('vendors/js/vendors.min.js') }}"></script>
    {{-- BEGIN Vendor JS --}}

    {{-- BEGIN: Page Vendor JS --}}
    <script src="{{ ui_asset('vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ ui_asset('vendors/js/charts/apexcharts.min.js') }}"></script>
    <script src="{{ ui_asset('vendors/js/extensions/toastr.min.js') }}"></script>
    {{-- END: Page Vendor JS --}}

    {{-- BEGIN: Theme JS --}}
    <script src="{{ ui_asset('js/core/app-menu.js') }}"></script>
    <script src="{{ ui_asset('js/core/app.js') }}"></script>
    {{-- END: Theme JS --}}

    {{-- BEGIN: Page JS --}}
    <script src="{{ ui_asset('js/scripts/pages/dashboard-ecommerce.js') }}"></script>
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