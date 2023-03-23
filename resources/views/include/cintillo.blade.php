<!-- Topbar Start -->
<div class="navbar-custom">
                    <div class="container-fluid">
                        <ul class="list-unstyled topnav-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
        
                            <li class="dropdown notification-list"> 
                                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('assets/images/users/admin-image.jpg') }}" alt="user-image" class="rounded-circle"> 
                                    <span class="pro-user-name ml-1">
                                        Bienvenido: {{ session('usuario') }} <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <a href="{{url('cliente/perfil')}}" class="dropdown-item notify-item">
                                        <i class="fe-user"></i>
                                        <span>Mi perfil</span>
                                    </a>
                                    <div class="dropdown-divider"></div>

                                    <!-- item-->
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                        <i class="fe-log-out"></i>
                                        <span>Salir</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>

                        </ul>
    
                        <!-- LOGO -->
                        <div class="logo-box">

                            <a href="index.html" class="logo text-center logo-dark"> 
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo_refriperu.png') }}" alt="" height="40">  
                                    <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                                </span>
                                <span class="logo-sm">
                                    <!-- <span class="logo-lg-text-dark">A</span> -->
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="24">
                                </span>
                            </a>

                            <a href="index.html" class="logo text-center logo-light">
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo_refriperu.png') }}" alt="" height="40">
                                    <!-- <span class="logo-lg-text-dark">Adminox</span> -->
                                </span>
                                <span class="logo-sm">
                                    <!-- <span class="logo-lg-text-dark">A</span> -->
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="24">
                                </span>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
</div>
<!-- end Topbar -->

<div class="topbar-menu">
    @include('includes.sidebar')                    
</div>