<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item user-profile">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <img src="../assets/images/users/profile.png" alt="Hi">
                                <span class="hide-menu">{{Auth::user()->name}}</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link p-0">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> My Profile </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link p-0">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> My Balance </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link p-0">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Inbox </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link p-0" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu">  </span>
                                    </a> <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                   
                                </li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i data-feather="home" class="feather-icon"></i>
                                <span class="hide-menu">Dashboard </span>
                            </a>
                          
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark"
                                href="javascript:void(0)" aria-expanded="false"><i data-feather="clipboard" class="feather-icon"></i><span class="hide-menu">Organization</span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="layout-inner-fixed-left-sidebar.html"
                                        class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span
                                            class="hide-menu"> DATA</span></a></li>
                                
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false">
                                <i  class="mdi mdi-settings"></i>
                                <span class="hide-menu">Setting </span>
                            </a>
                          
                        </li>

                        
                    </ul>
                    
                </nav>
              
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>