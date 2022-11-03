<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <form method="POST" action="{{ route('appointment.create') }}" class="st-appointment-form" id="appointment-form">
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
            <div class="col-lg-6">
                <div class="st-form-field st-style1">
                    <label>Full Name</label>
                    <input type="text" id="uname" name="name" value="{{ $user->name }}"
                        placeholder="Jhon Doe" required readonly>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="st-form-field st-style1">
                    <label>Email Address</label>
                    <input type="text" id="uemail" name="email" value="{{ $user->email }}"
                        placeholder="example@gmail.com" required readonly>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="st-form-field st-style1">
                    <label>Phone Number</label>
                    <input type="text" id="unumber" value="{{ $user->phone }}" name="number"
                        placeholder="+00 141 23 234" required readonly>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="st-form-field st-style1">
                    <label>Booking Date</label>
                    <input name="date" type="text" id="udate" placeholder="dd/mm/yy">
                    <div class="form-field-icon"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="st-form-field st-style1">
                    <label>Department</label>
                    <div class="st-custom-select-wrap">
                        <select name="udepartment" id="udepartment" class="st_select1"
                            data-placeholder="Select department" wire:model="selectedDepartment">
                            <option></option>
                            @foreach ($depart as $departs)
                                <option value="{{ $departs->id }}">{{ $departs->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <h2>

                {{ $selectedDepartment }}
            </h2>
            <div class="col-lg-6">
                <div class="st-form-field st-style1">
                    @if (!is_null($doctors))
                        <label>Doctor</label>
                        <div class="st-custom-select-wrap">
                            <select name="udoctor" class="st_select1" id="udoctor" data-placeholder="Select doctor"
                                wire:model="selectedDoctor">
                                <option></option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach

                            </select>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-12">
                <div class="st-form-field st-style1">
                    <label>Message</label>
                    <textarea cols="30" rows="10" id="umsg" name="umsg" placeholder="Write something here..."></textarea>
                </div>
            </div>
            <div class="col-lg-12">
                <button class="st-btn st-style1 st-color1 st-size-medium" type="submit" id="appointment-submit"
                    name="submit">Appointment</button>
            </div>
        </div>
    </form>
</div>
