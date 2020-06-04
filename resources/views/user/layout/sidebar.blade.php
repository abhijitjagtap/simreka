<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(../assets/images/background/user-info.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div > </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="true">Hi {{ Auth::user()->name }}</a>
                        <div class="dropdown-menu animated flipInY"> <a href="#" class="dropdown-item"><i
                                    class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i
                                    class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                
                                    
                           
                                    
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                       
                        <li> <a class="has-arrow waves-effect waves-dark" href="{{ url('/user') }}" aria-expanded="false"><i
                                    class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a>
                           
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="{{ url('/data') }}"  aria-expanded="false"><i
                                    class="mdi mdi-laptop-windows"></i><span class="hide-menu">Data</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="../minisidebar/index.html">Data 1</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="{{ url('/setting') }}"  aria-expanded="false"><i
                                    class="mdi mdi-bullseye"></i><span class="hide-menu">setting</span></a>
                           
                        </li>
                        <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <i
                                    class="fa fa-power-off">
                                    
                                    </i> </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i
                        class="ti-settings"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i
                        class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i
                        class="mdi mdi-power"></i></a> </div>
            <!-- End Bottom points-->
        </aside>