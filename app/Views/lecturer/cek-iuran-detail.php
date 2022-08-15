<?= $this->extend('layouts/page-layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Cek Iuran Perumahan Dosen</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Profile</li>
                </ul>
            </nav>
        </div>
        <?php if($contributions) { ?>
            <div class="row mt-4">
            <div class="col-12">
                <div class="bg-primary card border-0 shadow rounded overflow-hidden p-4"
                    style="background: url('assets/images/account/bg.png') center;">
                    <div class="row">
                        <div class="col-md-8 m-auto">
                            <div class="card text-center p-4 rounded">
                                <img src="<?=session()->get("LoggedUserData")['profile_img'];  ?>"
                                    class="rounded-circle shadow avatar avatar-md-md mx-auto" alt="">
                                <h5 class="mt-3 mb-0"><?= getDataPerdosByAddress($contributions[0]->address)['name'] ?>L</h5>
                                <h6 class="mt-3 mb-0">Blok : <?= getDataPerdosByAddress($contributions[0]->address)['address'] ?></h6>
                                <small class="text-muted"><?= getDataPerdosByAddress($contributions[0]->address)['nip'] ?> - <?= getDataPerdosByAddress($contributions[0]->address)['work_unit'] ?></small>
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <p>Luas Rumah : <span class="badge bg-primary"> <?= getDataPerdosByAddress($contributions[0]->address)['large_temporary'] ?> m2 </span></p>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <p>Potogan : <span class="badge bg-info"> Rp. <?= getDataContribtionByAddress($contributions[0]->address)['stub'] ?> </span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card border-0">
                    <div class="d-flex justify-content-between p-4 shadow rounded-top">
                        <h6 class="fw-bold mb-0">Daftar</h6>
                    </div>
                    <div class="card-body table-responsive shadow rounded-bottom">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="font-size: 10px;">Tahun</th>
                                    <th style="font-size: 10px;">Bulan 1</th>
                                    <th style="font-size: 10px;">Bulan 2</th>
                                    <th style="font-size: 10px;">Bulan 3</th>
                                    <th style="font-size: 10px;">Bulan 4</th>
                                    <th style="font-size: 10px;">Bulan 5</th>
                                    <th style="font-size: 10px;">Bulan 6</th>
                                    <th style="font-size: 10px;">Bulan 7</th>
                                    <th style="font-size: 10px;">Bulan 8</th>
                                    <th style="font-size: 10px;">Bulan 9</th>
                                    <th style="font-size: 10px;">Bulan 10</th>
                                    <th style="font-size: 10px;">Bulan 11</th>
                                    <th style="font-size: 10px;">Bulan 12</th>
                                    <th style="font-size: 10px;">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($contributions as $key => $value) { ?>
                                    <tr style="font-size: 10px;">
                                        <td><?= $value->year ?></td>
                                        <td><?= $value->month_1 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></i></span>" ?></td>
                                        <td><?= $value->month_2 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td><?= $value->month_3 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td><?= $value->month_4 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td><?= $value->month_5 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td><?= $value->month_6 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td><?= $value->month_7 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td><?= $value->month_8 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td><?= $value->month_9 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td><?= $value->month_10 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td><?= $value->month_11 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td><?= $value->month_12 == 1 ? "<span class='badge bg-success'><i class='ti ti-check'></i></span>" : "<span class='badge bg-danger'><i class='ti ti-minus'></span>" ?></td>
                                        <td>
                                            <?= rupiah($value->month_all*$value->stub) ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th style="font-size: 10px;">Tahun</th>
                                    <th style="font-size: 10px;">Bulan 1</th>
                                    <th style="font-size: 10px;">Bulan 2</th>
                                    <th style="font-size: 10px;">Bulan 3</th>
                                    <th style="font-size: 10px;">Bulan 4</th>
                                    <th style="font-size: 10px;">Bulan 5</th>
                                    <th style="font-size: 10px;">Bulan 6</th>
                                    <th style="font-size: 10px;">Bulan 7</th>
                                    <th style="font-size: 10px;">Bulan 8</th>
                                    <th style="font-size: 10px;">Bulan 9</th>
                                    <th style="font-size: 10px;">Bulan 10</th>
                                    <th style="font-size: 10px;">Bulan 11</th>
                                    <th style="font-size: 10px;">Bulan 12</th>
                                    <th style="font-size: 10px;">Jumlah</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <?php }else{ ?>
Maaf Data Tidak Tersedia
        <?php } ?>

    </div>
    <!--end container-->

    <?= $this->endSection() ?>