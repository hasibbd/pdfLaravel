<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
     {{--   <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link {{ Request::segment(1) == 'dashboard'  ? 'active' : ''}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>

        </li>
        <li class="nav-item">
            <a href="{{url('user-list')}}" class="nav-link {{ Request::segment(1) == 'user-list'  ? 'active' : ''}}">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>User List</p>
            </a>
        </li>--}}
        <li class="nav-item">
            <a href="{{url('template-one')}}" class="nav-link {{ Request::segment(1) == 'template-one'  ? 'active' : ''}}">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Template 1</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('template-two')}}" class="nav-link {{ Request::segment(1) == 'template-two'  ? 'active' : ''}}">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Template 2</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{url('template-three')}}" class="nav-link {{ Request::segment(1) == 'template-three'  ? 'active' : ''}}">
                <i class="nav-icon far fa-circle text-info"></i>
                <p>Template 3</p>
            </a>
        </li>
    </ul>
</nav>
