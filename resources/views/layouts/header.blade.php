<?php

if (!isset($header_style)) {
    $header_style = 1;
}

?>

@if ($header_style == 1)
    <header class="header navbar navbar-expand-lg bg-light navbar-sticky">
    @elseif($header_style == 2)
        <header class="header navbar navbar-expand-lg position-absolute navbar-sticky">
        @else
            <header class="header navbar navbar-expand-lg bg-light border-bottom border-light shadow-sm fixed-top">
@endif




<div class="container px-3">
    <a href="{{ url('/') }}" class="navbar-brand pe-3">
        <img src="assets/img/logo.svg" width="47" alt="Silicon"> Silicon
    </a>
    <div id="navbarNav" class="offcanvas offcanvas-end">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">Our Courses</a>
                </li>

{{-- 
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Courses</a>
                    <div class="dropdown-menu">
                        <div class="d-lg-flex pt-lg-3">
                            <div class="mega-dropdown-column">
                                <h6 class="px-3 mb-2">Technology</h6>
                                <ul class="list-unstyled mb-3">
                                    <li><a href="javascript:;" class="dropdown-item py-1">Course 1</a>
                                    </li>
                                    <li><a href="about-v2.html" class="dropdown-item py-1">Course 2</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-dropdown-column">
                                <h6 class="px-3 mb-2">Human resource</h6>
                                <ul class="list-unstyled mb-3">
                                    <li><a href="javascript:;" class="dropdown-item py-1">Grid
                                            View</a></li>
                                    <li><a href="javascript:;" class="dropdown-item py-1">List
                                            View</a></li>
                                    <li><a href="javascript:;" class="dropdown-item py-1">Slider
                                            View</a></li>
                                </ul>
                            </div>
                            <div class="mega-dropdown-column">

                                <h6 class="px-3 mb-2">Finance & Accounting</h6>
                                <ul class="list-unstyled mb-3">
                                    <li><a href="javascript:;" class="dropdown-item py-1">List
                                            Course 1</a></li>
                                    <li><a href="javascript:;" class="dropdown-item py-1">
                                            Coruse 2</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </li>
 --}}

        {{--         <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"
                        aria-current="page">Admission</a>
                    <div class="dropdown-menu p-0">
                        <div class="d-lg-flex" style="height: 20rem">
                            <div class="mega-dropdown-column bg-position-center bg-repeat-0 bg-size-cover rounded-3 rounded-end-0"
                                style="background-image: url(assets/img/landings.jpg); margin: -1px;"></div>
                            <div class="mega-dropdown-column pt-lg-3 pb-lg-4">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="javascript:;" class="dropdown-item">Fees Payment </a>
                                    </li>
                                    <li><a href="javascript:;" class="dropdown-item">Payment</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
 --}}

{{-- 
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Account</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:;" class="dropdown-item">Account Details</a></li>
                        <li><a href="javascript:;" class="dropdown-item">Security</a></li>
                        <li><a href="javascript:;" class="dropdown-item">Notifications</a>
                        </li>
                        <li><a href="javascript:;" class="dropdown-item">Messages</a></li>
                        <li><a href="javascript:;" class="dropdown-item">Saved Items</a></li>
                        <li><a href="javascript:;" class="dropdown-item">My Collections</a>
                        </li>
                        <li><a href="javascript:;" class="dropdown-item">Payment Details</a></li>
                        <li><a href="javascript:;" class="dropdown-item">Sign In</a></li>
                        <li><a href="javascript:;" class="dropdown-item">Sign Up</a></li>
                    </ul>
                </li> --}}

                <li class="nav-item">
                    <a href="javascript:;" class="nav-link">About Us</a>
                </li> 
            </ul>
        </div>
        <div class="offcanvas-header border-top">

            @guest
                <a href="{{ url('register') }}" class="btn btn-primary w-100" rel="noopener">
                    <i class="bx bx-user fs-4 lh-1 me-1"></i> &nbsp;ENROLL NOW
                </a>
            @endguest
            @auth
                <a href="{{ url('dashboard') }}" class="btn btn-primary w-100" rel="noopener">
                    <i class="bx bx-cart fs-4 lh-1 me-1"></i> &nbsp;MY DASHBOARD
                </a>
            @endauth

        </div>
    </div>
  {{--   <div class="form-check form-switch mode-switch pe-lg-1 ms-auto me-4" data-bs-toggle="mode">
        <input type="checkbox" class="form-check-input" id="theme-mode">
        <label class="form-check-label d-none d-sm-block" for="theme-mode">Light</label>
        <label class="form-check-label d-none d-sm-block" for="theme-mode">Dark</label>
    </div> --}}
    <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    @guest
        <a href="{{ url('register') }}" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex"
            rel="noopener">
            <i class="bx bx-user fs-5 lh-1 me-1"></i> &nbsp;REGISTER
        </a>
    @endguest

    @auth
        <a href="{{ url('dashboard') }}" class="btn btn-primary btn-sm fs-sm rounded d-none d-lg-inline-flex"
            rel="noopener">
            <i class="bx bx-cart fs-5 lh-1 me-1"></i> &nbsp;MY DASHBOARD
        </a>

    @endauth

</div>
</header>
