<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="{{ url('/') }}">
            <div class="block sm:hidden">
                <img src="{{ asset('assets/images/logo-icon-40.png') }}" class="h-10 inline-block dark:hidden"  alt="">
                <img src="{{ asset('assets/images/logo-icon-40-white.png') }}" class="h-10 hidden dark:inline-block"  alt="">
            </div>
            <div class="sm:block hidden">
                <img src="{{ asset('assets/images/logo-dark.png') }}" class="h-[24px] inline-block dark:hidden" alt="">
                <img src="{{ asset('assets/images/logo-white.png') }}" class="h-[24px] hidden dark:inline-block" alt="">
            </div>
        </a>
        <!-- End Logo container-->

        <!-- Start Mobile Toggle -->
        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        <!-- End Mobile Toggle -->

        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
            <li class="inline-block mb-0">
                <div class="relative top-[3px]">
                    <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                    <input type="text" class="py-2 px-3 text-[14px] border border-gray-100 dark:border-gray-800 dark:text-slate-200 rounded outline-none bg-transparent h-9 !pe-10 rounded-3xl sm:w-44 w-36 bg-white dark:bg-slate-900" name="s" id="searchItem" placeholder="Search...">
                </div>
            </li>            

            <li class="dropdown inline-block relative ps-1">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                    <span class="size-9 inline-flex items-center text-center justify-center text-base font-semibold tracking-wide border align-middle transition duration-500 ease-in-out rounded-full bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white"><img src="{{ asset('assets/images/team/01.jpg') }}" class="rounded-full" alt=""></span>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                    <ul class="py-2 text-start">
                        <li>
                            <a href="{{ url('/candidate-profile') }}" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="user" class="size-4 me-2"></i>Profile</a>
                        </li>
                        <li>
                            <a href="{{ url('/candidate-profile-setting') }}" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="settings" class="size-4 me-2"></i>Settings</a>
                        </li>
                        <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                        <li>
                            <a href="{{ url('/lock-screen') }}" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="lock" class="size-4 me-2"></i>Lockscreen</a>
                        </li>
                        <li>
                            <a href="{{ url('/login') }}" class="flex items-center font-medium py-2 px-4 dark:text-white/70 hover:text-emerald-600 dark:hover:text-white"><i data-feather="log-out" class="size-4 me-2"></i>Logout</a>
                        </li>
                    </ul>
                </div>
            </li><!--end dropdown-->
        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-right !justify-end">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('/') }}" class="sub-menu-item">Hero One</a></li>
                        <li><a href="{{ url('/index-two') }}" class="sub-menu-item">Hero Two</a></li>
                        <li><a href="{{ url('/index-three') }}" class="sub-menu-item">Hero Three</a></li>
                        <li><a href="{{ url('/index-four') }}" class="sub-menu-item">Hero Four</a></li>
                        <li><a href="{{ url('/index-five') }}" class="sub-menu-item">Hero Five</a></li>
                        <li><a href="{{ url('/index-six') }}" class="sub-menu-item">Hero Six </a></li>
                        <li><a href="{{ url('/index-seven') }}" class="sub-menu-item">Hero Seven </a></li>
                        <li><a href="{{ url('/index-eight') }}" class="sub-menu-item">Hero Eight</a></li>
                        <li><a href="{{ url('/index-nine') }}" class="sub-menu-item">Hero Nine</a></li>
                        <li><a href="{{ url('/index-ten') }}" class="sub-menu-item">Hero Ten </a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item"><a href="javascript:void(0)"> Jobs </a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('/job-categories') }}" class="sub-menu-item">Job Categories</a></li>
                
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Job Grids </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/job-grid-one') }}" class="sub-menu-item">Job Grid One</a></li>
                                <li><a href="{{ url('/job-grid-two') }}" class="sub-menu-item">Job Grid Two</a></li>
                                <li><a href="{{ url('/job-grid-three') }}" class="sub-menu-item">Job Grid Three</a></li>
                                <li><a href="{{ url('/job-grid-four') }}" class="sub-menu-item">Job Grid Four </a></li>
                            </ul>  
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Job Lists </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/job-list-one') }}" class="sub-menu-item">Job List One</a></li>
                                <li><a href="{{ url('/job-list-two') }}" class="sub-menu-item">Job List Two</a></li>
                                <li><a href="{{ url('/job-list-three') }}" class="sub-menu-item">Job List Three</a></li>
                                <li><a href="{{ url('/job-list-four') }}" class="sub-menu-item">Job List Four</a></li>
                                <li><a href="{{ url('/job-list-five') }}" class="sub-menu-item">Job List Five </a></li>
                                <li><a href="{{ url('/job-list-six') }}" class="sub-menu-item">Job List Six </a></li>
                            </ul>  
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Job Detail </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/job-detail-one') }}" class="sub-menu-item">Job Detail One</a></li>
                                <li><a href="{{ url('/job-detail-two') }}" class="sub-menu-item">Job Detail Two</a></li>
                                <li><a href="{{ url('/job-detail-three') }}" class="sub-menu-item">Job Detail Three</a></li>
                            </ul>  
                        </li>
        
                        <li><a href="{{ url('/job-apply') }}" class="sub-menu-item">Job Apply</a></li>
        
                        <li><a href="{{ url('/job-post') }}" class="sub-menu-item">Job Post </a></li>
        
                        <li><a href="{{ url('/career') }}" class="sub-menu-item">Career </a></li>
                    </ul>  
                </li>
        
                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ url('/aboutus') }}" class="sub-menu-item">About Us</a></li>
                        <li><a href="{{ url('/services') }}" class="sub-menu-item">Services</a></li>
                        <li><a href="{{ url('/pricing') }}" class="sub-menu-item">Pricing </a></li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Employers</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/employer-list') }}" class="sub-menu-item">Employers</a></li>
                                <li><a href="{{ url('/employer-detail') }}" class="sub-menu-item">Employer Profile</a></li>
                            </ul>
                        </li>
                
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Candidates </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/candidate-list') }}" class="sub-menu-item">Candidates</a></li>
                                <li><a href="{{ url('/candidate-profile') }}" class="sub-menu-item">Candidate Profile</a></li>
                                <li><a href="{{ url('/candidate-profile-setting') }}" class="sub-menu-item">Profile Settings </a></li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)"> Helpcenter </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/helpcenter-overview') }}" class="sub-menu-item">Overview</a></li>
                                <li><a href="{{ url('/helpcenter-faqs') }}" class="sub-menu-item">FAQs</a></li>
                                <li><a href="{{ url('/helpcenter-guides') }}" class="sub-menu-item">Guides</a></li>
                                <li><a href="{{ url('/helpcenter-support') }}" class="sub-menu-item">Support</a></li>
                            </ul>  
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/blogs') }}" class="sub-menu-item"> Blogs</a></li>
                                <li><a href="{{ url('/blog-detail') }}" class="sub-menu-item"> Blog Detail</a></li>
                            </ul> 
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/login') }}" class="sub-menu-item"> Login</a></li>
                                <li><a href="{{ url('/signup') }}" class="sub-menu-item"> Signup</a></li>
                                <li><a href="{{ url('/reset-password') }}" class="sub-menu-item"> Forgot Password</a></li>
                                <li><a href="{{ url('/lock-screen') }}" class="sub-menu-item"> Lock Screen</a></li>
                            </ul> 
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/terms') }}" class="sub-menu-item">Terms of Services</a></li>
                                <li><a href="{{ url('/privacy') }}" class="sub-menu-item">Privacy Policy</a></li>
                            </ul>  
                        </li>

                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="{{ url('/comingsoon') }}" class="sub-menu-item"> Coming Soon</a></li>
                                <li><a href="{{ url('/maintenance') }}" class="sub-menu-item"> Maintenance</a></li>
                                <li><a href="{{ url('/error') }}" class="sub-menu-item"> 404!</a></li>
                                <li><a href="{{ url('/thankyou') }}" class="sub-menu-item"> Thank you</a></li>
                            </ul> 
                        </li>
                    </ul>
                </li>
        
                <li><a href="{{ url('/contact') }}" class="sub-menu-item">Contact</a></li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->