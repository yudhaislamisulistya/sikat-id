<?= $this->extend('layouts/page-layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Data Iuran Perdos</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Data Iuran Perdos</li>
                </ul>
            </nav>
        </div>

        <?php if(session()->getFlashData('status') == "success"){ ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Well done!</strong> Prosess Berhasil.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>
        <?php }else if(session()->getFlashData('status') == "failed"){ ?>
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
            <strong>Oh snap! </strong> Proses Gagal.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php }?>

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>FYI!</strong> Sebelum Menambahkan Data Iuran, Silahkan Cek Terlebih Dahulu Blok dan Nama Pemilik (<b>Jika Ada Silahkan Edit Untuk Mengubah Status Iuran</b>).
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
        </div>



        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card border-0">
                    <div class="d-flex justify-content-between p-4 shadow rounded-top">
                        <h6 class="fw-bold mb-0">Daftar</h6>

                        <ul class="list-unstyled mb-0">
                            <li class="dropdown dropdown-primary list-inline-item">
                                <button type="button"
                                    class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="ti ti-dots-vertical"></i></button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end shadow border-0 mt-3 py-3">
                                    <a class="dropdown-item text-dark" href="javascript:void(0);" data-bs-toggle="modal"
                                        data-bs-target="#addModal"> Tambah Data</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body table-responsive shadow rounded-bottom">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="font-size: 10px;">Blok</th>
                                    <th style="font-size: 10px;">Nama</th>
                                    <th style="font-size: 10px;">Tahun</th>
                                    <th style="font-size: 10px;">Potongan</th>
                                    <th style="font-size: 10px;">Sistem Bayar</th>
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
                                    <th style="font-size: 10px;">Keterangan</th>
                                    <th style="font-size: 10px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $key => $value) { ?>
                                    <tr style="font-size: 10px;">
                                        <td><?= $value->address ?></td>
                                        <td><?= $value->name ?></td>
                                        <td><?= $value->year ?></td>
                                        <td><?= $value->stub ?></td>
                                        <td><?= $value->pay_system ?></td>
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
                                        <td>
                                            <?= $value->description ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary btn-edit mb-2"
                                                data-id="<?= $value->id_contribution ?>"
                                                data-address="<?= $value->address ?>"
                                                data-name="<?= $value->name ?>"
                                                data-year="<?= $value->year ?>"
                                                data-stub="<?= $value->stub ?>"
                                                data-pay-system="<?= $value->pay_system ?>"
                                                data-month-1="<?= $value->month_1 ?>"
                                                data-month-2="<?= $value->month_2 ?>"
                                                data-month-3="<?= $value->month_3 ?>"
                                                data-month-4="<?= $value->month_4 ?>"
                                                data-month-5="<?= $value->month_5 ?>"
                                                data-month-6="<?= $value->month_6 ?>"
                                                data-month-7="<?= $value->month_7 ?>"
                                                data-month-8="<?= $value->month_8 ?>"
                                                data-month-9="<?= $value->month_9 ?>"
                                                data-month-10="<?= $value->month_10 ?>"
                                                data-month-11="<?= $value->month_11 ?>"
                                                data-month-12="<?= $value->month_12 ?>"
                                                data-description="<?= $value->description ?>"
                                                >
                                                <i class="ti ti-edit"></i></button>
                                            <button class="btn btn-sm btn-danger btn-delete"
                                                data-id="<?= $value->id_contribution ?>"
                                                >
                                                <i class="ti ti-trash"></i></button>
                                        </td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th style="font-size: 10px;">Blok</th>
                                    <th style="font-size: 10px;">Nama</th>
                                <th style="font-size: 10px;">Tahun</th>
                                <th style="font-size: 10px;">Potongan</th>
                                    <th style="font-size: 10px;">Sistem Bayar</th>
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
                                    <th style="font-size: 10px;">Keterangan</th>
                                    <th style="font-size: 10px;">Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end container-->


    <!-- Modal Add Data Iuran Perdos-->
    <form action="<?= route_to('data_iuran_save') ?>" method="post">
        <?= csrf_field()?>
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Iuran Perdos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-10">
                            <label>Data Perdos</label>
                            <select name="address" id="address">
                                <option value="">Silahkan Pilih Data Perdos...</option>
                                <?php foreach (getDataPerdos() as $key => $value) { ?>
                                    <option value="<?= $value->address ?>"><?= $value->address ?> - <?= $value->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" class="form-control" name="year" placeholder="Tahun">
                        </div>
                        <div class="form-group">
                            <label>Potongan</label>
                            <input type="text" class="form-control" name="stub" placeholder="Potongan">
                        </div>
                        <div class="form-group">
                            <label>Sistem Bayar</label>
                            <select name="pay_system" class="form-control">
                                <option value="" disabled>Silahkan Pilih Sistem Bayar...</option>
                                <option value="Setor Tunai">Setor Tunai</option>
                                <option value="Transfer Rekening SIKAT">Transfer Rekening SIKAT</option>
                                <option value="Pot. Gaji">Pot. Gaji</option>
                            </select>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Pertama</label>
                            <select name="month_1" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Kedua</label>
                            <select name="month_2" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Ketiga</label>
                            <select name="month_3" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Keempat</label>
                            <select name="month_4" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kelima</label>
                            <select name="month_5" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Keenam</label>
                            <select name="month_6" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Ketujuh</label>
                            <select name="month_7" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Kedelapan</label>
                            <select name="month_8" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kesembilan</label>
                            <select name="month_9" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Kesepuluh</label>
                            <select name="month_10" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kesebelas</label>
                            <select name="month_11" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Keduabelas</label>
                            <select name="month_12" class="form-control">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="description" placeholder="Keterangan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Add Data Iuran Perdos-->

    <!-- Modal Edit Data Iuran Perdos-->
    <form action="<?= route_to('data_iuran_update') ?>" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Iuran Perdos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Blok</label>
                            <input type="text" class="form-control address" name="address" placeholder="Blok" readonly>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control name" name="name" placeholder="Nama" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" class="form-control year" name="year" placeholder="Tahun" readonly>
                        </div>
                        <div class="form-group">
                            <label>Potongan</label>
                            <input type="text" class="form-control stub" name="stub" placeholder="Potongan">
                        </div>
                        <div class="form-group">
                            <label>Sistem Bayar</label>
                            <select name="pay_system" class="form-control pay_system">
                                <option value="" disabled>Silahkan Pilih Sistem Bayar...</option>
                                <option value="Setor Tunai">Setor Tunai</option>
                                <option value="Transfer Rekening SIKAT">Transfer Rekening SIKAT</option>
                                <option value="Pot. Gaji">Pot. Gaji</option>
                            </select>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Pertama</label>
                            <select name="month_1" class="form-control month_1">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Kedua</label>
                            <select name="month_2" class="form-control month_2">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Ketiga</label>
                            <select name="month_3" class="form-control month_3">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Keempat</label>
                            <select name="month_4" class="form-control month_4">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kelima</label>
                            <select name="month_5" class="form-control month_5">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Keenam</label>
                            <select name="month_6" class="form-control month_6">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Ketujuh</label>
                            <select name="month_7" class="form-control month_7">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Kedelapan</label>
                            <select name="month_8" class="form-control month_8">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kesembilan</label>
                            <select name="month_9" class="form-control month_9">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Kesepuluh</label>
                            <select name="month_10" class="form-control month_10">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kesebelas</label>
                            <select name="month_11" class="form-control month_11">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Bulan Keduabelas</label>
                            <select name="month_12" class="form-control month_12">
                                <option value="" disabled>Silahkan Pilih Status Bayar...</option>
                                <option value="0">Belum Bayar</option>
                                <option value="0">Sudah Bayar</option>
                            </select>
                        </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control description" name="description" placeholder="Keterangan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_contribution" class="id_contribution">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Edit Data Iuran Perdos-->

    <!-- Modal Delete Data Iuran Perdos-->
    <form action="<?= route_to('data_iuran_delete') ?>" method="post">
        <?= csrf_field() ?>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Iuran Perdos Ini ?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <h4>Apakah Kamu Ingin Data Iuran Perdos Ini? Data Yang Sudah Dihapus Tidak Dapat Dikembalikan</h4>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_contribution" class="id_contribution">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Delete Data Iuran Perdos-->

    <?= $this->endSection() ?>

    <?= $this->section('javascript') ?>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                dom: 'lBfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });

        $('.btn-edit').on('click', function () {
            const id = $(this).data('id');
            const address = $(this).data('address');
            const name = $(this).data('name');
            const year = $(this).data('year');
            const stub = $(this).data('stub');
            const pay_system = $(this).data('pay-system');
            const month_1 = $(this).data('month-1');
            const month_2 = $(this).data('month-2');
            const month_3 = $(this).data('month-3');
            const month_4 = $(this).data('month-4');
            const month_5 = $(this).data('month-5');
            const month_6 = $(this).data('month-6');
            const month_7 = $(this).data('month-7');
            const month_8 = $(this).data('month-8');
            const month_9 = $(this).data('month-9');
            const month_10 = $(this).data('month-10');
            const month_11 = $(this).data('month-11');
            const month_12 = $(this).data('month-12');
            const description = $(this).data('description');
            $('.id_contribution').val(id);
            $('.address').val(address);
            $('.name').val(name);
            $('.year').val(year);
            $('.stub').val(stub);
            $('.month_1').val(month_1);
            $('.month_2').val(month_2);
            $('.month_3').val(month_3);
            $('.month_4').val(month_4);
            $('.month_5').val(month_5);
            $('.month_6').val(month_6);
            $('.month_7').val(month_7);
            $('.month_8').val(month_8);
            $('.month_9').val(month_9);
            $('.month_10').val(month_10);
            $('.month_11').val(month_11);
            $('.month_12').val(month_12);
            $('.pay_system').val(pay_system);
            $('.description').val(description);
            $('#editModal').modal('show');
        });

        $('.btn-delete').click(function (e) {
            e.preventDefault();
            const id = $(this).data('id');
            $('.id_contribution').val(id);
            $('#deleteModal').modal('show');
        });

        new TomSelect("#address",{
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
    </script>
    <?= $this->endSection() ?>