<body id="toggle-dark">
    <div id="app" >


<div id="sidebar" class="active">


    <div class="sidebar-wrapper  active">

            <div class=" d-flex justify-content-center m-4 " >
                    <a href="{{ route('admin.dashboard') }}"><img height="50vh" src="{{asset('assets/images/logo/'. $gnl->favicon )}}" alt="Logo" srcset=""></a>
            </div>

                <div class="sidebar-toggler  x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>


        <div class="sidebar-menu">
            <ul class="menu">
                <li
                    class="sidebar-item {{ Route::is('admin.dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="sidebar-link">
                        <i class="fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li
                class="sidebar-item {{ Route::is('admin.rooms.index') ? 'active' : '' }}">
                <a href="{{ route('admin.rooms.index') }}" class="sidebar-link">
                    <i class="fas fa-bed"></i>
                    <span>Rooms</span>
                </a>
            </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fas fa-book"></i>
                        <span>Home Page</span>
                    </a>
                    <ul class="submenu ">
                        {{-- <li class="submenu-item {{ Route::is('admin.banner') ? 'active' : '' }}">
                            <a href="{{ route('admin.banner') }}">Banner</a>
                        </li>
                         <li class="submenu-item {{ Route::is('admin.slider') ? 'active' : '' }}">
                            <a href="{{ route('admin.slider') }}">Slider</a>
                        </li> --}}



                       <li class="submenu-item {{ Route::is('admin.about') ? 'active' : '' }}">
                            <a href="{{ route('admin.about') }}">About</a>
                        </li>
                        <li class="submenu-item {{ Route::is('admin.facility') ? 'active' : '' }}">
                            <a href="{{ route('admin.facility') }}">Facilities</a>
                        </li>
                        <li class="submenu-item {{ Route::is('admin.offer') ? 'active' : '' }}">
                            <a href="{{ route('admin.offer') }}">offer</a>
                        </li>

                        <li class="submenu-item {{ Route::is('admin.blog') ? 'active' : '' }}">
                            <a href="{{ route('admin.blog') }}">Blog</a>
                        </li>

                        <li class="submenu-item {{ Route::is('admin.gallery.index') ? 'active' : '' }}">
                            <a href="{{ route('admin.gallery.index') }}">Gallery </a>
                        </li>

                    </ul>
                </li>

            </ul>
        </div>
    </div>

</div>
