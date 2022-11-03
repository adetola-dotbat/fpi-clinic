@extends('layouts.navs')
@section('content')
    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        @include('clinic-admin.pages.header')
        <!--end top header-->

        <!--start sidebar -->
        @include('clinic-admin.pages.sidebar')
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xxl-4">
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="">
                                    <p class="mb-1">Sessions</p>
                                    <h4 class="mb-0">89K</h4>
                                </div>
                                <div class="ms-auto fs-4 text-primary">
                                    <i class="bi bi-alexa"></i>
                                </div>
                            </div>
                            <div id="chart1"></div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="">
                                    <p class="mb-1">Page Per Visits</p>
                                    <h4 class="mb-0">48K</h4>
                                </div>
                                <div class="ms-auto fs-4 text-success">
                                    <i class="bi bi-eye-fill"></i>
                                </div>
                            </div>
                            <div id="chart2"></div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="">
                                    <p class="mb-1">Unique Visitors</p>
                                    <h4 class="mb-0">18K</h4>
                                </div>
                                <div class="ms-auto fs-4 text-purple">
                                    <i class="bi bi-cloud-arrow-down-fill"></i>
                                </div>
                            </div>
                            <div id="chart3"></div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 overflow-hidden">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="">
                                    <p class="mb-1">Bounce Rate</p>
                                    <h4 class="mb-0">24.6%</h4>
                                </div>
                                <div class="ms-auto fs-4 text-orange">
                                    <i class="bi bi-bar-chart-line-fill"></i>
                                </div>
                            </div>
                            <div id="chart4"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end row-->

        </main>
        <!--end page main-->


        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

    </div>
    <!--end wrapper-->
@endsection
{{-- </body>


</html> --}}
