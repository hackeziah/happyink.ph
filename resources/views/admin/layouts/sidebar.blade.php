
            <!-- Topbar Start -->
            <div class="navbar-custom" style="background:#242525">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon" style="color:#a4b7b7"></i>
                            <span class="badge badge-info rounded-circle noti-icon-badge">1</span>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="admin/light/dist/assets/images/users/franz-chibi.png" alt="user-image" class="rounded-circle" style="border:1.5px solid #">
                            <span class="pro-user-name ml-1" style="color:#a4b7b7">
                               {{-- {{ Auth::user()->name }} --}}
                                 <i class="mdi mdi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0 text-white">
                                    Welcome !
                                </h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-settings"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="fe-lock"></i>
                                <span>Lock Screen</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->

                            <a href="{{url('logout')}}" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box" style="background:#242525">
                    <a href="index.html" style="color:#fff">
                        <label class="logo text-center" style="font-size:22.5px;text-decoration:none;overflow:hidden;font-weight:600"><span style="color:#06f9d4">Happy</span>Ink</label>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect">
                            <span style="background:#fff"></span>
                            <span style="background:#fff"></span>
                            <span style="background:#fff"></span>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu" style="background:#323434">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">
                          <li class="menu-title" style="color:#a4b7b7;font-size:15px;margin-bottom:15px;font-weight:100;margin-left:25px;color:#fff">Welcome <span style="color:#06f9d5">Admin</span> !</li>
                        {{-- <span text-align ="center"></span> --}}
                        <li class="">
                                <a href="{{url('home')}}">
                                    <i class="la la-dashboard" style="color:#06f9d4"></i>
                                    <span> Dashboards </span>
                                </a>
                            </li>

                             <li class="">
                                <a href="{{url('manage-orders')}}">
                                    <i class="la la-truck" style="color:#06f9d4"></i>
                                    <span> Manage Orders </span>
                                </a>
                            </li>


                             <li class="">
                                <a href="{{ url('user-management')}}">
                                    <i class="la la-users" style="color:#06f9d4"></i>
                                    <span>User Management </span>
                                </a>
                            </li>

                            <li class="">
                                <a href="javascript: void(0);" aria-expanded="false">
                                    <i class="la la-shopping-cart" style="color:#06f9d4"></i>
                                    <span>Product</span>
                                    <span class="menu-arrow">  </span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                                    <li>
                                    	<a href="{{ url('add-product')}}">Add Product</a>
                                    </li>
  			                	    <li>
                                    	<a href="{{ url('manage-products')}}">Manage Product</a>
                                    </li>
                				    <li>
                                    	<a href="{{ url('all-stock')}}">Restock</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="">
                                <a href="javascript: void(0);" aria-expanded="false">
                                    <i class="la la-gear" style="color:#06f9d4"></i>
                                    <span>Settings</span>
                                    <span class="menu-arrow">  </span>
                                </a>
                                <ul class="nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                                    <li>
                                    <a href="{{ url('categories')}}">Categories</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
