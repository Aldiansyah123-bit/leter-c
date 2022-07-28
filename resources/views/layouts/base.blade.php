<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('template') }}/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('template') }}/assets/images/favicon.png" type="image/x-icon">
    <title>Aplikasi Letter C</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{ asset('template') }}/css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('template') }}/css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('template') }}/css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/prism.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/datatables.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/dropzone.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/style.css">
    <link id="color" rel="stylesheet" href="{{ asset('template') }}/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/responsive.css">
    @toastr_css
</head>
<body>
    @jquery
    @toastr_js
    @toastr_render
    <div class="loader-wrapper">
        <div class="theme-loader">
          <div class="loader-p"></div>
        </div>
      </div>
      <!-- Loader ends-->
      <!-- page-wrapper Start       -->
      <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <div class="page-main-header bg-warning text-bold">
          <div class="main-header-right row m-0">
            <div class="main-header-left">
              <div class="sidebar-main-title"><a href="" class="sidebar-main-title"><h5>LETTER C DESA</h5></a></div>
              <div class="dark-logo-wrapper"><a href="">LETTER C DESA</a></div>
              <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle"></i></div>
            </div>
            <div class="nav-right col pull-right right-menu p-0">
              <ul class="nav-menus">
                <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                <li class="onhover-dropdown p-0">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-primary-light" type="button">
                            <a :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"><i data-feather="log-out"></i>Log out
                            </a>
                        </button>
                    </form>
                </li>
              </ul>
            </div>
            <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
          </div>
        </div>
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
          <!-- Page Sidebar Start-->
          <header class="main-nav">
            <div class="sidebar-user text-center"><a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a><img class="img-90 rounded-circle" src="{{ asset('template') }}/assets/images/dashboard/1.png" alt="">
              <div class="badge-bottom"><span class="badge badge-primary">New</span></div><a href="{{ route('dashboard') }}">
                <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6></a>
              <p class="mb-0 font-roboto">Selamat Datang di Aplikasi Letter C Desa</p>

            </div>
            <nav>
              <div class="main-navbar">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="mainnav">
                  <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                      <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                      <div>
                        <h6>Dashboard</h6>
                      </div>
                    </li>
                    <li class="{{ request()->is('dashboard')? 'active': '' }}">
                        <a class="nav-link menu-title link-nav" href="{{ route('dashboard') }}">
                            <i data-feather="home"></i><span>Dashboard</span>
                        </a>
                    </li>
                    @if (auth()->user()->role !=2)
                        <li class="sidebar-main-title">
                            <div>
                            <h6>Masukkan Data</h6>
                            </div>
                        </li>
                        <li class="">
                            <a class="nav-link menu-title link-nav" href="{{ route('data.index') }}">
                                <i data-feather="package"></i><span>Data Pemilik Letter C</span>
                            </a>
                        </li>
                        <li class="">
                            <a class="nav-link menu-title link-nav" href="{{ route('asset.index') }}">
                                <i data-feather="layers"></i><span>Detail Asset Letter C</span>
                            </a>
                        </li>
                    @endif
                  </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
              </div>
            </nav>
          </header>

@yield('content')

<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 footer-copyright">
          <p class="mb-0"></p>
        </div>
        <div class="col-md-6">
          <p class="pull-right mb-0"> <i class="fa fa-heart font-secondary"></i></p>
        </div>
      </div>
    </div>
  </footer>
</div>
</div>

@yield('js')
<!-- latest jquery-->
<script src="{{ asset('template') }}/assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="{{ asset('template') }}/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="{{ asset('template') }}/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('template') }}/assets/js/sidebar-menu.js"></script>
<script src="{{ asset('template') }}/assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="{{ asset('template') }}/assets/js/bootstrap/popper.min.js"></script>
<script src="{{ asset('template') }}/assets/js/bootstrap/bootstrap.min.js"></script>
<!-- Plugins JS start-->
<script src="{{ asset('template') }}/assets/js/dropzone/dropzone.js"></script>
<script src="{{ asset('template') }}/assets/js/dropzone/dropzone-script.js"></script>
<!-- Plugins JS Ends-->
<!-- Plugins JS start-->
<script src="{{ asset('template') }}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('template') }}/assets/js/datatable/datatables/datatable.custom.js"></script>
<!-- Theme js-->
<script src="{{ asset('template') }}/assets/js/script.js"></script>
<!-- login js-->
<!-- Plugin used-->
</body>
</html>
