
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->

    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->

        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
                <div class="container">
                    <div class="container">
                        <div class="container">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                                @yield('profile')
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    @yield('content')
                    </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>
  </div>
</div>
</div>

