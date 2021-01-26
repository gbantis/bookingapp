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

    <link   rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link  rel="stylesheet" href="{{ asset('css/brands.css') }}">
    <link  rel="stylesheet" href="{{ asset('css/solid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
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
                <img src="images/logo-white.png" alt="logo">
            </a>
        </li>
        <li class="sidebar-heading pt-3">Main</li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard.html">
                <i class="la la-dashboard font-size-18 mr-1"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
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
        <li class="nav-item">
            <a class="nav-link" href="dashboard-messages.html">
                <i class="la la-envelope font-size-18 mr-1"></i>
                <span>Messages <span class="badge badge-success">3</span></span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard-wallet.html">
                <i class="la la-wallet font-size-18 mr-1"></i>
                <span>Wallet</span>
            </a>
        </li>
        <li><hr class="sidebar-divider border-top-color"></li>
        <li class="sidebar-heading">Listings</li>
        <li class="nav-item active">
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
                        <a class="nav-link dropdown-toggle after-none" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-bell"></i>
                            <span class="badge badge-danger badge-counter">3+</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="alertsDropdown">
                            <h6 class="generic-list-header">Alerts Center</h6>
                            <div class="generic-list scrollable-content scrollbar-hidden">
                                <a class="generic-list-item d-flex align-items-center" href="#">
                                    <div class="icon-element flex-shrink-0 bg-1">
                                        <i class="la la-file-alt text-white"></i>
                                    </div>
                                    <div class="ml-2">
                                        <p class="small text-gray">December 12, 2019</p>
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">A new monthly report is ready to download!</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="#">
                                    <div class="icon-element flex-shrink-0 bg-2">
                                        <i class="la la-donate"></i>
                                    </div>
                                    <div class="ml-2">
                                        <p class="small text-gray">December 7, 2019</p>
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">$290.29 has been deposited into your account!</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="#">
                                    <div class="icon-element flex-shrink-0 bg-3">
                                        <i class="la la-exclamation-triangle"></i>
                                    </div>
                                    <div class="ml-2">
                                        <p class="small text-gray">December 4, 2019</p>
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Spending Alert: We've noticed unusually high spending for your account.</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="#">
                                    <div class="icon-element flex-shrink-0 bg-4">
                                        <i class="la la-check-circle"></i>
                                    </div>
                                    <div class="ml-2">
                                        <p class="small text-gray">December 1, 2019</p>
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Your listing Hotel Govendor has been approved! </p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="#">
                                    <div class="icon-element flex-shrink-0 bg-5">
                                        <i class="la la-check-circle"></i>
                                    </div>
                                    <div class="ml-2">
                                        <p class="small text-gray">December 1, 2019</p>
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Your listing Burger House has been approved! </p>
                                    </div>
                                </a>
                            </div><!-- end generic-list -->
                            <a class="dropdown-item text-center small text-gray font-weight-medium py-2" href="#">Show All Alerts</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle after-none" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-envelope"></i>
                            <span class="badge badge-warning badge-counter">2</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated--grow-in" aria-labelledby="messagesDropdown">
                            <h6 class="generic-list-header">Messages Center</h6>
                            <div class="generic-list scrollable-content scrollbar-hidden">
                                <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                                    <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                        <img src="images/avatar-img.jpg" alt="author-image">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Hi there! I am wondering if you can help me with a problem I've been having.</p>
                                        <p class="small text-gray">Udin Cilok · 1m</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                                    <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                        <img src="images/avatar-img2.jpg" alt="author-image">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                        <p class="small text-gray">Joynal Ali · 4m</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                                    <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                        <img src="images/avatar-img3.jpg" alt="author-image">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                        <p class="small text-gray">Colin Smith · 10m</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                                    <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                        <img src="images/avatar-img4.jpg" alt="author-image">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                        <p class="small text-gray">Alex Smith · 1h</p>
                                    </div>
                                </a>
                                <a class="generic-list-item d-flex align-items-center" href="dashboard-messages.html">
                                    <div class="user-thumb user-thumb-sm flex-shrink-0 position-relative">
                                        <img src="images/avatar-img5.jpg" alt="author-image">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div class="ml-2">
                                        <p class="text-truncate text-color font-size-14 font-weight-medium">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good</p>
                                        <p class="small text-gray">Name</p>
                                    </div>
                                </a>
                            </div><!-- end generic-list -->
                            <a class="dropdown-item text-center small text-gray font-weight-medium py-2" href="#">Read More Messages</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown border-left pl-3 ml-4">
                        <a class="nav-link dropdown-toggle after-none" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-thumb user-thumb-sm position-relative">
                                <img src="images/avatar-img.jpg" alt="author-image">
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
            <div class="container-fluid dashboard-inner-body-container">
                <div class="breadcrumb-content d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="section-heading">
                        <h2 class="sec__title font-size-24 mb-0">My listings</h2>
                    </div>
                    <ul class="list-items bread-list bread-list-2">
                        <li><a href="index.html">Home</a></li>
                        <li>Dashboard</li>
                        <li>My listings</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-card dashboard-card mb-4">
                            <div class="block-card-header">
                                <h2 class="widget-title pb-0">Active Listings</h2>
                            </div>
                            <div class="block-card-body">
                                @foreach($rooms as $room)
                                <div class="card-item card-item-list card-item--list">
                                    <div class="card-image">
                                        <a href="listing-details.html" class="d-block">
                                            <img src="/storage/cover_images/{{$room->cover_image}}" data-src="/storage/cover_images/{{$room->cover_image}}" class="card__img lazy" alt="">
                                            <span class="badge">now open</span>
                                        </a>
                                    </div>
                                    <div class="card-content">

                                        <h4 class="card-title pt-3">
                                            <a href="listing-details.html">{{$room->title}}</a>
                                            <i class="fal fa-check ml-1" data-toggle="tooltip" data-placement="top" title="Claimed"></i>
                                        </h4>
                                        <p class="card-sub"><a href="#"><i class="far fa-map-pin mr-1 text-color-1"></i>Bishop Avenue, New York</a></p>
                                        <ul class="listing-meta d-flex align-items-center">
                                            <li class="d-flex align-items-center">
                                                <span class="rate flex-shrink-0">4.7</span>
                                                <span class="rate-text">5 Ratings</span>
                                            </li>
                                            <li>
                                                <span class="price-range" data-toggle="tooltip" data-placement="top" title="Pricey">
                                                    <strong class="font-weight-medium">$</strong>
                                                    <strong class="font-weight-medium">$</strong>
                                                    <strong class="font-weight-medium">$</strong>
                                                </span>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="fad fa-house mr-1 listing-icon"></i><a href="#" class="listing-cat-link">Restaurant</a>
                                            </li>
                                        </ul>
                                        <ul class="info-list padding-top-20px">
                                            <li><span class="fas fa-link "></span>
                                                <a href="#"> www.techydevs.com</a>
                                            </li>
                                            <li><span class="far fa-calendar"></span>
                                                Created 1 month ago
                                            </li>
                                        </ul>
                                        <div class="action-buttons position-absolute top-0 right-0 mt-3 mr-3">
                                            <a href="/{{$room->id}}/edit" class="btn bg-rgb-success font-weight-medium mr-2"><i class="la la-edit mr-1"></i>Edit</a>
                                            <a href="/{{$room->id}}/delete" class="btn bg-rgb-danger font-weight-medium" data-toggle="modal" data-target="#deleteModal"><i class="la la-trash mr-1"></i>Delete</a>
                                        </div>
                                    </div>
                                </div><!-- end card-item -->
                                @endforeach

                            </div><!-- end block-card-body -->
                        </div><!-- end block-card -->
                    </div><!-- end col-lg-12 -->
                    <div class="col-lg-12 pb-4">
                        <div class="pagination-wrapper d-inline-block">
                            <div class="section-pagination">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination flex-wrap justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link page-link-first" href="#"><i class="la la-long-arrow-left mr-1"></i> First</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="la la-angle-left"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link page-link-active" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="la la-angle-right"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link page-link-last" href="#">Last <i class="la la-long-arrow-right ml-1"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- end section-pagination -->
                        </div>
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end dashboard-inner-body-container -->
        </div><!-- end dashboard-inner-body -->
        <div class="dashboard-footer bg-white">
            <div class="container-fluid">
                <div class="copy-right d-flex align-items-center justify-content-between">
                    <p class="copy__desc">
                        &copy; Copyright Listhub <script> document.write(new Date().getFullYear()); </script>. Made with
                        <span class="la la-heart-o"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                    </p>
                    <ul class="list-items term-list text-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- end dashboard-body -->
