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
                    <h6 class="mb-0 text-uppercase">ADD DOCTOR</h6>
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('doctor.add') }}" method="POST">
                                @csrf
                                @method('post')
                                @if (Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                @if (Session::has('fail'))
                                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                @endif
                                <input class="form-control mb-3" type="text" name="name" placeholder="Full Name">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                                <input class="form-control mb-3" type="email" name="email" placeholder="Email">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                                <input class="form-control mb-3" type="phone" name="phone" placeholder="Phone">
                                @if ($errors->has('phone'))
                                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                                @endif

                                <select name="department_id" class="form-select mb-3" required>
                                    <option selected>Select Department</option>
                                    @foreach ($department as $dep_item)
                                        <option value="{{ $dep_item->id }}">{{ $dep_item->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('department_id'))
                                    <p class="text-danger">{{ $errors->first('department_id') }}</p>
                                @endif


                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Add Doctor</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h6 class="mb-0 text-uppercase">ALL DOCTOR</h6>
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0 table-hover">
                                <thead>
                                    @if (Session::has('delete'))
                                        <div class="alert alert-success">{{ Session::get('delete') }}</div>
                                    @endif
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Full name</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td class="">{{ $doctor->name }}
                                            </td>
                                            <td class="">
                                                {{ $doctor->Department->name }}</td>
                                            <td class="">
                                                {{ $doctor->email }}</td>
                                            <td class="">
                                                {{ $doctor->phone }}</td>
                                            <td class="">
                                                <div>
                                                    <a href="{{ route('doctor.edit', $doctor->id) }}"
                                                        class="btn btn-outline-success py-1">Edit</a>
                                                    <a href="{{ route('doctor.delete', $doctor->id) }}"
                                                        class="btn btn-danger py-1">Delete</a>
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
