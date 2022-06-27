<header class="header-mobile d-block d-lg-none">
    <div class="header-mobile__bar">
        <div class="container-fluid">
            <div class="header-mobile-inner">
                <a class="logo" href="#">
                    <img src="{{ url('assets/images/icon/log.png') }}" alt="Cool Admin" />
                </a>
                <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                </button>
            </div>
        </div>
    </div>
    <nav class="navbar-mobile">
        <div class="container-fluid">
            <ul class="navbar-mobile__list list-unstyled">
                <li>
                <a href="/admin_home">
                    <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li>
                    <a href="/admin_home/showusers">
                        <i class="fas fa-chart-bar"></i>Show all users</a>
                </li>
                <li>
                    <a href="/admin_home/add_video_mainPage">
                        <i class="fas fa-table"></i>Add viedo on main page</a>
                </li>
                <li>
                    <a href="/admin_home/add_video_servicePage">
                        <i class="far fa-check-square"></i>Add tutorial on services page</a>
                </li>
                <li>
                    <a href="/admin_home/add_video_aboutPage">
                        <i class="fas fa-calendar-alt"></i>Add viedo on about us page</a>
                </li>
                <li>
                    <a href="/admin_home/index_video_mainPage">
                        <i class="fas fa-copy"></i>Show video of main page</a>
                </li>
                <li>
                    <a href="/admin_home/index_video_servicePage">
                        <i class="fas fa-desktop"></i>Show video of services page</a>
                </li>
                <li>
                    <a href="/admin_home/index_video_aboutPage">
                        <i class="fas fa-desktop"></i>Show video of about us</a>
                </li>
            </ul>
        </div>
    </nav>
</header>



<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
            <img src="{{ url('assets/images/icon/log.png') }}" alt="Cool Admin" />
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
    <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <a href="/admin_home">
                    <i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li>
                    <a href="/admin_home/showusers">
                        <i class="fas fa-chart-bar"></i>Show all users</a>
                </li>
                <li>
                    <a href="/admin_home/add_video_mainPage">
                        <i class="fas fa-table"></i>Add viedo main page</a>
                </li>
                <li>
                    <a href="/admin_home/add_video_servicePage">
                        <i class="far fa-check-square"></i>Add tutor services page</a>
                </li>
                <li>
                    <a href="/admin_home/add_video_aboutPage">
                        <i class="fas fa-calendar-alt"></i>Add viedo aboutus page</a>
                </li>
                <li>
                    <a href="/admin_home/index_video_mainPage">
                        <i class="fas fa-copy"></i>Show video main page</a>
                </li>
                <li>
                    <a href="/admin_home/index_video_servicePage">
                        <i class="fas fa-desktop"></i>Show video services</a>
                </li>
                <li>
                    <a href="/admin_home/index_video_aboutPage">
                        <i class="fas fa-desktop"></i>Show video about us</a>
                </li>
            </ul>
    </nav>
    </div>
</aside>