</section>
<!-- ================================
    START DASHBOARD AREA
================================= -->

<!-- Modal -->
<div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <i class="la la-exclamation-circle font-size-70 text-warning"></i>
                <h4 class="modal-title mt-2 mb-1 text-color font-size-20" id="deleteModalTitle">Your item ill be deleted permanently!</h4>
                <p class="modal-sub font-weight-medium">Are you sure to proceed.</p>
            </div>
            <div class="modal-footer border-top-color">
                <button type="button" class="btn font-weight-medium line-height-20 bg-rgb-success" data-dismiss="modal">Cancel</button>
                <form action="{{ route('rooms.destroy', $room->id) }}"  method="POST">
                    @csrf
                    @method('delete')
                <button type="submit" class="btn font-weight-medium line-height-20 bg-rgb-danger">Delete</button>
                </form>
            </div>
        </div><!-- end modal-content -->
    </div>
</div><!-- end modal-form -->

<!-- Template JS Files -->
<script src="/js/dashboard/jquery-3.4.1.min.js"></script>
<script src="/js/dashboard/jquery-ui.js"></script>
<script src="/js/dashboard/popper.min.js"></script>
<script src="/js/dashboard/bootstrap.min.js"></script>
<script src="/js/dashboard/owl.carousel.min.js"></script>
<script src="/js/dashboard/jquery.fancybox.min.js"></script>
<script src="/js/dashboard/animated-headline.js"></script>
<script src="/js/dashboard/chosen.min.js"></script>
<script src="/js/dashboard/moment.min.js"></script>
<script src="/js/dashboard/datedropper.min.js"></script>
<script src="/js/dashboard/waypoints.min.js"></script>
<script src="/js/dashboard/jquery.counterup.min.js"></script>
<script src="/js/dashboard/jquery.lazy.min.js"></script>
<script src="/js/dashboard/main.js"></script>
</body>
</html>
