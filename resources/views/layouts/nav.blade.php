<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library system</title>
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">

    <!--==================== Owl-Carousel ====================-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <!--==================== Data table ====================-->
    @yield('datatables-style')

    <!-- ------------ AOS Library --------------------------->
    <link rel="stylesheet" href="css/aos.css">

    <!--==================== Custom style ====================-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="overlay-scrollbar">

    <!--==================== This is nav bar and footer for students start====================-->
    @auth

        @if (Auth::user()->status == 'student')

            <!--==================== header start ====================-->
            <nav>
                <div class="left-nav">
                    <a href="{{ route('banner') }}">
                        <div class="logo">
                            <img src="{{asset('images/logo.png')}}" alt="">
                        </div>
                        <h1 class="title">TTT Library System</h1>
                    </a>
                </div>
                <div class="right-nav">
                    <div class="search">
                        <div class="icon"><i class="fas fa-search"></i></div>
                    </div>

                    <div class="bag">
                        <a class="icon" href="{{ route('bag') }}">
                            <i class="fas fa-shopping-bag"></i>
                        </a>
                    </div>

                    <div class="avatar">
                        <div class="icon">
                            <i class="fas fa-user-circle dropdown-toggle" data-toggle="user-menu"></i>
                        </div>
                        <ul id="user-menu" class="dropdown-menu">

                            <li class="dropdown-menu-item">
                                <a href="{{ route('profile') }}" class="dropdown-menu-link">
                                    <div>
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                    <span>Profile</span>
                                </a>
                            </li>

                            <li class="dropdown-menu-item">
                                <a href="{{ route('logout') }}" class="dropdown-menu-link" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <div>
                                        <i class="fas fa-sign-out-alt"></i>
                                    </div>
                                    <span>Logout</span>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="visibility: hidden">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="toggle-menu">
                    <div class="menu_searchbar">
                        <form action="{{ route('search') }}" method="get">
                            <input type="text" name='search' placeholder="Search by name of book / writer">
                            <button class="btn-submit-search" type="submit">
                                <div class="icon"><i class="fas fa-search"></i></div>
                            </button>
                        </form>
                    </div>
                    <ul class="links">
                        <li><a href="{{ route('bag') }}">Bag</a></li>
                        <li><a href="{{ route('profile') }}">Profile</a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="visibility: hidden">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--==================== header end ====================-->

            <!--============== search bar Start  ==============-->
            <div class="row">
                <div class="searchbar" id="searchbar">
                    <form action="{{ route('search') }}" method="get">
                        <input type="text" name='search' placeholder="Search by name of book / writer">
                        <button class="btn-submit-search" type="submit">
                            <div class="icon"><i class="fas fa-search"></i></div>
                        </button>
                    </form>
                </div>
            </div>
            <!--==================== search bar end ====================-->

            @yield('content')

            <!--==================== footer start ====================-->
            <footer>
                <div>
                    <div class="col-50">
                        <div class="footer-description">
                            <div class="description-header">Description</div>
                            <div class="description-content">
                                At present, we have more than 9 types of books, and each type also has more than ten books.
                                More
                                and different types of books will be introduced in the future. The opening hours of the
                                library
                                are from nine in the morning to nine in the evening. The period for borrowing books is up to
                                one
                                week, and a penalty will be paid if the period is exceeded.
                            </div>
                        </div>
                    </div>
                    <div class="col-50">
                        <div class="footer-contact">
                            <div class="contact-header">Contact Us</div>
                            <div class="contact-content">
                                <ul>
                                    <li>
                                        <a href="">
                                            <i class="fas fa-home"></i>
                                            <span>Address</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fas fa-phone-alt"></i>
                                            <span>016-71234565</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fas fa-envelope"></i>
                                            <span>exampleEmail@gmail.com</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="copyright">
                    <div class="website-name">
                        Copyright @2021:<a>&nbsp;ExampleWebsiteName.com</a>
                    </div>
                    <div class="social-icon">
                        <div class="facebook-icon"><a href=""><i class="fab fa-facebook-f"></i></a></div>
                        <div class="twitter-icon"><a href=""><i class="fab fa-twitter"></i></a></div>
                        <div class="instagram-icon"><a href=""><i class="fab fa-instagram"></i></a></div>
                    </div>
                </div>


            </footer>
            <!--==================== footer end ====================-->

            <!--==================== This is nav bar and footer for students end====================-->
        @endif

        <!--==================== This is nav bar and footer for admin start====================-->
        @if (Auth::user()->status == 'is_admin')
            <!--==================== header start ====================-->
            <nav>
                <div class="left-nav display-flex">
                    <div class="toggle-admin" onclick="collapseSidebar()">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <a href="{{ route('adminDashboard') }}">
                        <div class="logo">
                            <img src="./images/logo.png" alt="">
                        </div>
                        <h1 class="title">TTT Library System</h1>
                    </a>
                </div>
            </nav>
            <!--==================== header end ====================-->

            <!--start sidebar-->
            <div class="sidebar">
                <ul class="sidebar-nav">

                    <li class="sidebar-nav-item">
                        <a href="{{ route('adminDashboard') }}" class="sidebar-nav-link {{Route::currentRouteNamed('adminDashboard') ? 'active' : ' ' }}">
                            <div>
                                <i class="fas fa-chart-pie"></i>
                            </div>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-nav-item">
                        <a href="{{ route('adminBook') }}" class="sidebar-nav-link {{Route::currentRouteNamed('adminBook') ? 'active' : ' ' }}">
                            <div>
                                <i class="fas fa-book"></i>
                            </div>
                            <span>Book</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="{{ route('adminCategory') }}" class="sidebar-nav-link {{Route::currentRouteNamed('adminCategory') ? 'active' : ' ' }}">
                            <div>
                                <i class="fas fa-th"></i>
                            </div>
                            <span>Book Category</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item">
                        <a href="{{ route('adminAuthor') }}" class="sidebar-nav-link {{Route::currentRouteNamed('adminAuthor') ? 'active' : ' ' }}">
                            <div>
                                <i class="fas fa-user-edit"></i>
                            </div>
                            <span>Author</span>
                        </a>
                    </li>

                    <li class="sidebar-nav-item">
                        <a href="{{ route('adminBanner') }}" class="sidebar-nav-link {{Route::currentRouteNamed('adminBanner') ? 'active' : ' ' }}">
                            <div>
                                <i class="fas fa-sliders-h"></i>
                            </div>
                            <span>Banner</span>
                        </a>
                    </li>
                    <li class="sidebar-nav-item" style="margin-top:200px;">
                        <a class="sidebar-nav-link logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <div>
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                            <span>Logout</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="visibility: hidden">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </div>
            <!--end sidebar-->



            <!--start wrapper-->
            <div class="wrapper">
                @yield('content')

                <!--==================== footer start ====================-->
                <footer class="p-10">
                    <div class="copyright m-0" >
                        <div class="website-name m-0">
                            Copyright @2021:<a>&nbsp;ExampleWebsiteName.com</a>
                        </div>
                        <div class="social-icon m-0">
                            <div class="facebook-icon"><a href=""><i class="fab fa-facebook-f"></i></a></div>
                            <div class="twitter-icon"><a href=""><i class="fab fa-twitter"></i></a></div>
                            <div class="instagram-icon"><a href=""><i class="fab fa-instagram"></i></a></div>
                        </div>
                    </div>
                </footer>
                <!--==================== footer end ====================-->
                <!--end wrapper-->
            </div>
        @endif
    @else

        @yield('content')

    @endauth

    <!--==================== This is nav bar and footer for admin end====================-->


    <script>
        let menutoggle = document.querySelector('.toggle');
        let search = document.querySelector('.search');
        let searchBar = document.querySelector('#searchbar');
        let menu_searchbar = document.querySelector('.menu_searchbar');
        let nav = document.querySelector('nav');
        

        menutoggle.onclick = function() {
            menutoggle.classList.toggle('active');
            nav.classList.toggle('active');
            menu_searchbar.classList.toggle('active');
        };


        search.onclick = function() {
            searchBar.classList.toggle('active');
        };


    </script>
    @if (Session::has('success'))
    <script>
        alert(' {{ Session::get('success') }}');
    </script>
       {{Session()->forget('success')}} 
    @endif

    @if (Session::has('error'))
    <script>
        alert(' {{ Session::get('error') }}');
    </script>
       {{Session()->forget('error')}} 
    
    @endif

    <!--==========JQuery Library file==========-->
    <script src="{{ asset('js/Jquery3.4.1.min.js') }}"></script>

    <!--==========Owl Carousel.js==========-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!--========== Data table ==========-->
    @yield('datatables-javascript')

    <!--==========AOS.js Library==========-->
    <script src="js/aos.js"></script>

    <!--==========custom script==========-->
    <script src="{{ asset('js/javascript.js') }}"></script>

</body>

</html>
