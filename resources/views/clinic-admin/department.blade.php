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
                    <h6 class="mb-0 text-uppercase">ADD DEPARTMENT</h6>
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('department.add') }}" method="POST">
                                @csrf
                                @method('post')
                                @if (Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                @endif
                                @if (Session::has('fail'))
                                    <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                @endif
                                <input class="form-control mb-3" type="text" name="name"
                                    placeholder="Input Department">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Add Department</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <h6 class="mb-0 text-uppercase">ALL DEPARTMENT</h6>
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <table class="table mb-0 table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($department as $dep_item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $dep_item->name }}</td>
                                            <td>
                                                <div>
                                                    <a href="{{ route('department.delete', $dep_item->id) }}"
                                                        class="btn btn-outline-danger">X</a>
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
