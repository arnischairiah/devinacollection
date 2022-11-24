<!DOCTYPE html>



























<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>ADMIN</title>
    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/avatars/logoDC.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="../../assets/css/datatables.bootstrap5.css" />

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    {{-- <script src="../../assets/vendor/js/template-customizer.js"></script> --}}
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag()
        {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>

</head>

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">







            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


                <div class="app-brand demo ">
                    <a href="/siswapage-dashboard" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img style="width: 32%;" src="./assets/img/avatars/logoDC.png">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder">Devina</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>


                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item">
                        <a href="/adminpage-dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboards">Dashboard</div>
                        </a>
                    </li>

                    <!-- Apps & Pages -->

                    {{-- <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Apps &amp; Pages</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Siswa">Siswa</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/adminpage-listsiswa" class="menu-link">
                                    <div data-i18n="List Siswa">List Siswa</div>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icon bx bx-wallet"></i>
                            <div data-i18n="Kasir">Kasir</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/adminpage-listtransaksi" class="menu-link">
                                    <div data-i18n="List Transaksi">List Transaksi</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/adminpage-addtransaksi" class="menu-link">
                                    <div data-i18n="Add Transaksi">Add Transaksi</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icon bx bx-layout"></i>
                            <div data-i18n="Berita">Berita</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/adminpage-inputberita" class="menu-link">
                                    <div data-i18n="Input Berita">Input Berita</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/adminpage-listberita" class="menu-link">
                                    <div data-i18n="List Berita">List Berita</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Misc -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">OTHER</span></li>
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-info-circle"></i>
                            <div data-i18n="About Us">About Us</div>
                        </a>

                    </li>
                </ul>



            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->


                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <ul class="navbar-nav flex-row align-items-center ms-auto">

                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bx bx-bell bx-sm"></i>
                                    <span class="d-none">@forelse($notifications as $notification) {{$no++}} @empty @endforelse</span>
                                    <span class="badge bg-danger rounded-pill badge-notifications">{{$no}}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-0">
                                    <li class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Notification</h5>
                                            <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list scrollable-container">
                                        <ul class="list-group list-group-flush">
                                            @forelse($notifications as $notification)
                                            <li class="list-group-item list-group-item-action dropdown-notifications-item" onclick="location.href='/adminpage-listtransaksi'">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        @if ($notification->data['via'] == 'OVO')
                                                            <div>
                                                                <img src="./assets/img/icons/misc/ovo.png" alt="Avatar" class="avatar avatar-xs pull-up mx-auto">
                                                            </div>
                                                        @elseif($notification->data['via'] == 'DANA')
                                                            <div>
                                                                <img src="./assets/img/icons/misc/dana.png" alt="Avatar" class="avatar avatar-xs pull-up mx-auto" style="width: 2.4rem">
                                                            </div>
                                                        @elseif($notification->data['via'] == 'GO-PAY')
                                                            <div>
                                                                <img src="./assets/img/icons/misc/gopay.png" alt="Avatar" class="avatar avatar-xs pull-up mx-auto">
                                                            </div>
                                                        @elseif($notification->data['via'] == 'MANDIRI MOBILE')
                                                            <div>
                                                                <img src="./assets/img/icons/misc/mandiri.jpg" alt="Avatar" class="avatar avatar-xs pull-up mx-auto">
                                                            </div>
                                                        @elseif($notification->data['via'] == 'BCA MOBILE')
                                                            <div>
                                                                <img src="./assets/img/icons/misc/bca.png" alt="Avatar" class="avatar avatar-xs pull-up mx-auto">
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">{{ $notification->data['username'] }} has saved Rp. {{ $notification->data['amount'] }}</h6>
                                                        <p class="mb-0">Please directly verificate their savings details.</p>
                                                        <small class="text-muted">{{$notification->created_at->diffForHumans()}}</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            @empty
                                            @endforelse
                                        </ul>
                                    </li>
                                    <li class="dropdown-menu-footer border-top">
                                        <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                                            View all notifications
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="../../assets/img/avatars/21.png" alt class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../../assets/img/avatars/21.png" alt class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">SUPER ADMIN</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="dropdown-item" type="submit">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </button>
                                    </form>
                            </li>
                        </ul>
                        </li>
                        <!--/ User -->


                        </ul>
                    </div>


                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>


                </nav>


                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">

                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <div class="card">
                            <div class="card-datatable table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                                    <div class="card-header flex-column flex-md-row">
                                        <div class="head-label text-center">
                                            <h5 class="card-title mb-0">List Transaksi</h5>
                                        </div>
                                        <div class="dt-action-buttons text-end pt-3 pt-md-0">
                                            <div class="dt-buttons">
                                                <button class="btn btn-warning" target="_blank" class="dt-button buttons-collection btn btn-label-warning dropdown-toggle me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true" aria-expanded="false" onclick="location.href='/adminpage-listtransaksi/history_pdf'"><span><i class="bx bx-export me-sm-2"></i> <span class="d-none d-sm-inline-block">Export</span></span></button>
                                                <button class="dt-button create-new btn btn-warning" tabindex="0" aria-controls="DataTables_Table_0" type="button"><span><i class="bx bx-plus me-sm-2"></i> <span class="d-none d-sm-inline-block" onclick="location.href='/adminpage-addtransaksi'">Tambah Tranksaksi</span></span></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                        </div>
                                        {{-- <div class="col-lg-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                <label>Search:<form action="pages/adminpage-listtransaksi"><input name="search" type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0" value="{{request('search')}}" ></form></label>
                                            </div>
                                            {{-- <div class="col-lg-12">
                                                <div class="row search-bar">
                                                  <form class="search-form d-flex justify-content-center"  action="/adminpage-listtransaksi">
                                                    <input type="text" name="search" placeholder="Search...." title="Enter search keyword" value="{{request('search')}}" >
                                                    <button type="submit" title="Search" class="mx-2"><i class="bi bi-search"></i></button>
                                                  </form>
                                                </div>
                                            </div> --}}
                                        </div>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NISN</th>
                                                <th>NAMA SISWA</th>
                                                <th>NOMINAL</th>
                                                <th>TRANSFER DARI</th>
                                                <th>STATUS</th>
                                                <th>ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-border-bottom-0">
                                            @foreach($histories as $his)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                @foreach ($users as $u)
                                                    @if ($his->user_id == $u->id)
                                                    <td> {{ $u->NISN }}</td>
                                                    @endif
                                                @endforeach
                                                @foreach ($users as $u)
                                                    @if ($his->user_id == $u->id)
                                                    <td> {{ $u->username }}</td>
                                                    @endif
                                                @endforeach
                                                    <td> {{$his->amount}} </td>
                                                    <td> {{$his->via}} </td>
                                                @if ($his->status=='confirmed')
                                                    <td> <span class="badge bg-label-success me-1"> {{$his->status}} </span> </td>
                                                @elseif($his->status=='pending')
                                                    <td> <span class="badge bg-label-warning me-1"> {{$his->status}} </span> </td>
                                                @elseif($his->status=='rejected')
                                                    <td> <span class="badge bg-label-danger me-1"> {{$his->status}} </span> </td>
                                                @endif

                                                @if($his->status=='confirmed')
                                                <td> -- </td>
                                                @elseif($his->status=='rejected')
                                                <td> -- </td>
                                                @else                                              
                                                <td>                                            
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                        <div class="dropdown-menu" style="">
                                                            <a class="dropdown-item" href="/confirmtransaksi/{{$his->id}}"> Confirm </a>
                                                            <a class="dropdown-item" href="/rejecttransaksi/{{$his->id}}"> Reject </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                @endif
                                                @endforeach
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                {{$histories->links()}}
                            </div>
                        </div>
                    </div>
                    
                </div>
            
                     <!-- / Content -->




                                                    <!-- Footer -->
                                                    <footer class="content-footer footer bg-footer-theme">
                                                        <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                                                            <div class="mb-2 mb-md-0">
                                                                ©
                                                                <script>
                                                                    document.write(new Date().getFullYear())
                                                                </script>
                                                                , made with ❤️ by <a href="#" target="_blank" class="footer-link fw-bolder">Group 4</a>
                                                            </div>
                                                        </div>
                                                    </footer>
                                                    <!-- / Footer -->


                                                    <div class="content-backdrop fade"></div>
                                </div>
                                <!-- Content wrapper -->
                            </div>
                            <!-- / Layout page -->
                        </div>



                        <!-- Overlay -->
                        <div class="layout-overlay layout-menu-toggle"></div>


                        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                        <div class="drag-target"></div>

                    </div>
                    <!-- / Layout wrapper -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../../assets/vendor/libs/popper/popper.js"></script>
  <script src="../../assets/vendor/js/bootstrap.js"></script>
  <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  
  <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
  <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
  <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
  
  <script src="../../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../../assets/vendor/libs/datatables/jquery.dataTables.js"></script>
<script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="../../assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
<script src="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
<script src="../../assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js"></script>
<script src="../../assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
<script src="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
<script src="../../assets/vendor/libs/jszip/jszip.js"></script>
<script src="../../assets/vendor/libs/pdfmake/pdfmake.js"></script>
<script src="../../assets/vendor/libs/datatables-buttons/buttons.html5.js"></script>
<script src="../../assets/vendor/libs/datatables-buttons/buttons.print.js"></script>
<!-- Flat Picker -->
<script src="../../assets/vendor/libs/moment/moment.js"></script>
<script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
<!-- Row Group JS -->
<script src="../../assets/vendor/libs/datatables-rowgroup/datatables.rowgroup.js"></script>
<script src="../../assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js"></script>
<!-- Form Validation -->
<script src="../../assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="../../assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

  <!-- Main JS -->
  <script src="../../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../../assets/js/tables-datatables-basic.js"></script>
  
</body>

</html>