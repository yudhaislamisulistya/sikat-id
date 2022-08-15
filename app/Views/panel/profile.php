<?= $this->extend('layouts/page-layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Data Perumahan Dosen</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Profile</li>
                </ul>
            </nav>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="bg-primary card border-0 shadow rounded overflow-hidden p-4"
                    style="background: url('assets/images/account/bg.png') center;">
                    <div class="row">
                        <div class="col-md-8 m-auto">
                            <div class="card text-center p-4 rounded">
                                <img src="<?=session()->get("LoggedUserData")['profile_img'];  ?>"
                                    class="rounded-circle shadow avatar avatar-md-md mx-auto" alt="">
                                <h5 class="mt-3 mb-0"><?=session()->get("LoggedUserData")['name'];  ?></h5>
                                <small class="text-muted"><?=session()->get("LoggedUserData")['email'];  ?></small>

                                <ul class="list-unstyled social-icon social mb-0 mt-4">
                                    <li class="list-inline-item mb-0"><a href="javascript::void(0)" class="rounded"><i
                                                class="ti ti-brand-dribbble align-middle" title="dribbble"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="javascript::void(0)" class="rounded"><i
                                                class="ti ti-brand-facebook align-middle" title="facebook"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="javascript::void(0)" class="rounded"><i
                                                class="ti ti-brand-instagram align-middle" title="instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item mb-0"><a href="javascript::void(0)" class="rounded"><i
                                                class="ti ti-brand-twitter align-middle" title="twitter"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="javascript::void(0)" class="rounded"><i
                                                class="ti ti-mail align-middle" title="email"></i></a></li>
                                    <li class="list-inline-item mb-0"><a href="javascript::void(0)" class="rounded"><i
                                                class="ti ti-world align-middle" title="website"></i></a></li>
                                </ul>
                                <!--end icon-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->

    <?= $this->endSection() ?>