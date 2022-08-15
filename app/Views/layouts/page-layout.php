

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
        <link href="<?= base_url() ?>/assets-new/css/dataTables.bootstrap4.min.css" class="theme-opt" rel="stylesheet" type="text/css">
        <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/css/tom-select.css" rel="stylesheet">

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
                        <li><a href="<?= route_to('dashboard_panel') ?>"><i class="ti ti-home me-2"></i>Dashboard</a></li>
                        <span style="margin-left: 20px; font-weight: bold;">Manajemen Data</span>
                        <li><a href="<?= route_to('data_perumahan_dosen') ?>"><i class="ti ti-file-invoice me-2"></i>Data Perumahan Dosen</a></li>
                        <li><a href="<?= route_to('data_iuran') ?>"><i class="ti ti-mood-confuzed me-2"></i>Data Iuran</a></li>
                        <span style="margin-left: 20px; font-weight: bold;">Cek</span>
                        <li><a href="<?= route_to('check_iuran') ?>"><i class="ti ti-check me-2"></i>Cek Iuran</a></li>
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
                        </div>

                        <ul class="list-unstyled mb-0">

                            <li class="list-inline-item mb-0 ms-1">
                                <div class="dropdown dropdown-primary">
                                    <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?=session()->get("LoggedUserData")['profile_img'];  ?>" class="avatar avatar-ex-small rounded" alt></button>
                                    <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                        <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="profile.html">
                                            <img src="<?=session()->get("LoggedUserData")['profile_img'];  ?>" class="avatar avatar-md-sm rounded-circle border shadow" alt>
                                            <div class="flex-1 ms-2">
                                                <span class="d-block"><?=session()->get("LoggedUserData")['name'];  ?></span>
                                                <small class="text-muted"><?=session()->get("LoggedUserData")['email'];  ?></small>
                                            </div>
                                        </a>
                                        <a class="dropdown-item text-dark" href="<?= route_to('dashboard_panel') ?>"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Dashboard</a>
                                        <a class="dropdown-item text-dark" href="<?= route_to('profile_panel') ?>"><span class="mb-0 d-inline-block me-1"><i class="ti ti-settings"></i></span> Profile</a>
                                        <div class="dropdown-divider border-top"></div>
                                        <a class="dropdown-item text-dark" href="<?= route_to('logout') ?>"><span class="mb-0 d-inline-block me-1"><i class="ti ti-logout"></i></span> Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Top Header -->

                <?= $this->renderSection('content') ?>

                <!-- Footer Start -->
                <footer class="shadow py-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-sm-start text-center mx-md-2">
                                    <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script> UNHAS. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Yudha Islami Sulistya</a>.</p>
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

        
        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="<?= base_url() ?>/assets-new/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/feather.min.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/simplebar.min.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/apexcharts.min.js"></script>
        <!-- Main Js -->
        <script src="<?= base_url() ?>/assets-new/js/plugins.init.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/app.js"></script>
        <!-- Datatables -->
        <script src="<?= base_url() ?>/assets-new/js/jquery.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>
        <?= $this->renderSection('javascript') ?>

    </body>

</html>