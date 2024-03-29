<header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{asset('images/logo-icon.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{asset('/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="{{asset('images/logo-text.png')}}" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{asset('images/logo-light-text.png')}}" class="light-logo" alt="homepage" /></span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a
                                class="nav-link nav-toggler d-block d-md-none text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"><img src="{{asset('images/menu.png')}}" alt="homepage" class="ti-menu" width="20" height="20" /></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item d-none d-md-block search-box"> <a
                                class="nav-link d-none d-md-block text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a
                                class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="mdi mdi-view-grid"></i></a>
                            <div class="dropdown-menu scale-up-left">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 mb-4">
                                        <h4 class="mb-3">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid"
                                                            src="../assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid"
                                                            src="../assets/images/big/img2.jpg" alt="Second slide">
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid"
                                                            src="../assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls"
                                                role="button" data-slide="prev"> <span
                                                    class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls"
                                                role="button" data-slide="next"> <span
                                                    class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 mb-4">
                                        <h4 class="mb-3">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div id="accordion" class="nav-accordion" role="tablist"
                                            aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-parent="#accordion"
                                                            href="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel"
                                                    aria-labelledby="headingOne">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingTwo">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingThree">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim
                                                        eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  mb-4">
                                        <h4 class="mb-3">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1"
                                                    placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 mb-4">
                                        <h4 class="mb-3">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                    Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                                <ul>
                                    <li>
                                        <h5 class="font-medium py-3 px-4 border-bottom">Notifications</h5>
                                    </li>
                                    <li>
                                        <div class="message-center position-relative">
                                            <!-- Message -->
                                            <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                                <div class="btn btn-danger btn-circle mr-2"><i class="fa fa-link"></i>
                                                </div>
                                                <div class="mail-contnet d-inline-block align-middle">
                                                    <h5 class="my-1">Luanch Admin</h5> <span
                                                        class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">Just
                                                        see the my new
                                                        admin!</span> <span
                                                        class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:30
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                                <div class="btn btn-success btn-circle mr-2"><i class="ti-calendar"></i>
                                                </div>
                                                <div class="mail-contnet d-inline-block align-middle">
                                                    <h5 class="my-1">Event today</h5> <span
                                                        class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">Just
                                                        a reminder that
                                                        you have event</span> <span
                                                        class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:10
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                                <div class="btn btn-info btn-circle mr-2"><i class="ti-settings"></i>
                                                </div>
                                                <div class="mail-contnet d-inline-block align-middle">
                                                    <h5 class="my-1">Settings</h5> <span
                                                        class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">You
                                                        can customize this
                                                        template as you want</span> <span
                                                        class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:08
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                                <div class="btn btn-primary btn-circle mr-2"><i class="ti-user"></i>
                                                </div>
                                                <div class="mail-contnet d-inline-block align-middle">
                                                    <h5 class="my-1">Pavan kumar</h5> <span
                                                        class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">Just
                                                        see the my
                                                        admin!</span>
                                                    <span
                                                        class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:02
                                                        AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center border-top pt-3" href="javascript:void(0);">
                                            <strong>Check all
                                                notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" id="2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <h5 class="font-medium py-3 px-4 border-bottom">You have 4 new messages</h5>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                                <div class="user-img position-relative d-inline-block mr-2 mb-3"> <img
                                                        src="../assets/images/users/1.jpg" alt="user"
                                                        class="rounded-circle"> <span
                                                        class="profile-status pull-right d-inline-block position-absolute bg-success rounded-circle"></span>
                                                </div>
                                                <div class="mail-contnet d-inline-block align-middle">
                                                    <h5 class="my-1">Pavan kumar</h5> <span
                                                        class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">Just
                                                        see the my
                                                        admin!</span>
                                                    <span
                                                        class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:30
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                                <div class="user-img position-relative d-inline-block mr-2 mb-3"> <img
                                                        src="../assets/images/users/2.jpg" alt="user"
                                                        class="rounded-circle"> <span
                                                        class="profile-status pull-right d-inline-block position-absolute bg-danger rounded-circle"></span>
                                                </div>
                                                <div class="mail-contnet d-inline-block align-middle">
                                                    <h5 class="my-1">Sonu Nigam</h5> <span
                                                        class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">I've
                                                        sung a song! See
                                                        you at</span> <span
                                                        class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:10
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                                <div class="user-img position-relative d-inline-block mr-2 mb-3"> <img
                                                        src="../assets/images/users/3.jpg" alt="user"
                                                        class="rounded-circle"> <span
                                                        class="profile-status pull-right d-inline-block position-absolute bg-warning rounded-circle"></span>
                                                </div>
                                                <div class="mail-contnet d-inline-block align-middle">
                                                    <h5 class="my-1">Arijit Sinh</h5> <span
                                                        class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">I
                                                        am a singer!</span>
                                                    <span
                                                        class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:08
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="#" class="border-bottom d-block text-decoration-none py-2 px-3">
                                                <div class="user-img position-relative d-inline-block mr-2 mb-3"> <img
                                                        src="../assets/images/users/4.jpg" alt="user"
                                                        class="rounded-circle"> <span
                                                        class="profile-status pull-right d-inline-block position-absolute bg-warning rounded-circle"></span>
                                                </div>
                                                <div class="mail-contnet d-inline-block align-middle">
                                                    <h5 class="my-1">Pavan kumar</h5> <span
                                                        class="mail-desc font-12 text-truncate overflow-hidden text-nowrap d-block">Just
                                                        see the my
                                                        admin!</span>
                                                    <span
                                                        class="time font-12 mt-1 text-truncate overflow-hidden text-nowrap d-block">9:02
                                                        AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center border-top pt-3" href="javascript:void(0);">
                                            <strong>See all
                                                e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="../assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <h4>Steave Jobs</h4>
                                                <p class="text-muted"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb8d9a898e95bb9c969a9297d5989496">[email&#160;protected]</a></p><a href="pages-profile.html"
                                                    class="btn btn-rounded btn-danger btn-sm">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href=""
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="flag-icon flag-icon-us"></i></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up"> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-cn"></i> China</a> <a class="dropdown-item"
                                    href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>