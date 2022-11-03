<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="clinic-admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Skodash</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin') }}">
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('department') }}">
                <div class="menu-title">Department</div>
            </a>
        </li>

        <li>
            <a href="{{ route('doctor') }}">
                <div class="menu-title">Doctors</div>
            </a>
        </li>
        <li>
            <a href="{{ route('appointment.view') }}">
                <div class="menu-title">Appointment</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
