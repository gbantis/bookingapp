@extends('layout.dashboard')
@section('content')
            <div class="container-fluid dashboard-inner-body-container">
                <div class="breadcrumb-content d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="section-heading">
                        <h2 class="sec__title font-size-24 mb-0">Bookings</h2>
                    </div>
                    <ul class="list-items bread-list bread-list-2">
                        <li><a href="index.html">Home</a></li>
                        <li>Dashboard</li>
                        <li>Bookings</li>
                    </ul>
                </div><!-- end breadcrumb-content -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-card dashboard-card mb-4 px-0">
                            <div class="block-card-header d-flex flex-wrap align-items-center justify-content-between px-4">
                                <h2 class="widget-title pb-0">Bookings Requests</h2>
                                <div class="user-chosen-select-container">
                                    <select class="user-chosen-select">
                                        <option value="1">All</option>
                                        <option value="2">Approved</option>
                                        <option value="3">Pending</option>
                                        <option value="4">Canceled</option>
                                    </select>
                                </div>
                            </div>
                            <div class="block-card-body pt-0">
                                <div class="generic-list dashboard-booking-list ">
                                    <div class="generic-list-item d-flex">
{{--                                        <div class="user-thumb user-thumb-lg flex-shrink-0 align-self-start">--}}
{{--                                            <img src="images/avatar.png" alt="author-image">--}}
{{--                                        </div>--}}
                                        <div class="ml-3 flex-grow-1 position-relative">
                                            @foreach ($rooms as $room)
                                                @foreach ($room->reservations as $reservation)
                                            <h3 class="text-color font-size-20 mb-3"><a href="listing-details.html" class="text-color">{{$room->title}}</a></h3>

                                            <ul class="list-items list--items">
                                                <li class="mb-3"><span class="text-color">Booking Date:</span> {{ $reservation->start_date}}- {{ $reservation->end_date}}</li>
                                                <li class="mb-3"><span class="text-color">Persons:</span> 2 Peoples</li>
                                                <li class="mb-3"><span class="text-color">Price:</span> ${{ number_format($reservation->price, 2) }}</li>
                                                <li class="mb-3"><span class="text-color">Email:</span><a href="mailto:yormail@domain.com" class="text-gray before-none">{{$reservation->user->email}}</a></li>
                                                <li class="mb-3"><span class="text-color">Phone:</span><a href="tel:+496170961709" class="text-gray before-none">+496170961709</a></li>
                                                <li class="mb-3"><span class="text-color">Client:</span>{{$reservation->user->name}}</li>
                                                <li class="mb-3">

                                                    <span class="text-color">Booking Status:</span>
                                                    <span class="{{$reservation->status == null ? 'badge badge-warning font-weight-medium line-height-16 p-1 font-size-12 px-2 ml-1 w-auto' : 'badge badge-success font-weight-medium line-height-16 p-1 font-size-12 px-2 ml-1 w-auto'}}">{{$reservation->status == null ? 'Pending' : 'Approved'}}</span>
                                                </li>
                                            </ul>
                                                    <div class="action-buttons  top-0 right-0">
                                                        <form action="{{ route('update_status', $reservation->id) }}" method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            @if($reservation->status == null)
                                                                <input name="status" type="hidden" value="1" />
                                                                <button type="submit" class="btn bg-rgb-success font-weight-medium">Approve </button>
                                                            @else
                                                                <input name="status" type="hidden" value="0" />
                                                                <button type="submit" class="btn bg-rgb-danger font-weight-medium">Reject </button>
                                                            @endif

                                                        </form>
{{--                                                        <a href="#" class="btn bg-rgb-danger font-weight-medium mr-2"><i class="la la-times-circle mr-1"></i>Cancel</a>--}}
{{--                                                        <a href="#" class="btn bg-rgb-success font-weight-medium"><i class="la la-check-circle mr-1"></i>Approve</a>--}}
                                                    </div>
                                            @endforeach
                                            @endforeach
                                        </div>

                                    </div><!-- end generic-list-item -->

                                </div>
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
@endsection
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
