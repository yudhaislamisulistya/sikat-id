<?= $this->extend('layouts/page-layout') ?>

<?= $this->section('content') ?>
    <div class="container-fluid">
                    <div class="layout-specing">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div>
                                <h6 class="text-muted mb-1">Welcome back, <?=session()->get("LoggedUserData")['name'];  ?>!</h6>
                                <h5 class="mb-0">Dashboard</h5>
                            </div>
                        </div>
                    
                        <div class="row row-cols-xl-12 row-cols-md-12 row-cols-1">
                            <div class="col mt-12">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-users-alt fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Data Perdos</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="<?= count(getDataPerdos()) ?>">-</span> Orang</p>
                                        </div>
                                    </div>

                                </a>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <div class="card shadow border-0 p-4 pb-0 rounded">
                                    <div class="justify-content-between text-center">
                                        <h6 class="mb-0 fw-bold text-center">Sikat.id - Sistem keamanan Terpadu Perumahan Dosen Unhas Tamalanrea</h6>
                                    </div>
                                    <div class="text-center">
                                        <img src="<?= base_url() ?>/assets/images/logo-sikat.png" alt="">
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end container-->
<?= $this->endSection() ?>