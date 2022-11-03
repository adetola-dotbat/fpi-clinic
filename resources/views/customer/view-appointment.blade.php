<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <!-- Page Title -->
    <title>FPI- Clinic</title>
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('customer/assets/img/favicon.png') }}" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('customer/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/lightgallery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/jQueryUi.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/textRotate.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('customer/assets/css/style.css') }}" />
</head>

<body>
    {{-- @include('customer.pages.preload') --}}
    <!-- Start Header Section -->
    @include('customer.pages.header')
    <!-- End Header Section -->

    <div class="st-content">

        <!-- Start Feature Seciton -->
        @include('customer.pages.feature')
        <!-- End Feature Seciton -->

        <!-- Start About Seciton -->
        <section class="st-about-wrap" id="about">
            <div class="st-shape-bg">
                <img src="customer/assets/img/shape/about-bg-shape.svg" alt="shape">
            </div>
            <div class="st-height-b120 st-height-lg-b50"></div>
            <div class="container">
                <div class="st-section-heading st-style1">
                    <h2 class="st-section-heading-title">Appointments</h2>
                    <div class="st-seperator">
                        <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                        <div class="st-seperator-center"><img src="{{ asset('customer/assets/img/icons/4.png') }}"
                                alt="icon">
                        </div>
                        <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                        </div>
                    </div>

                </div>
                <div class="st-height-b40 st-height-lg-b40"></div>
            </div>
            <div class="container">
                <div class="col-xl-9 mx-auto">
                    <h6 class="mb-0 text-uppercase py-3">My Appointment</h6>
                    <hr />

                    <div class="card-body">
                        <table class="table mb-0 table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date of Appointment</th>
                                    <th scope="col">Issue</th>
                                    <th scope="col">Doctor's name</th>
                                    <th scope="col">Doctor's phone</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $appointment->booking_date }}</td>
                                        <td>{{ $appointment->message }}</td>
                                        <td>{{ $appointment->doctor->name }}</td>
                                        <td>{{ $appointment->doctor->phone }}</td>
                                        <td>
                                            @if ($appointment->status == 'pending')
                                                <span
                                                    class="badge bg-primary badge-pill text-uppercase text-white">{{ $appointment->status }}</span>
                                            @endif
                                            @if ($appointment->status == 'accepted')
                                                <span
                                                    class="badge bg-success badge-pill text-uppercase text-white">{{ $appointment->status }}</span>
                                            @endif

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>


                    <h6 class="mb-0 text-uppercase">My medical report</h6>
                    <hr />
                    <div class="card info-table bg-warning">
                        <div class="card-body">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">From Doctor</th>
                                        <th scope="col">Issue on</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reports as $report)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>Dr. {{ $report->doctor->name }} </td>
                                            <td>{{ $report->issue }} </td>
                                            <td>
                                                <div class="row">
                                                    <div class="">
                                                        @if ($report->payment == 'pending')
                                                            <a href="{{ route('pay', [
                                                                'id' => $report->id,
                                                                'amount' => 2000,
                                                                'email' => $report->user->email,
                                                                'user_phone' => $report->user->phone,
                                                                'uname' => $report->user->name,
                                                            ]) }}"
                                                                class="st-btn st-style1 st-color1 st-size-medium"
                                                                type="submit" name="submit">Make Payment</a>
                                                        @else
                                                            <a href="/report/{{ $report->file }}" target="_blank"
                                                                class="st-btn st-style1 st-color1 st-size-medium"
                                                                type="submit" name="submit">Print Report</a>
                                                        @endif

                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>

            </div>
        </section>

        <!-- End About Seciton -->

        <!-- Start Team Section -->
        @include('customer.pages.doctors')
        <!-- End Team Section -->
        <hr>
        <!-- Start gallery Section -->

    </div>
    <!-- Start Footer -->
    @include('customer.pages.footer')
    <!-- End Footer -->

    <!-- Start Video Popup -->
    <div class="st-video-popup">
        <div class="st-video-popup-overlay"></div>
        <div class="st-video-popup-content">
            <div class="st-video-popup-layer"></div>
            <div class="st-video-popup-container">
                <div class="st-video-popup-align">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="about:blank"></iframe>
                    </div>
                </div>
                <div class="st-video-popup-close"></div>
            </div>
        </div>
    </div>
    <!-- End Video Popup -->

    <!-- Scripts -->
    <script src="{{ asset('customer/assets/js/vendor/modernizr-3.5.0.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/vendor/jquery-1.12.4.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/isotope.pkg.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/jquery.slick.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/mailchimp.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/counter.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/lightgallery.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/ripples.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/wow.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/jQueryUi.js') }} "></script>
    <script src="{{ asset('customer/assets/js/textRotate.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/select2.min.js') }} "></script>
    <script src="{{ asset('customer/assets/js/main.js') }} "></script>
</body>



</html>
