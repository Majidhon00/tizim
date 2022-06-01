<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Ability to watch and download movies online,Filmlarni onlayn tomosha qilish va yuklab olish imkoniyati,">
    <meta name="robots" content="noindex,nofollow">
    <title>Severny Lite Template by WrapPixel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
  <style>
      .ser{
          color: #b2bac5 !important; 
      }
  </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin1" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="relative" data-boxed-layout="full">
        <div class="app-container" data-navbarbg="skin1"></div>
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin1">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="dashboard.html">
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="{{ asset('assets/images/logo-icon.png') }}" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="{{ asset('assets/images/logo-text.png') }}" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="{{ asset('assets/images/logo-light-text.png') }}" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin1">
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav w-100 align-items-center">
                        <li class="nav-item ml-0 ml-md-3 ml-lg-0">
                            <a class="nav-link search-bar" href="javascript:void(0)">
                               @yield('search')
                            </a>
                        </li>
                        <li class="nav-item ml-auto">
                            <div class="upgrade-btn">
                                <a href="https://www.wrappixel.com/templates/severny-admin-template/"
                                    class="btn btn-success text-white" target="_blank">Upgrade to Pro</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <div class="user-profile text-center pt-2">
                <div class="d-flex align-items-center justify-content-center pb-3">
                    <div class="dropdown sub-dropdown">
                        <button class="btn profile-pic rounded-circle position-relative" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="badge rounded-circle badge-success profile-dd text-center"><i
                                    class="fas fa-angle-down"></i></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-circle text-success font-12 mr-2"></i>
                                Active
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-circle text-warning font-12 mr-2"></i>
                                Away
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-circle text-danger font-12 mr-2"></i>
                                Do not Disturb
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-circle text-muted font-12 mr-2"></i>
                                Invisible
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-section">
                    <p class="font-weight-light mb-0 font-18">Sandra Phillip</p>
                    <span class="op-7 font-14">Marketing Head</span>
                    <div class="row border-top border-bottom mt-3 no-gutters">
                        <div class="col-4 border-right">
                            <a class="p-3 d-block menubar-height" href="javascript:void(0)" id="bell"
                                data-display="static" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span><i data-feather="bell" class="svg-icon op-7"></i></span>
                                <span class="badge badge-danger badge-no rounded-circle">5</span>
                            </a>
                        </div>
                        <div class="col-4 border-right">
                            <a class="p-3 d-block menubar-height" id="bottom-sidebar" href="javascript:void(0)"
                                role="button">
                                <span><i data-feather="settings" class="svg-icon op-7"></i></span>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="p-3 d-block menubar-height" href="javascript:void(0)" role="button"
                                data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span><i data-feather="message-square" class="svg-icon op-7"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap"><span class="hide-menu">Pages</span></li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="{{ route('rang.index') }}" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Xozirgi holat</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="{{ route('kirim.index') }}" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Statistika</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="{{ route('cat.index') }}" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">kategorya</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="{{ route('admin.index') }}" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Tur</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link" href="{{ route('color.index') }}" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Rang</span>
                            </a>
                        </li>
                      
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
    
        <div class="page-wrapper">
     
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="dashboard.html" class="text-muted">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select form-control">
                                <option selected>Aug 19</option>
                                <option value="1">July 19</option>
                                <option value="2">Jun 19</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="container-fluid">
             
                {{-- <div class="row align-items-stretch">
                    <div class="col-xl-9 col-lg-8 col-md-12 d-flex align-items-stretch justify-content-strech">
                        <div class="card w-100">
                            <div class="card-body">
                                <h4 class="card-title">Earning Statastics</h4>
                                <div class="pt-5" style="height: 290px;">
                                    <canvas id="bar-chart" width="400"></canvas>
                                </div>
                                <ul class="list-inline text-center mt-4 mb-0">
                                    <li class="list-inline-item text-muted"><i
                                            class="font-10 fas fa-circle mr-2 text-info"></i>Sales
                                    </li>
                                    <li class="list-inline-item text-muted"><i
                                            class="font-10 fas fa-circle mr-2 text-light"></i>Earnings
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-12 d-flex align-items-stretch justify-content-strech">
                        <div class="card w-100">
                            <div class="card-body position-relative">
                                <h4 class="card-title mb-4">Project Status</h4>
                                <div id="carouselExampleFade" class="carousel slide status-carousel"
                                    data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../assets/images/widgets/widget-carousel.jpg"
                                                class="status-img img-fluid mb-1 rounded d-block w-100" alt="img-1" />
                                            <h4 class="card-title mt-4">Nkike Shoes</h4>
                                            <p class="text-muted">Lorem ipsum dolor sit amet, conse adipiscing spacing
                                                goes...</p>
                                            <div class="d-flex align-items-center">
                                                <h6 class="font-weight-normal">Progress</h6>
                                                <div class="ml-auto">
                                                    <h6 class="font-weight-normal">82%</h6>
                                                </div>
                                            </div>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 82%;"
                                                    aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../assets/images/widgets/widget-carousel.jpg"
                                                class="status-img img-fluid mb-1 rounded d-block w-100" alt="img-1" />
                                            <h5 class="card-title mt-4">Nkike Shoes</h5>
                                            <p class="text-muted">Lorem ipsum dolor sit amet, conse adipiscing spacing
                                                goes...</p>
                                            <div class="d-flex align-items-center">
                                                <h6 class="font-weight-normal">Progress</h6>
                                                <div class="ml-auto">
                                                    <h6 class="font-weight-normal">82%</h6>
                                                </div>
                                            </div>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 82%;"
                                                    aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../assets/images/widgets/widget-carousel.jpg"
                                                class="status-img img-fluid mb-1 rounded d-block w-100" alt="img-1" />
                                            <h5 class="card-title mt-4">Nkike Shoes</h5>
                                            <p class="text-muted">Lorem ipsum dolor sit amet, conse adipiscing spacing
                                                goes...</p>
                                            <div class="d-flex align-items-center">
                                                <h6 class="font-weight-normal">Progress</h6>
                                                <div class="ml-auto">
                                                    <h6 class="font-weight-normal">82%</h6>
                                                </div>
                                            </div>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 82%;"
                                                    aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                        data-slide="prev">
                                        <span aria-hidden="true"><i
                                                class="fas fa-chevron-left text-dark font-12"></i></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                        data-slide="next">
                                        <span aria-hidden="true"><i
                                                class="fas fa-chevron-right text-dark font-12"></i></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
              
               @yield('content')
          
            </div>
          
            <footer class="footer text-center text-muted"> © 2020 Severny Admin Lite by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a> </footer>
        </div>
    </div>
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/c3/d3.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/c3/c3.min.js') }}"></script>
    <script src="{{ asset('assets/libs/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/js/pages/dashboards/dashboard1.js') }}"></script>

</body>

</html>