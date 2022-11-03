<header class="st-site-header st-style1 st-sticky-header">

    <div class="st-main-header">
        <div class="container">
            <div class="st-main-header-in">
                <div class="st-main-header-left">
                    <a class="st-site-branding"><img style="height: 5rem;"
                            src="{{ asset('customer/assets/img/header-logo.png') }}" alt="Nischinto"></a>
                </div>
                <div class="st-main-header-right">
                    <div class="st-nav">
                        <ul class="st-nav-list st-onepage-nav">
                            <li><a href="#home" class="st-smooth-move">Home</a></li>
                            <li><a href="#about" class="st-smooth-move">About</a></li>
                            <li><a href="#department" class="st-smooth-move">Department</a></li>
                            <li><a href="#doctors" class="st-smooth-move">Doctors</a></li>


                            @if (Session::has('loginId'))
                                @php
                                    $account = \App\Models\User::select('*')
                                        ->where('id', Session::get('loginId'))
                                        ->first();
                                @endphp
                                <li><a href="{{ route('appointment.show', $account->id) }}" class="st-smooth-move">View
                                        Appointment</a>
                                </li>
                                <li><a href="#doctors" class="st-smooth-move">{{ $account->email }}</a></li>

                                <li><a href="{{ route('logout') }}"
                                        class="st-btn st-style1 st-color1 p-3 st-smooth-move">Logout</a>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}"
                                        class="st-smooth-move st-btn st-style2 st-color1 p-3">Login</a></li>
                                <li><a href="{{ route('register') }}"
                                        class="st-btn st-style1 st-color1 p-3 st-smooth-move">Register</a> </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
