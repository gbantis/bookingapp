@extends('layout.home')
@section('content')

<!-- ================================
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper hero-wrapper3">
    <div class="hero-box pb-0 hero-bg-3 ripple-bg bg-fixed">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content pb-5 hero-content-3 text-center">
                        <div class="section-heading">
                            <h2 class="sec__title">Open Your Eyes to the <br> Hidden World</h2>
                            <p class="sec__desc pt-1">Book incredible things to do around the world.</p>
                        </div>
                    </div><!-- end hero-content -->
                    <div class="search-fields-container search-fields-container-shape">
                        <div class="search-fields-container-inner">
                            <div class="contact-form-action">
                                <form action="#" class="row">
                                    <div class="col-lg-4 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">Destination</label>
                                            <div class="form-group">
                                                <span class="la la-map-marker form-icon"></span>
                                                <input class="form-control" type="text" placeholder="Where are you going?">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4 pr-0">
                                        <div class="input-box">
                                            <label class="label-text">From</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                    <div class="col-lg-4">
                                        <div class="input-box">
                                            <label class="label-text">To</label>
                                            <div class="form-group">
                                                <span class="la la-calendar form-icon"></span>
                                                <input class="date-range form-control" type="text" name="daterange-single">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-4 -->
                                </form>
                            </div>
                            <div class="advanced-wrap">
                                <a class="btn collapse-btn theme-btn-hover-gray font-size-15" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                    Advanced Search <i class="la la-angle-down ml-1"></i>
                                </a>
                                <div class="pt-3 collapse" id="collapseTwo">
                                    <div class="slider-range-wrap ">
                                        <div class="price-slider-amount padding-bottom-20px">
                                            <label for="amount" class="filter__label">Filter Price:</label>
                                            <input type="text" id="amount" class="amounts" readonly>
                                        </div><!-- end price-slider-amount -->
                                        <div id="slider-range"></div><!-- end slider-range -->
                                    </div><!-- end slider-range-wrap -->
                                    <div class="checkbox-wrap padding-top-30px">
                                        <h3 class="title font-size-15 pb-3">Activity Types</h3>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="activityChb1">
                                            <label for="activityChb1">Food & Nightlife</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="activityChb2">
                                            <label for="activityChb2">Outdoors</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="activityChb3">
                                            <label for="activityChb3">Sightseeing Tours</label>
                                        </div>
                                        <div class="custom-checkbox d-inline-block mr-4">
                                            <input type="checkbox" id="activityChb4">
                                            <label for="activityChb4">Workshops & Classes</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box pt-3">
                                <a href="activity-search-result.html" class="theme-btn">Search Now</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
        <svg class="hero-svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"></path></svg>
    </div>
</section><!-- end hero-wrapper -->
<!-- ================================
    END HERO-WRAPPER AREA
================================= -->

<!-- ================================
    START DESTINATION AREA
================================= -->
<section class="destination-area padding-top-130px padding-bottom-80px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2 class="sec__title">Popular Destinations</h2>
                    <p class="sec__desc pt-3">Morbi convallis bibendum urna ut viverra Maecenas quis
                </div><!-- end section-heading -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="btn-box btn--box text-right">
                    <a href="tour-grid.html" class="theme-btn">Discover More <i class="la la-arrow-right ml-1"></i></a>
                </div>
            </div>
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-4 responsive-column">
                <div class="card-item destination-card destination--card">
                    <div class="card-img">
                        <img src="images/destination-img2.jpg" alt="destination-img">
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="card-title"><a href="tour-details.html">New York</a></h3>
                            <p class="card-meta">34 Activities</p>
                        </div>
                        <div>
                            <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i class="la la-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item destination-card destination--card">
                    <div class="card-img">
                        <img src="images/destination-img3.jpg" alt="destination-img">
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="card-title"><a href="tour-details.html">Chicago</a></h3>
                            <p class="card-meta">13 Activities</p>
                        </div>
                        <div>
                            <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i class="la la-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item destination-card destination--card">
                    <div class="card-img">
                        <img src="images/destination-img4.jpg" alt="destination-img">
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="card-title"><a href="tour-details.html">Hong Kong</a></h3>
                            <p class="card-meta">44 Activities</p>
                        </div>
                        <div>
                            <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i class="la la-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item destination-card destination--card">
                    <div class="card-img">
                        <img src="images/destination-img5.jpg" alt="destination-img">
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="card-title"><a href="tour-details.html">Las Vegas</a></h3>
                            <p class="card-meta">22 Activities</p>
                        </div>
                        <div>
                            <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i class="la la-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item destination-card destination--card">
                    <div class="card-img">
                        <img src="images/destination-img7.jpg" alt="destination-img">
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="card-title"><a href="tour-details.html">Miami</a></h3>
                            <p class="card-meta">54 Activities</p>
                        </div>
                        <div>
                            <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i class="la la-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item destination-card destination--card">
                    <div class="card-img">
                        <img src="images/destination-img8.jpg" alt="destination-img">
                    </div>
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="card-title"><a href="tour-details.html">New Jersey</a></h3>
                            <p class="card-meta">55 Activities</p>
                        </div>
                        <div>
                            <a href="tour-details.html" class="theme-btn theme-btn-small border-0">Explore <i class="la la-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end destination-area -->
