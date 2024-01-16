<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="#" class="b-brand text-primary">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="../assets/images/logo-dark.png" style="width: 170px"/>
                    <!-- <span class="badge bg-light-success rounded-pill ms-2 theme-version">v9.0</span> -->
                </a>
            </div>
            <div class="navbar-content">
                <div class="card pc-user-card">
                    <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                        <img src="{{ Auth::user()->image ? Auth::user()->image : '../assets/images/user/avatar-1.jpg' }}" alt="user-image" class="user-avtar hei-40 wid-40 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                        <h6 class="mb-0">{{ Auth::user()->name ? Auth::user()->name : '' }}</h6>
                        <small>Administrator</small>
                        </div>
                        <a class="btn btn-icon btn-link-secondary avtar" data-bs-toggle="collapse" href="#pc_sidebar_userlink">
                        <svg class="pc-icon">
                            <use xlink:href="#custom-sort-outline"></use>
                        </svg>
                        </a>
                    </div>
                    <div class="collapse pc-user-links" id="pc_sidebar_userlink">
                        <div class="pt-3">
                            <a href="#!">
                                <i class="bx bx-user"></i>
                                <span>My Account</span>
                            </a>
                            <a href="#!">
                                <i class="bx bx-cog"></i>
                                <span>Settings</span>
                            </a>
                            <a href="#!">
                                <i class="bx bx-lock"></i>
                                <span>Lock Screen</span>
                            </a>
                            <a  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off"></i>
                                <span>{{ ('Logout') }}</span>
                            </a>
                        </div>
                    </div>
                    </div>
                </div>

                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="{{ route('admin.home')}}" class="pc-link">
                            <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-status-up"></use>
                            </svg>
                            </span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('slide_banner')}}" class="pc-link">
                            <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-fatrows"></use>
                            </svg>
                            </span>
                            <span class="pc-mtext">Slide Banner</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('blog_center')}}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-element-plus"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Blog Center</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('banner')}}" class="pc-link">
                            <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-cpu-charge"></use>
                            </svg>
                            </span>
                            <span class="pc-mtext">Banner</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label>Type Category</label>
                        <svg class="pc-icon">
                            <use xlink:href="#custom-presentation-chart"></use>
                        </svg>
                    </li>
                    <li class="pc-item">
                        <a href="{{route('category')}}" class="pc-link">
                            <span class="pc-micon">
                                <i class='bx bx-hive' ></i>
                            </span>
                            <span class="pc-mtext">Category</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{route('sub.category')}}" class="pc-link">
                            <span class="pc-micon">
                                <i class='bx bx-pie-chart-alt-2' ></i>
                            </span>
                            <span class="pc-mtext">Sub Category</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label>Data</label>
                        <svg class="pc-icon">
                            <use xlink:href="#custom-box-1"></use>
                        </svg>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('product')}}" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-box-1"></use>
                                </svg> 
                            </span>
                            <span class="pc-mtext">Products</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('feature.size')}}" class="pc-link">
                            <span class="pc-micon">
                                <i class='bx bxl-mongodb'></i>
                            </span>
                            <span class="pc-mtext">Feature Size</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{route('feature.img')}}" class="pc-link">
                            <span class="pc-micon">
                                <i class='bx bxs-fridge'></i>
                            </span>
                            <span class="pc-mtext">Feature Image</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label>Account</label>
                        <svg class="pc-icon">
                            <use xlink:href="#custom-box-1"></use>
                        </svg>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('admin.user')}}" class="pc-link">
                            <span class="pc-micon">
                                <i class='bx bxs-user' ></i>
                            </span>
                            <span class="pc-mtext">User</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link">
                            <span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-setting-2"></use>
                                </svg>
                            </span>
                            <span class="pc-mtext">Settings</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span
                        ></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="{{ route('admin.account')}}">Account Profile</a></li>
                            <li class="pc-item"><a class="pc-link" href="{{ route('admin.socail') }}">Social media</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->