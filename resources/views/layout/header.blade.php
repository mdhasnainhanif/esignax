<header class="header">
    <div class="main-header">
        <div class="container-fluid">
            <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <figure class="mb-0 banner-logo"><img width="160px" src="{{ asset('assets/images/logo-white.png') }}"
                            alt="" class="img-fluid header_logo" /></figure>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('index') }}">Home</a>
                        </li>
                        <li class="nw_submenu {{ request()->routeIs('pricing') ? 'active' : '' }}">
                            <a class="drop_a" href="{{ route('pricing') }}" role="button" aria-haspopup="true"
                                aria-expanded="false">Pricing</a>
                        </li>
                        <li class="nw_submenu">
                            <a class="dropdown-toggle drop_a" href="" role="button"
                                aria-haspopup="true" aria-expanded="false">Solutions</a>
                            <ul class="wide-sub-menu">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="d-flex align-items-center h-100">
                                            <img class="w-75" src="{{ asset('assets/images/logo-white.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="wide-sub-menu-inner">
                                            <h4 class="wide-sub-menu-inner-main-heading">Solutions</h4>
                                            <div class="wide-sub-menu-inner-items">
                                                <a class="wide-sub-menu-inner-item-box"
                                                    href="https://esignax.com/for-individuals">
                                                    <h4 class="wide-sub-menu-inner-item-box-heading">For Individuals
                                                    </h4>
                                                </a>
                                                <a class="wide-sub-menu-inner-item-box"
                                                    href="https://esignax.com/for-businesses">
                                                    <h4 class="wide-sub-menu-inner-item-box-heading">For Businesses</h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="wide-sub-menu-inner">
                                            <h4 class="wide-sub-menu-inner-main-heading">Explore</h4>
                                            <div class="wide-sub-menu-inner-items">
                                                <a href="https://esignax.com/trust-and-security"
                                                    class="wide-sub-menu-inner-item-box">
                                                    <h4 class="wide-sub-menu-inner-item-box-heading">Trust &amp;
                                                        Security</h4>
                                                    <p class="wide-sub-menu-inner-item-box-para">A relationship you can
                                                        trust</p>
                                                </a>
                                                <a href="https://esignax.com/customer-experience"
                                                    class="wide-sub-menu-inner-item-box">
                                                    <h4 class="wide-sub-menu-inner-item-box-heading">Customer Experience
                                                    </h4>
                                                    <p class="wide-sub-menu-inner-item-box-para">An experience people
                                                        love</p>
                                                </a>
                                                <a href="https://esignax.com/business-agility"
                                                    class="wide-sub-menu-inner-item-box">
                                                    <h4 class="wide-sub-menu-inner-item-box-heading">Business Agility
                                                    </h4>
                                                    <p class="wide-sub-menu-inner-item-box-para">A better way to work
                                                    </p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="wide-sub-menu-inner">
                                            <h4 class="wide-sub-menu-inner-main-heading">Use Cases</h4>
                                            <div class="wide-sub-menu-inner-items">
                                                <a href="https://esignax.com/solutions/departments/human-resources"
                                                    class="wide-sub-menu-inner-item-box">
                                                    <h4 class="wide-sub-menu-inner-item-box-heading">Human Resources
                                                    </h4>
                                                    <p class="wide-sub-menu-inner-item-box-para">Seamlessly manage the
                                                        employee lifecycle</p>
                                                </a>
                                                <a href="https://esignax.com/solutions/departments/legal"
                                                    class="wide-sub-menu-inner-item-box">
                                                    <h4 class="wide-sub-menu-inner-item-box-heading">Legal</h4>
                                                    <p class="wide-sub-menu-inner-item-box-para">Reduce risk and drive
                                                        faster turnaround times</p>
                                                </a>
                                                <a href="https://esignax.com/solutions/departments/procurement"
                                                    class="wide-sub-menu-inner-item-box">
                                                    <h4 class="wide-sub-menu-inner-item-box-heading">Procurement</h4>
                                                    <p class="wide-sub-menu-inner-item-box-para">Transform the
                                                        procure-to-pay process</p>
                                                </a>
                                                <a href="https://esignax.com/solutions/departments/sales"
                                                    class="wide-sub-menu-inner-item-box">
                                                    <h4 class="wide-sub-menu-inner-item-box-heading">Sales</h4>
                                                    <p class="wide-sub-menu-inner-item-box-para">Close deals faster,
                                                        increase productivity and delight your buyers</p>
                                                </a>
                                                <a href="https://esignax.com/solutions"
                                                    class="wide-sub-menu-inner-item-box">
                                                    <h4 class="wide-sub-menu-inner-item-box-heading">All Use Cases <i
                                                            class="fa fa-arrow-right" aria-hidden="true"></i></h4>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </ul>
                        </li>
                        <li class="fleet_li {{ request()->routeIs('e-signature') ? 'active' : '' }}">
                            <a class="dropdown-toggle drop_a" href="javscript:void(0);" role="button"
                                aria-haspopup="true" aria-expanded="false">Our Services</a>
                            <ul class="submenu-wrapper">
                                <li class="p-2">
                                    <a class="text-decoration-none font-weight-bold e_signature_nav"
                                        href="{{ route('e-signature') }}">E - Signature</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-space nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                            <a class="nav-link nav_anchor" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex ml-auto">
                        <a class="get_started button1 text-white text-decoration-none "
                            href="{{route('login')}}">Login</a>
                        <a class="get_started button1 text-white text-decoration-none ml-2" href="{{route('signup1')}}">Sign
                            Up</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