<!-- ================================
    END DESTINATION AREA
================================= -->

<!-- ================================
    START INFO AREA
================================= -->
<!-- ================================
    END INFO AREA
================================= -->

<!-- ================================
    START TRENDING AREA
================================= -->
<section class="trending-area position-relative section-bg section-padding ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Trending Activities</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-12">

                <div class="trending-carousel carousel-action">
                    @foreach ($rooms as $room)
                    <div class="card-item trending-card mb-0">

                        <div class="card-img">
                            <a href="show/{{$room->id}}" class="d-block">
                                <img src="/storage/cover_images/{{$room->cover_image}}" alt="Destination-img">
                            </a>
                            <span class="badge">Bestseller</span>
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><a href="show/{{$room->id}}">{{$room->title}}</a></h3>
                            <p class="card-meta">124 E Huron St, New york</p>
                            <div class="card-rating">
                                <span class="badge text-white">4.4/5</span>
                                <span class="review__text">Average</span>
                                <span class="rating__text">(30 Reviews)</span>
                            </div>
                            <div class="card-price d-flex align-items-center justify-content-between">

                                <p>
                                    <span class="price__num">$124.00</span>
                                </p>
                                <a href="show/{{$room->id}}" class="btn-text">View details<i class="la la-angle-right"></i></a>
                            </div>
                        </div>
                    </div><!-- end card-item -->
                    @endforeach
                </div><!-- end car-carousel -->

            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <svg class="hero-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"><path d="M0 10 0 0 A 90 59, 0, 0, 0, 100 0 L 100 10 Z"></path></svg>
</section>

<!-- end trending-area -->
<!-- ================================
    END TRENDING AREA
================================= -->

<!-- ================================
       START TESTIMONIAL AREA
================================= -->
<!-- ================================
       START TESTIMONIAL AREA
================================= -->

<div class="section-block"></div>

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Our Latest News</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row padding-top-50px">
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card blog-card-layout-2">
                    <div class="card-img">
                        <img src="images/blog-img.jpg" alt="blog-img">
                        <div class="post-format icon-element">
                            <i class="la la-photo"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="post-categories">
                            <a href="#" class="badge">Travel</a>
                            <a href="#" class="badge">lifestyle</a>
                        </div>
                        <h3 class="card-title line-height-26"><a href="blog-single.html">When Traveling Avoid Expensive Hotels & Resorts</a></h3>
                        <p class="card-meta">
                            <span class="post__date"> 1 January, 2020</span>
                            <span class="post-dot"></span>
                            <span class="post__time">5 Mins read</span>
                        </p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/small-team1.jpg" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Leroy Bell</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card blog-card-layout-2">
                    <div class="card-img">
                        <img src="images/blog-img2.jpg" alt="blog-img">
                        <div class="post-format icon-element">
                            <i class="la la-play"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="post-categories">
                            <a href="#" class="badge">Video</a>
                        </div>
                        <h3 class="card-title line-height-26"><a href="blog-single.html">My Best Travel Tips: The Ultimate Travel Guide</a></h3>
                        <p class="card-meta">
                            <span class="post__date"> 1 February, 2020</span>
                            <span class="post-dot"></span>
                            <span class="post__time">4 Mins read</span>
                        </p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/small-team2.jpg" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Phillip Hunt</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 responsive-column">
                <div class="card-item blog-card blog-card-layout-2">
                    <div class="card-img">
                        <img src="images/blog-img3.jpg" alt="blog-img">
                        <div class="post-format icon-element">
                            <i class="la la-music"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="post-categories">
                            <a href="#" class="badge">audio</a>
                        </div>
                        <h3 class="card-title line-height-26"><a href="blog-single.html">Travel to Popular Sites & Don’t Rule Out Other Locations</a></h3>
                        <p class="card-meta">
                            <span class="post__date"> 1 March, 2020</span>
                            <span class="post-dot"></span>
                            <span class="post__time">3 Mins read</span>
                        </p>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <div class="author-content d-flex align-items-center">
                            <div class="author-img">
                                <img src="images/small-team3.jpg" alt="testimonial image">
                            </div>
                            <div class="author-bio">
                                <a href="#" class="author__title">Luke Jacobs</a>
                            </div>
                        </div>
                        <div class="post-share">
                            <ul>
                                <li>
                                    <i class="la la-share icon-element"></i>
                                    <ul class="post-share-dropdown d-flex align-items-center">
                                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- end card-item -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="btn-box text-center pt-4">
                    <a href="blog-grid.html" class="theme-btn">Read More Post</a>
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area cta-bg bg-fixed section-padding text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2 class="sec__title text-white font-size-50 line-height-60">Relax with us. <br>We love Our Clients.</h2>
                    <p class="sec__desc text-white pt-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur</p>
                </div><!-- end section-heading -->
                <div class="btn-box padding-top-35px">
                    <a href="become-local-expert.html" class="theme-btn border-0">Become Local Expert</a>
                </div>
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

