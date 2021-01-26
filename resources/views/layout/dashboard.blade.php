<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listhub - Directory & Listing HTML5 Template</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="/css/dashboard/bootstrap.min.css">
    <link rel="stylesheet" href="/css/dashboard/line-awesome.min.css">
    <link rel="stylesheet" href="/css/dashboard/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/dashboard/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/dashboard/animated-headline.css">
    <link rel="stylesheet" href="/css/dashboard/jquery-ui.css">
    <link rel="stylesheet" href="/css/dashboard/jquery.fancybox.css">
    <link rel="stylesheet" href="/css/dashboard/chosen.min.css">
    <link rel="stylesheet" href="/css/dashboard/style.css">
</head>
<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div>
<!-- end per-loader -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-wrap d-flex">
    <ul class="navbar-nav dashboard-sidebar">
        <li>
            <span id="sidebar-close">
                <i class="la la-times"></i>
            </span>
        </li>
        <li>
            <a class="sidebar-brand" href="index.html">
                <img src="/images/logo-white.png" alt="logo">
            </a>
        </li>
        <li class="sidebar-heading pt-3">Main</li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard.html">
                <i class="la la-dashboard font-size-18 mr-1"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="dashboard-booking.html">
                <i class="la la-shopping-bag font-size-18 mr-1"></i>
                <span>Bookings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard-bookmark.html">
                <i class="la la-bookmark font-size-18 mr-1"></i>
                <span>Bookmarks</span>
            </a>
        </li>
        <li><hr class="sidebar-divider border-top-color"></li>
        <li class="sidebar-heading">Listings</li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard-my-listings.html">
                <i class="la la-file-text-o font-size-18 mr-1"></i>
                <span>My listings</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard-reviews.html">
                <i class="la la-star-o font-size-18 mr-1"></i>
                <span>Reviews</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="add-listing.html">
                <i class="la la-plus-circle font-size-18 mr-1"></i>
                <span>Add Listing</span>
            </a>
        </li>
        <li><hr class="sidebar-divider border-top-color"></li>
        <li class="sidebar-heading">Account</li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard-my-profile.html">
                <i class="la la-user font-size-18 mr-1"></i>
                <span>My Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="la la-power-off font-size-18 mr-1"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
    <div class="dashboard-body d-flex flex-column">
        <div class="dashboard-inner-body flex-grow-1">
            <nav class="navbar navbar-expand bg-navbar dashboard-topbar mb-4">
                <button id="sidebarToggleTop" class="btn rounded-circle mr-3">
                    <i class="la la-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle after-none" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-search"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="search-box">
                                <div class="input-group">
                                    <label class="input-label mb-0">
                                        <input type="text" class="form-control" placeholder="Search here...">
                                    </label>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="la la-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown">


                    </li>

                    <li class="nav-item dropdown border-left pl-3 ml-4">
                        <a class="nav-link dropdown-toggle after-none" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-thumb user-thumb-sm position-relative">
                                <img src="/images/avatar-img.jpg" alt="author-image">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <span class="ml-2 small font-weight-medium d-none d-lg-inline">Kamran Ahmed</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right animated--grow-in py-2" aria-labelledby="userDropdown">
                            <a class="dropdown-item text-color font-size-15" href="dashboard-my-profile.html">
                                <i class="la la-user mr-2 text-gray font-size-18"></i>
                                Profile
                            </a>
                            <a class="dropdown-item text-color font-size-15" href="dashboard-messages.html">
                                <i class="la la-envelope mr-2 text-gray font-size-18"></i>
                                Messages
                            </a>
                            <a class="dropdown-item text-color font-size-15" href="dashboard-booking.html">
                                <i class="la la-shopping-bag mr-2 text-gray font-size-18"></i>
                                Bookings
                            </a>
                            <a class="dropdown-item text-color font-size-15" href="dashboard-bookmark.html">
                                <i class="la la-bookmark mr-2 text-gray font-size-18"></i>
                                Bookmarks
                            </a>
                            <a class="dropdown-item text-color font-size-15" href="add-listing.html">
                                <i class="la la-plus-circle mr-2 text-gray font-size-18"></i>
                                Add Listing
                            </a>
                            <a class="dropdown-item text-color font-size-15" href="index.html">
                                <i class="la la-power-off mr-2 text-gray font-size-18"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav><!-- end dashboard-topbar -->

@yield('content')
