<section id="appointment" class="st-shape-wrap st-gray-bg">
    <div class="st-shape4">
        <img src="customer/assets/img/shape/section_shape.png" alt="shape1">
    </div>
    <div class="st-shape6">
        <img src="customer/assets/img/shape/contact-shape3.svg" alt="shape3">
    </div>
    <div class="st-height-b120 st-height-lg-b80"></div>
    <div class="container">
        <div class="st-section-heading st-style1">
            <h2 class="st-section-heading-title">Make an appointment</h2>
            <div class="st-seperator">
                <div class="st-seperator-left wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                </div>
                <div class="st-seperator-center"><img src="customer/assets/img/icons/4.png" alt="icon"></div>
                <div class="st-seperator-right wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                </div>
            </div>
            <div class="st-section-heading-subtitle">Lorem Ipsum is simply dummy text of the printing and
                typesetting
                industry. <br>Lorem Ipsum the industry's standard dummy text.</div>
        </div>
        <div class="st-height-b40 st-height-lg-b40"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form method="POST" action="{{ route('appointment.create') }}" class="st-appointment-form"
                    id="appointment-form">
                    @csrf
                    @method('post')
                    @if (Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif
                    @if (Session::has('fail'))
                        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                    @endif

                    @if (Session::has('loginId'))
                        @php
                            $user = \App\Models\User::select('*')
                                ->where('id', Session::get('loginId'))
                                ->first();
                        @endphp
                    @endif
                    <div id="st-alert1"></div>
                    <div class="row">
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <div class="col-lg-6">
                            <div class="st-form-field st-style1">
                                <label>Full Name</label>
                                <input type="text" id="name" name="name" value="{{ $user->name }}"
                                    placeholder="Jhon Doe" required readonly>
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="st-form-field st-style1">
                                <label>Email Address</label>
                                <input type="email" name="email" value="{{ $user->email }}" readonly>
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="st-form-field st-style1">
                                <label>Phone Number</label>
                                <input type="phone" id="number" value="{{ $user->phone }}" name="phone"
                                    placeholder="+00 141 23 234" required readonly>
                                @if ($errors->has('phone'))
                                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="st-form-field st-style1">
                                <label>Booking Date</label>
                                <input name="booking_date" type="text" id="udate" placeholder="dd/mm/yy">
                                @if ($errors->has('booking_date'))
                                    <p class="text-danger">{{ $errors->first('booking_date') }}</p>
                                @endif
                                <div class="form-field-icon"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="st-form-field st-style1">
                                <label>Doctor</label>
                                <div class="st-custom-select-wrap">
                                    <select name="doctor_id" class="st_select1" id="udoctor"
                                        data-placeholder="Select doctor">
                                        <option></option>
                                        <option>Dr. Mark Akinde</option>
                                        @foreach ($doctors as $doctor)
                                            <option value="{{ $doctor->id }}">{{ $doctor->name }} -
                                                {{ $doctor->Department->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('doctor_id'))
                                        <p class="text-danger">{{ $errors->first('doctor_id') }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="st-form-field st-style1">
                                <label>Message</label>
                                <textarea cols="30" rows="10" id="umsg" name="message" placeholder="Write something here..."></textarea>
                                @if ($errors->has('message'))
                                    <p class="text-danger">{{ $errors->first('message') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button class="st-btn st-style1 st-color1 st-size-medium" type="submit"
                                name="submit">Appointment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
