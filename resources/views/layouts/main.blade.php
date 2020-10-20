<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title>Dashboard - Midone - Tailwind HTML Admin Template</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.22/datatables.min.css"/>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="app">
    <!-- BEGIN: Mobile Menu -->
    @include('extras.mobile_menu')
    <!-- END: Mobile Menu -->
    <div class="flex">
        <!-- BEGIN: Side Menu -->
        @include('extras.sidemenu')
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                @include('extras.top_bar')
            </div>
            <!-- END: Top Bar -->
      
                @yield('content')
    
        </div>
        <!-- END: Content -->
    </div>
  
    <!-- BEGIN: JS Assets-->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/dt-1.10.22/datatables.min.js"></script>
    <!-- END: JS Assets-->
    @stack('dataTable')
</body>

</html>