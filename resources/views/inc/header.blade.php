
<!--wrapper-->
<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
             <!-- to place an icon <div>
                <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            </div> -->
            <div>
                <h4 class="logo-text">PMS</h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">

            <li>
                <a href="dashboard" class="">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            {{-- <li class="menu-label">MANAGE</li> --}}
            <li>
                <a href="{{ route('orders.index') }}">
                    <div class="parent-icon"><i class='bx bx-edit'></i>
                    </div>
                    <div class="menu-title">Orders</div>
                </a>
                
            </li>
            <li class="menu-label">INVENTORY</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-cart'></i>
                    </div>
                    <div class="menu-title">Products</div>
                </a>
                <ul>
                    <li> 
                        <a href="{{ route('products.index') }}">
                            <div class="parent-icon"><i class='bx bx-box'></i></div>
                            Products
                        </a>
                    </li>
                    <li> 
                    <a href="addproduct"><i class="bx bx-right-arrow-alt"></i>
                        Add New Products
                    </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-chart'></i>
                    </div>
                    <div class="menu-title">Reports</div>
                </a>
                <ul>
                    <li> 
                        <a href="{{ route('report.index') }}">
                            <div class="parent-icon"><i class='bx bx-box'></i></div>
                            Today's Report
                        </a>
                    </li>
                </ul>
            </li>
            
           
          
           
            <li class="menu-label">USERS</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-user   '></i>
                    </div>
                    <div class="menu-title">Employee</div>
                </a>
            <ul>
                <li> 
                    <a href="{{ route('users.index') }}">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i>
                        </div>
                        Add User
                    </a>
                </li>
                <li>
                    <a href="showuser">
                        <div class="parent-icon"><i class="bx bx-user-circle"></i></div>
                        Manage User
                    </a>
                </li>
            </ul>
           
        </ul>
        <!--end navigation-->
    </div>
    <!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">
                        <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                        <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                    </div>
                </div>
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-icon">
                            <a class="nav-link" href="#">	<i class='bx bx-search'></i>
                            </a>
                        </li>
                       
                        <li class="nav-item dropdown dropdown-large">
                            {{-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
                                <i class='bx bx-bell'></i>
                            </a> --}}
                            <div class="dropdown-menu dropdown-menu-end">
 
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                                            ago</span></h6>
                                                <p class="msg-info">5 new user registered</p>
                                            </div>
                                        </div>
                                    </a>
                                    
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Notifications</div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            {{-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                                <i class='bx bx-comment'></i>
                            </a> --}}
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Messages</p>
                                        <p class="msg-header-clear ms-auto">Marks all as read</p>
                                    </div>
                                </a>
                                <div class="header-message-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
                                            ago</span></h6>
                                                <p class="msg-info">The standard chunk of lorem</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">View All Messages</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                @guest
                <div class="user-box dropdown">
                    @if (Route::has('login'))
                    
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                   
                @endif

                @if (Route::has('register'))
                   
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    
                @endif
            @else
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('/storage/users/' .Auth::user()->user_img)}}" class="user-img" alt="user">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                            <p class="designattion mb-0"> 
                                
                                @if (Auth::user()->is_admin == 1) Admin
                                @elseif (Auth::user()->is_admin == 2) Cashier
                                @else Manager
                                @endif
                            </p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        {{-- <li><a class="dropdown-item" href="users/profile"><i class="bx bx-user"></i><span>Profile</span></a>
                        </li>
                        <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
                        </li> --}}
                        
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class='bx bx-log-out-circle'></i><span>{{ __('Logout') }}</span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                
                            </form>
                        </li>
                    </ul>
                </div>
                @endguest
            </nav>
        </div>
    </header>
    <!--end header -->



<footer class="page-footer">
    <p class="mb-0">Copyright © {{date('Y')}}. All right reserved.</p>
</footer>
