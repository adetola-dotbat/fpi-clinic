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
                <div class="col-xl-10 mx-auto">
                    <h6 class="mb-0 text-uppercase">ALL APPOINTMENT</h6>
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0 table-hover">
                                <thead>
                                    @if (Session::has('update'))
                                        <div class="alert alert-success">{{ Session::get('update') }}</div>
                                    @endif
                                    @if (Session::has('delete'))
                                        <div class="alert alert-danger">{{ Session::get('delete') }}</div>
                                    @endif
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Patient name</th>
                                        <th scope="col">Patient Phone</th>
                                        <th scope="col">Issue</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appoint)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td class="">{{ $appoint->user->name }}
                                            </td>
                                            <td class="">{{ $appoint->user->phone }}
                                            </td>
                                            <td class="">{{ $appoint->message }}
                                            </td>
                                            <td>
                                                @if ($appoint->status == 'pending')
                                                    <span class="text-capitalize badge bg-warning">{{ $appoint->status }}
                                                    </span>
                                                @endif
                                                @if ($appoint->status == 'accepted')
                                                    <span class="text-capitalize badge bg-success">{{ $appoint->status }}
                                                    </span>
                                                @endif
                                            </td>

                                            <td>
                                                <div class="col">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-secondary">Action</button>
                                                        <button type="button"
                                                            class="btn btn-secondary split-bg-secondary dropdown-toggle dropdown-toggle-split"
                                                            data-bs-toggle="dropdown" aria-expanded="false"> <span
                                                                class="visually-hidden">Toggle Dropdown</span>
                                                        </button>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                @if ($appoint->status == 'pending')
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('appointment.approve', $appoint->id) }}">Approve</a>
                                                                @endif
                                                                @if ($appoint->status == 'accepted')
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('appointment.pend', $appoint->id) }}">Pend</a>
                                                                @endif
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('appointment.delete', $appoint->id) }}">Cancle</a>
                                                            </li>
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('report', ['appoint_id' => $appoint->id]) }}">Make
                                                                    Report</a>
                                                            </li>
                                                        </ul>
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
