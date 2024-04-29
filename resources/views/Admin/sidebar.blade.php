<style>
    .sidebar-menu .toggle_1:after {
        display: none !important;
    }
</style>
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{route('dashboard')}}">
            <img src="{{url('images')}}/Hospital-Management-Logo-Big-PNG.png" alt="" class="dark-logo" />
            <img
                src="{{url('images')}}/Hospital-Management-Logo-Big-PNG.png"
                alt=""
                class="light-logo"
            />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li class="dropdown">
                    <a href="{{route('dashboard')}}" class="dropdown-toggle toggle_1">
                        {{-- <span class="micon bi bi-house"></span> --}}
                        <img src="{{url('Images')}}/dashboard_22.png" class="micon ml-2" style="width: 22px !important;height: 22px !important;" alt="">
                        <span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <img src="{{url('Images')}}/manage_22.png" class="micon ml-2" style="width: 22px !important;height: 22px !important;" alt="">
                        <span class="mtext">Manage Doctor</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{route('doctor.add_show')}}">ADD Doctor</a>
                        </li>
                        <li><a href="{{route('doctor.all_show')}}">View Doctor</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <img src="{{url('Images')}}/manage_22.png" class="micon ml-2" style="width: 22px !important;height: 22px !important;" alt="">
                        <span class="mtext">Manage Patient</span>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="{{route('patient.add_show')}}">ADD Patient</a>
                        </li>
                        <li><a href="{{route('patient.all_show')}}">View Patient</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>