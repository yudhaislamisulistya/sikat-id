

<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Panel - Sikat.web.id</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Panel - Sikat (Sistem keamanan Terpadu Perumahan Dosen Unhas Tamalanrea)">

        <!-- favicon -->
        <link rel="shortcut icon" href="favicon.ico">
        <!-- Css -->
        <link href="<?= base_url() ?>/assets-new/css/simplebar.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="<?= base_url() ?>/assets-new/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="<?= base_url() ?>/assets-new/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url() ?>/assets-new/css/line.css" type="text/css" rel="stylesheet">
        <!-- Style Css-->
        <link href="<?= base_url() ?>/assets-new/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css">

    </head>

    <body>
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
        <!-- Loader -->

        <div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            <nav id="sidebar" class="sidebar-wrapper">
                <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                    <div class="sidebar-brand">
                        <a href="index.html">
                            <img src="<?= base_url() ?>/assets/images/logo-sikat.png" height="24" class="logo-light-mode" alt>
                            <span>Sikat.id</span>
                        </a>
                    </div>
        
                    <ul class="sidebar-menu">
                        <li><a href="index.html"><i class="ti ti-home me-2"></i>Dashboard</a></li>
                        <li class="sidebar-dropdown">
                            <a href="javascript:void(0)"><i class="ti ti-browser me-2"></i>Layouts</a>
                            <div class="sidebar-submenu">
                                <ul>
                                    <li><a href="index-dark.html">Dark Dashboard</a></li>
                                    <li><a href="index-rtl.html">RTL Dashboard</a></li>
                                    <li><a href="index-rtl-dark.html">Dark RTL Dashboard</a></li>
                                    <li><a href="index-sidebar-light.html">Light Sidebar</a></li>
                                    <li><a href="index-sidebar-colored.html">Colored Sidebar</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <!-- sidebar-menu  -->
                </div>
            </nav>
            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-light">
                <!-- Top Header -->
                <div class="top-header">
                    <div class="header-bar d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <a href="#" class="logo-icon me-3">
                                <img src="<?= base_url() ?>/assets-new/images/logo-icon.png" height="30" class="small" alt>
                            </a>
                            <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                            <div class="search-bar p-0 d-none d-md-block ms-2">
                                <div id="search" class="menu-search mb-0">
                                    <form role="search" method="get" id="searchform" class="searchform">
                                        <div>
                                            <input type="text" class="form-control border rounded" name="s" id="s" placeholder="Search Keywords...">
                                            <input type="submit" id="searchsubmit" value="Search">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="list-unstyled mb-0">
                            <li class="list-inline-item mb-0">
                                <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <div class="btn btn-icon btn-soft-light"><i class="ti ti-settings"></i></div>
                                </a>
                            </li>

                            <li class="list-inline-item mb-0 ms-1">
                                <div class="dropdown dropdown-primary">
                                    <button type="button" class="btn btn-icon btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-bell"></i></button>
                                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                    
                                    <div class="dropdown-menu dd-menu shadow rounded border-0 mt-3 p-0" data-simplebar style="height: 320px; width: 290px;">
                                        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                            <h6 class="mb-0 text-dark">Notifications</h6>
                                            <span class="badge bg-soft-danger rounded-pill">3</span>
                                        </div>
                                        <div class="p-3">
                                            <a href="#!" class="dropdown-item features feature-primary key-feature p-0">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon text-center rounded-circle me-2">
                                                        <i class="ti ti-shopping-cart"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title">Order Complete</h6>
                                                        <small class="text-muted">15 min ago</small>
                                                    </div>
                                                </div>
                                            </a>
                            
                                            <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?= base_url() ?>/assets-new/images/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow me-2" alt>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title"><span class="fw-bold">Message</span> from Luis</h6>
                                                        <small class="text-muted">1 hour ago</small>
                                                    </div>
                                                </div>
                                            </a>
                            
                                            <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon text-center rounded-circle me-2">
                                                        <i class="ti ti-currency-dollar"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title"><span class="fw-bold">One Refund Request</span></h6>
                                                        <small class="text-muted">2 hour ago</small>
                                                    </div>
                                                </div>
                                            </a>

                                            <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon text-center rounded-circle me-2">
                                                        <i class="ti ti-truck-delivery"></i>
                                                    </div>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title">Deliverd your Order</h6>
                                                        <small class="text-muted">Yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                            
                                            <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                                <div class="d-flex align-items-center">
                                                    <img src="<?= base_url() ?>/assets-new/images/15.jpg" class="avatar avatar-md-sm rounded-circle border shadow me-2" alt>
                                                    <div class="flex-1">
                                                        <h6 class="mb-0 text-dark title"><span class="fw-bold">Cally</span> started following you</h6>
                                                        <small class="text-muted">2 days ago</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-inline-item mb-0 ms-1">
                                <div class="dropdown dropdown-primary">
                                    <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url() ?>/assets-new/images/05.jpg" class="avatar avatar-ex-small rounded" alt></button>
                                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                        <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                                            <img src="<?= base_url() ?>/assets-new/images/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt>
                                            <div class="flex-1 ms-2">
                                                <span class="d-block">Cristina Julia</span>
                                                <small class="text-muted">UI / UX Designer</small>
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-dark" href="index.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Dashboard</a>
                                        <a class="dropdown-item text-dark" href="profile.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                                        <a class="dropdown-item text-dark" href="email.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-mail"></i></span> Email</a>
                                        <div class="dropdown-divider border-top"></div>
                                        <a class="dropdown-item text-dark" href="lock-screen.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-lock"></i></span> Lockscreen</a>
                                        <a class="dropdown-item text-dark" href="login.html"><span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Top Header -->

                <div class="container-fluid">
                    <div class="layout-specing">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="text-muted mb-1">Welcome back, Cristina!</h6>
                                <h5 class="mb-0">Dashboard</h5>
                            </div>

                            <div class="mb-0 position-relative">
                                <select class="form-select form-control" id="dailychart">
                                    <option selected>This Month</option>
                                    <option value="aug">August</option>
                                    <option value="jul">July</option>
                                    <option value="jun">June</option>
                                </select>
                            </div>
                        </div>
                    
                        <div class="row row-cols-xl-5 row-cols-md-2 row-cols-1">
                            <div class="col mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-user-circle fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Visitor</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="4589">2100</span></p>
                                        </div>
                                    </div>

                                    <span class="text-danger"><i class="uil uil-chart-down"></i> 0.5%</span>
                                </a>
                            </div><!--end col-->
                            
                            <div class="col mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-usd-circle fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Revenue</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0">$<span class="counter-value" data-target="48575">35214</span></p>
                                        </div>
                                    </div>

                                    <span class="text-success"><i class="uil uil-arrow-growth"></i> 3.84%</span>
                                </a>
                            </div><!--end col-->
                            
                            <div class="col mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-shopping-bag fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Orders</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="4800">3402</span></p>
                                        </div>
                                    </div>

                                    <span class="text-success"><i class="uil uil-arrow-growth"></i> 1.46%</span>
                                </a>
                            </div><!--end col-->
                            
                            <div class="col mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-store fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Items</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="145">23</span></p>
                                        </div>
                                    </div>

                                    <span class="text-muted"><i class="uil uil-analysis"></i> 0.0%</span>
                                </a>
                            </div><!--end col-->
                            
                            <div class="col mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-users-alt fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Users</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="9">1.5</span>M</p>
                                        </div>
                                    </div>

                                    <span class="text-danger"><i class="uil uil-chart-down"></i> 0.5%</span>
                                </a>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-8 col-lg-7 mt-4">
                                <div class="card shadow border-0 p-4 pb-0 rounded">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="mb-0 fw-bold">Sales Analytics</h6>
                                        
                                        <div class="mb-0 position-relative">
                                            <select class="form-select form-control" id="yearchart">
                                                <option selected>2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="dashboard" class="apex-chart"></div>
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-4 col-lg-5 mt-4 rounded">
                                <div class="card shadow border-0">
                                    <div class="p-4 border-bottom">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="mb-0 fw-bold">Upcoming Activity</h6>
                                            
                                            <a href="#!" class="text-primary">See More <i class="uil uil-arrow-right align-middle"></i></a>
                                        </div>
                                    </div>

                                    <div class="p-4" data-simplebar style="height: 365px;">
                                        <a href="javascript:void(0)" class="features feature-primary key-feature d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-3">
                                                    <i class="ti ti-users"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark">Meeting with Developers</h6>
                                                    <small class="text-muted">Today 6:00pm</small>
                                                </div>
                                            </div>

                                            <i class="ti ti-arrow-up text-warning"></i>
                                        </a>

                                        <a href="javascript:void(0)" class="features feature-success key-feature d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-3">
                                                    <i class="ti ti-gift"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark">Cally's Birthday</h6>
                                                    <small class="text-muted">Tomorrow 10:00am</small>
                                                </div>
                                            </div>

                                            <i class="ti ti-arrow-down text-success"></i>
                                        </a>

                                        <a href="javascript:void(0)" class="features feature-primary key-feature d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-3">
                                                    <i class="ti ti-users"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark">Meeting with C.E.O</h6>
                                                    <small class="text-muted">Today 6:00pm</small>
                                                </div>
                                            </div>

                                            <i class="ti ti-arrow-down text-success"></i>
                                        </a>

                                        <a href="javascript:void(0)" class="features feature-danger key-feature d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-3">
                                                    <i class="ti ti-video-plus"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark">Movie Night</h6>
                                                    <small class="text-muted">Today 6:00pm</small>
                                                </div>
                                            </div>

                                            <i class="ti ti-arrow-down text-success"></i>
                                        </a>

                                        <a href="javascript:void(0)" class="features feature-primary key-feature d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-3">
                                                    <i class="ti ti-users"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark">Meeting with HR</h6>
                                                    <small class="text-muted">Today 6:00pm</small>
                                                </div>
                                            </div>

                                            <i class="ti ti-arrow-down text-success"></i>
                                        </a>

                                        <a href="javascript:void(0)" class="features feature-success key-feature d-flex align-items-center justify-content-between mt-4">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-3">
                                                    <i class="ti ti-gift"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark">Carlo's Birthday</h6>
                                                    <small class="text-muted">Today 6:00pm</small>
                                                </div>
                                            </div>

                                            <i class="ti ti-arrow-down text-success"></i>
                                        </a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="row">
                                    <div class="col-xl-12 mt-4">
                                        <div class="card rounded shadow border-0 p-4">
                                            <div class="d-flex justify-content-between mb-4">
                                                <h6 class="mb-0">Monthly Sales Report</h6>

                                                <div class="text-end">
                                                    <h5 class="mb-0">2384</h5>
                                                    <h6 class="text-muted mb-0">September</h6>
                                                </div>
                                            </div>
                                            <div id="sale-chart"></div>
                                        </div>
                                    </div><!--end col-->
                                    
                                    <div class="col-xl-12 mt-4">
                                        <div class="card rounded shadow border-0 p-4">
                                            <div class="d-flex justify-content-between mb-4">
                                                <h6 class="mb-0">Weekly Top Products</h6>

                                                <div class="text-end">
                                                    <h6 class="text-muted mb-0">Last Week</h6>
                                                </div>
                                            </div>
                                            <div id="top-product-chart"></div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end col-->

                            <div class="col-xl-8 mt-4">
                                <div class="card border-0">
                                    <div class="d-flex justify-content-between p-4 shadow rounded-top">
                                        <h6 class="fw-bold mb-0">Invoice List</h6>

                                        <ul class="list-unstyled mb-0">
                                            <li class="dropdown dropdown-primary list-inline-item">
                                                <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                                    <a class="dropdown-item text-dark" href="#"> Paid</a>
                                                    <a class="dropdown-item text-dark" href="#"> Unpaid</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="table-responsive shadow rounded-bottom" data-simplebar style="height: 545px;">
                                        <table class="table table-center bg-white mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom p-3">No.</th>
                                                    <th class="border-bottom p-3" style="min-width: 220px;">Client Name</th>
                                                    <th class="text-center border-bottom p-3">Amount</th>
                                                    <th class="text-center border-bottom p-3" style="min-width: 150px;">Generate(Dt.)</th>
                                                    <th class="text-center border-bottom p-3">Status</th>
                                                    <th class="text-end border-bottom p-3" style="min-width: 100px;">Preview</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Start -->
                                                <tr>
                                                    <th class="p-3">#d01</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-primary">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?= base_url() ?>/assets-new/images/01.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt>
                                                                <span class="ms-2">Howard Tanner</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center p-3">$253</td>
                                                    <td class="text-center p-3">23th Sept 2021</td>
                                                    <td class="text-center p-3">
                                                        <div class="badge bg-soft-danger rounded px-3 py-1">
                                                            Unpaid
                                                        </div>
                                                    </td>
                                                    <td class="text-end p-3">
                                                        <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    </td>
                                                </tr>
                                                <!-- End -->

                                                <!-- Start -->
                                                <tr>
                                                    <th class="p-3">#d02</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-primary">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?= base_url() ?>/assets-new/images/02.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt>
                                                                <span class="ms-2">Wendy Filson</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center p-3">$482</td>
                                                    <td class="text-center p-3">11th Sept 2021</td>
                                                    <td class="text-center p-3">
                                                        <div class="badge bg-soft-success rounded px-3 py-1">
                                                            Paid
                                                        </div>
                                                    </td>
                                                    <td class="text-end p-3">
                                                        <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    </td>
                                                </tr>
                                                <!-- End -->

                                                <!-- Start -->
                                                <tr>
                                                    <th class="p-3">#d03</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-primary">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?= base_url() ?>/assets-new/images/03.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt>
                                                                <span class="ms-2">Faye Bridger</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center p-3">$546</td>
                                                    <td class="text-center p-3">2nd Sept 2021</td>
                                                    <td class="text-center p-3">
                                                        <div class="badge bg-soft-danger rounded px-3 py-1">
                                                            Unpaid
                                                        </div>
                                                    </td>
                                                    <td class="text-end p-3">
                                                        <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    </td>
                                                </tr>
                                                <!-- End -->

                                                <!-- Start -->
                                                <tr>
                                                    <th class="p-3">#d04</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-primary">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?= base_url() ?>/assets-new/images/04.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt>
                                                                <span class="ms-2">Ronald Curtis</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center p-3">$154</td>
                                                    <td class="text-center p-3">1st Sept 2021</td>
                                                    <td class="text-center p-3">
                                                        <div class="badge bg-soft-danger rounded px-3 py-1">
                                                            Unpaid
                                                        </div>
                                                    </td>
                                                    <td class="text-end p-3">
                                                        <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    </td>
                                                </tr>
                                                <!-- End -->

                                                <!-- Start -->
                                                <tr>
                                                    <th class="p-3">#d05</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-primary">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?= base_url() ?>/assets-new/images/05.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt>
                                                                <span class="ms-2">Melissa Hibner</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center p-3">$458</td>
                                                    <td class="text-center p-3">1st Sept 2021</td>
                                                    <td class="text-center p-3">
                                                        <div class="badge bg-soft-success rounded px-3 py-1">
                                                            Paid
                                                        </div>
                                                    </td>
                                                    <td class="text-end p-3">
                                                        <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    </td>
                                                </tr>
                                                <!-- End -->

                                                <!-- Start -->
                                                <tr>
                                                    <th class="p-3">#d06</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-primary">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?= base_url() ?>/assets-new/images/06.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt>
                                                                <span class="ms-2">Randall Case</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center p-3">$548</td>
                                                    <td class="text-center p-3">28th Aug 2021</td>
                                                    <td class="text-center p-3">
                                                        <div class="badge bg-soft-success rounded px-3 py-1">
                                                            Paid
                                                        </div>
                                                    </td>
                                                    <td class="text-end p-3">
                                                        <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    </td>
                                                </tr>
                                                <!-- End -->

                                                <!-- Start -->
                                                <tr>
                                                    <th class="p-3">#d07</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-primary">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?= base_url() ?>/assets-new/images/07.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt>
                                                                <span class="ms-2">Jerry Morena</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center p-3">$658</td>
                                                    <td class="text-center p-3">25th Aug 2021</td>
                                                    <td class="text-center p-3">
                                                        <div class="badge bg-soft-danger rounded px-3 py-1">
                                                            Unpaid
                                                        </div>
                                                    </td>
                                                    <td class="text-end p-3">
                                                        <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    </td>
                                                </tr>
                                                <!-- End -->

                                                <!-- Start -->
                                                <tr>
                                                    <th class="p-3">#d08</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-primary">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?= base_url() ?>/assets-new/images/08.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt>
                                                                <span class="ms-2">Lester McNally</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center p-3">$457</td>
                                                    <td class="text-center p-3">20th Aug 2021</td>
                                                    <td class="text-center p-3">
                                                        <div class="badge bg-soft-danger rounded px-3 py-1">
                                                            Unpaid
                                                        </div>
                                                    </td>
                                                    <td class="text-end p-3">
                                                        <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    </td>
                                                </tr>
                                                <!-- End -->

                                                <!-- Start -->
                                                <tr>
                                                    <th class="p-3">#d09</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-primary">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?= base_url() ?>/assets-new/images/09.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt>
                                                                <span class="ms-2">Christopher Burrell</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center p-3">$586</td>
                                                    <td class="text-center p-3">15th Aug 2021</td>
                                                    <td class="text-center p-3">
                                                        <div class="badge bg-soft-success rounded px-3 py-1">
                                                            Paid
                                                        </div>
                                                    </td>
                                                    <td class="text-end p-3">
                                                        <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    </td>
                                                </tr>
                                                <!-- End -->

                                                <!-- Start -->
                                                <tr>
                                                    <th class="p-3">#d10</th>
                                                    <td class="p-3">
                                                        <a href="#" class="text-primary">
                                                            <div class="d-flex align-items-center">
                                                                <img src="<?= base_url() ?>/assets-new/images/10.jpg" class="avatar avatar-ex-small rounded-circle shadow" alt>
                                                                <span class="ms-2">Mary Skeens</span>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td class="text-center p-3">$325</td>
                                                    <td class="text-center p-3">10th Aug 2021</td>
                                                    <td class="text-center p-3">
                                                        <div class="badge bg-soft-danger rounded px-3 py-1">
                                                            Unpaid
                                                        </div>
                                                    </td>
                                                    <td class="text-end p-3">
                                                        <a href="invoice.html" class="btn btn-sm btn-primary">Preview</a>
                                                    </td>
                                                </tr>
                                                <!-- End -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end container-->

                <!-- Footer Start -->
                <footer class="shadow py-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-sm-start text-center mx-md-2">
                                    <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script> Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </footer><!--end footer-->
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasLeftLabel" class="mb-0">
                    <img src="<?= base_url() ?>/assets-new/images/logo-dark.png" height="24" class="light-version" alt>
                    <img src="<?= base_url() ?>/assets-new/images/logo-light.png" height="24" class="dark-version" alt>
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h6 class="fw-bold">Theme Options</h6>

                            <ul class="text-center style-switcher list-unstyled mt-4">
                                <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="<?= base_url() ?>/assets-new/images/rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="<?= base_url() ?>/assets-new/images/ltr.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="<?= base_url() ?>/assets-new/images/dark-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="<?= base_url() ?>/assets-new/images/dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="<?= base_url() ?>/assets-new/images/dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt><span class="text-dark fw-medium mt-3 d-block">Dark Version</span></a></li>
                                <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="<?= base_url() ?>/assets-new/images/ltr.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt><span class="text-dark fw-medium mt-3 d-block">Light Version</span></a></li>
                                <li class="d-grid"><a href="https://shreethemes.in/landrick/landing/index.html" target="_blank" class="mt-4"><img src="<?= base_url() ?>/assets-new/images/landing.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 230px;" alt><span class="text-dark fw-medium mt-3 d-block">Landing</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon social mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank" class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->
        
        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="<?= base_url() ?>/assets-new/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/feather.min.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/simplebar.min.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/apexcharts.min.js"></script>
        <!-- Main Js -->
        <script src="<?= base_url() ?>/assets-new/js/plugins.init.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/app.js"></script>
        
    </body>

</html>