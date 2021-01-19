<!DOCTYPE html>
<html dir="ltr" lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="test">
    <meta name="author" content="test">
    <title>BackEnd Test @yield('TitlePage')</title>
    <!-- Custom CSS -->

    <link href="{{asset('front/')}}/src/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{asset('front/')}}/src/dist/css/style.min.css" rel="stylesheet">
    <link href="{{asset('front/')}}/src/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
</head>
<body>
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6" style="height: 40px">
        <nav class="navbar top-navbar navbar-expand-md" >
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand text-center">
                    <!-- Logo  -->
                    <a href="/">
                        <b class="logo-icon">
                            <!--  Logo  -->
                            <img src="{{asset('front/')}}/src/assets/images/mynet.png" alt="logo" class="dark-logo" width="110" height="60" />
                        </b>
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="sidebar-item">
                        <a class="sidebar-link sidebar-link" href="{{route('HomePage')}}" aria-expanded="false">
                            <i data-feather="home" class="feather-icon"></i>
                            <span class="hide-menu">Home</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link sidebar-link" href="{{route('person.index')}}" aria-expanded="false">
                            <i data-feather="user" class="feather-icon"></i>
                            <span class="hide-menu">Persons</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link sidebar-link" href="{{route('address.index')}}" aria-expanded="false">
                            <i data-feather="database" class="feather-icon"></i>
                            <span class="hide-menu">Address</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