<!-- ================================
    START SUB AREA
================================= -->
<section class="subscriber-area section-bg padding-top-70px padding-bottom-130px">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="section-heading">
                    <p class="sec__desc pb-1">Get Updates & More</p>
                    <h2 class="sec__title font-size-30 mb-0">Thoughtful thoughts to your inbox</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="subscriber-box">
                    <div class="contact-form-action">
                        <form action="#">
                            <div class="input-box">
                                <label class="label-text">Enter email address</label>
                                <div class="form-group mb-0">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <button class="theme-btn theme-btn-small submit-btn" type="submit">Subscribe</button>
                                    <span class="font-size-14 pt-1 text-white-50"><i class="la la-lock mr-1"></i>Don't worry your information is safe with us.</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END SUB AREA
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
<section class="footer-area before-none bg-white padding-top-40px padding-bottom-30px">
    <svg class="cta-svg" viewBox="0 0 500 150" preserveAspectRatio="none"><path d="M-31.31,170.22 C164.50,33.05 334.36,-32.06 547.11,196.88 L500.00,150.00 L0.00,150.00 Z"></path></svg>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Company</h4>
                    <ul class="list-items list--items">
                        <li><a href="about.html">About us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="blog-grid.html">News</a></li>
                        <li><a href="contact.html">Support</a></li>
                        <li><a href="#">Advertising</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Services</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Trizen.com Rewards</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">List My Hotel</a></li>
                        <li><a href="#">All Hotels</a></li>
                        <li><a href="#">TV Ads</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <h4 class="title curve-shape pb-3 margin-bottom-20px" data-text="curvs">Other Links</h4>
                    <ul class="list-items list--items">
                        <li><a href="#">USA Vacation Packages</a></li>
                        <li><a href="#">USA Flights</a></li>
                        <li><a href="#">USA Hotels</a></li>
                        <li><a href="#">USA Car Hire</a></li>
                        <li><a href="#">Create an Account</a></li>
                        <li><a href="#">Trizen Reviews</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column">
                <div class="footer-item">
                    <div class="footer-logo padding-bottom-30px">
                        <a href="index.html" class="foot__logo"><img src="images/logo.png" alt="logo"></a>
                    </div><!-- end logo -->
                    <p class="footer__desc">Morbi convallis bibendum urna ut viverra. Maecenas consequat</p>
                    <ul class="list-items pt-3">
                        <li>3015 Grand Ave, Coconut Grove,<br> Cerrick Way, FL 12345</li>
                        <li>+123-456-789</li>
                        <li><a href="#">trizen@yourwebsite.com</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="section-block"></div>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="copy-right padding-top-30px">
                    <p class="copy__desc">
                        &copy; Copyright Trizen 2020. Made with
                        <span class="la la-heart"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                    </p>
                </div><!-- end copy-right -->
            </div><!-- end col-lg-7 -->
            <div class="col-lg-5">
                <div class="footer-social-box padding-top-30px text-right">
                    <ul class="social-profile">
                        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                    </ul>
                </div><!-- end copy-right-content -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="signupPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle">Sign Up</h5>
                        <p class="font-size-14">Hello! Welcome Create a New Account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Email Address</label>
                                <div class="form-group">
                                    <span class="la la-envelope form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your email">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Repeat Password</label>
                                <div class="form-group">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type again password">
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Register Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Sign up Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->

<!-- end modal-shared -->
<div class="modal-popup">
    <div class="modal fade" id="loginPopupForm" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title title" id="exampleModalLongTitle2">Login</h5>
                        <p class="font-size-14">Hello! Welcome to your account</p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="la la-close"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form-action">
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Username</label>
                                <div class="form-group">
                                    <span class="la la-user form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your username">
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Password</label>
                                <div class="form-group mb-2">
                                    <span class="la la-lock form-icon"></span>
                                    <input class="form-control" type="text" name="text" placeholder="Type your password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="custom-checkbox mb-0">
                                        <input type="checkbox" id="rememberchb">
                                        <label for="rememberchb">Remember me</label>
                                    </div>
                                    <p class="forgot-password">
                                        <a href="recover.html">Forgot Password?</a>
                                    </p>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box pt-3 pb-4">
                                <button type="button" class="theme-btn w-100">Login Account</button>
                            </div>
                            <div class="action-box text-center">
                                <p class="font-size-14">Or Login Using</p>
                                <ul class="social-profile py-3">
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="bg-6 text-white"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" class="bg-7 text-white"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#" class="bg-5 text-white"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div>
        </div>
    </div>
</div><!-- end modal-popup -->
@endsection
<!-- Template JS Files -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.countTo.min.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/jquery.ripples-min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
