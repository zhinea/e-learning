
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
{{-- BEGIN: Head --}}

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ $title ?? 'Dashboard' }} - E Learning</title>

    <link rel="apple-touch-icon" href="{{ ui_asset('images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ ui_asset('images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    {{-- BEGIN: Vendor CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('vendors/css/extensions/toastr.min.css') }}">

    @stack('css_vendor')
    {{-- END: Vendor CSS --}}

    {{-- BEGIN: Theme CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/themes/bordered-layout.css') }}">

    {{-- BEGIN: Page CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ ui_asset('css/plugins/extensions/ext-component-toastr.css') }}">

    @stack('css_page')
    {{-- END: Page CSS --}}

    {{-- BEGIN: Custom CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    {{-- END: Custom CSS --}}
</head>
{{-- END: Head --}}

{{-- BEGIN: Body --}}
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

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


     <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ml-25" href="/" target="_blank">E Learning</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    {{-- BEGIN: Vendor JS --}}
    <script src="{{ ui_asset('vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('js/setup.js') }}"></script>
    {{-- BEGIN Vendor JS --}}

    {{-- BEGIN: Page Vendor JS --}}
    <script src="{{ ui_asset('vendors/js/extensions/toastr.min.js') }}"></script>

    @stack('js_vendor')
    {{-- END: Page Vendor JS --}}

    {{-- BEGIN: Theme JS --}}
    <script src="{{ ui_asset('js/core/app-menu.js') }}"></script>
    <script src="{{ ui_asset('js/core/app.js') }}"></script>
    {{-- END: Theme JS --}}


    @routes

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

    @stack('js_page')
</body>
{{-- END: Body --}}

</html>