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
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="border p-3 rounded">
                                <h6 class="mb-0 text-uppercase">Make Report</h6>
                                <hr />
                                <form action="{{ route('report.create') }}" method="POST" enctype="multipart/form-data"
                                    class="row g-3">
                                    @csrf
                                    @method('post')
                                    @if (Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif
                                    @if (Session::has('fail'))
                                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                    @endif
                                    <input type="hidden" name="doctor_id" value="{{ $appointments->doctor_id }}">
                                    <input type="hidden" name="user_id" value="{{ $appointments->user_id }}">
                                    <input type="hidden" name="issue" value="{{ $appointments->message }}">
                                    <h6 class="mb-0 text-uppercase">ISSUE:: {{ $appointments->message }}</h6>
                                    <h6 class="mb-0 text-uppercase">To:: {{ $appointments->user->email }}</h6>
                                    <h6 class="mb-0 text-uppercase">From:: Dr. {{ $appointments->doctor->name }} -
                                        {{ $appointments->doctor->email }}</h6>
                                    <div class="col-12">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" value="{{ $appointments->user->name }}"
                                            name="uname" readonly>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Email ID</label>
                                        <input type="text" class="form-control" value="{{ $appointments->user->email }}"
                                            name="uemail" readonly>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Input File:</label>
                                        <input type="file" name="reportFile" class="form-control">
                                    </div>
                                    @if ($errors->has('reportFile'))
                                        <p class="text-danger">{{ $errors->first('reportFile') }}</p>
                                    @endif
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
