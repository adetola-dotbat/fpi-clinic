@extends('layouts.app')
@section('content')
    <!--start wrapper-->
    <div class="wrapper">

        <!--start content-->
        <main class="authentication-content">
            <div class="container-fluid">
                <div class="authentication-card">
                    <div class="card shadow rounded-0 overflow-hidden">
                        <div class="row g-0">
                            <div
                                class="col-lg-6 bg-login d-flex align-items-center
                            justify-content-center">
                                <img src="clinic-admin/assets/images/error/login-img.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body p-4 p-sm-5">
                                    <h5 class="card-title">Sign Up</h5>
                                    <p class="card-text ">See your growth and get
                                        consulting support!</p>
                                    <form class="form-body" action="{{ route('register-admin') }}" method="POST">
                                        @csrf
                                        @method('post')
                                        @if (Session::has('success'))
                                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                                        @endif
                                        @if (Session::has('fail'))
                                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                                        @endif


                                        <div class="login-separater text-center">
                                            <span>OR SIGN UP HERE</span>
                                            <hr>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-12 ">
                                                <label for="inputName" class="form-label">Name</label>
                                                <div
                                                    class="ms-auto
                                                position-relative">
                                                    <div
                                                        class="position-absolute
                                                    top-50 translate-middle-y
                                                    search-icon px-3">
                                                        <i
                                                            class="bi
                                                        bi-person-circle"></i>
                                                    </div>
                                                    <input type="text" name="name"
                                                        class="form-control
                                                    radius-30"
                                                        id="inputName" placeholder="Enter Name">
                                                    @if ($errors->has('name'))
                                                        <p class="text-danger">{{ $errors->first('name') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                <div
                                                    class="ms-auto
                                                position-relative">
                                                    <div
                                                        class="position-absolute
                                                    top-50 translate-middle-y
                                                    search-icon px-3">
                                                        <i
                                                            class="bi
                                                        bi-envelope-fill"></i>
                                                    </div>
                                                    <input type="email" name="email"
                                                        class="form-control
                                                    radius-30"
                                                        id="inputEmailAddress" placeholder="Email Address">
                                                    @if ($errors->has('email'))
                                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Phone number</label>
                                                <div
                                                    class="ms-auto
                                                position-relative">
                                                    <div
                                                        class="position-absolute
                                                    top-50 translate-middle-y
                                                    search-icon px-3">
                                                        <i
                                                            class="bi
                                                        bi-envelope-fill"></i>
                                                    </div>
                                                    <input type="phone" name="phone"
                                                        class="form-control
                                                    radius-30"
                                                        placeholder="Phone number">
                                                    @if ($errors->has('phone'))
                                                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">User Type</label>
                                                <div
                                                    class="ms-auto
                                                position-relative">
                                                    <div
                                                        class="position-absolute
                                                    top-50 translate-middle-y
                                                    search-icon px-3">
                                                        <i
                                                            class="bi
                                                        bi-envelope-fill"></i>
                                                    </div>
                                                    <input type="number" name="usertype"
                                                        class="form-control
                                                    radius-30"
                                                        placeholder="Usertype
                                                    ">
                                                    @if ($errors->has('usertype'))
                                                        <p class="text-danger">{{ $errors->first('usertype') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Enter
                                                    Password</label>
                                                <div
                                                    class="ms-auto
                                                position-relative">
                                                    <div
                                                        class="position-absolute
                                                    top-50 translate-middle-y
                                                    search-icon px-3">
                                                        <i class="bi bi-lock-fill"></i>
                                                    </div>
                                                    <input type="password" name="password"
                                                        class="form-control
                                                    radius-30"
                                                        id="inputChoosePassword"
                                                        placeholder="Enter
                                                    Password">
                                                    @if ($errors->has('password'))
                                                        <p class="text-danger">{{ $errors->first('password') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">I
                                                        Agree to
                                                        the Trems & Conditions</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit"
                                                        class="btn
                                                    btn-primary radius-30">Sign
                                                        in</button>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <p class="mb-0">Already have an
                                                    account? <a href="{{ route('login') }}">Sign
                                                        up here</a></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!--end page main-->

    </div>
    <!--end wrapper-->


    {{-- @include('home.pages.footer-script') --}}
@endsection
