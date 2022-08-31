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
                                    <option value="<?= $value->address ?>"><?= $value->address ?> - <?= getDataPerdosByAddress($value->address) == NULL ? "-" : getDataPerdosByAddress($value->address)['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tahun</label>
                            <input type="text" class="form-control" name="year" placeholder="Tahun">
                        </div>
                        <div class="form-group">
                            <label>Potongan</label>
                            <input type="number" class="form-control" name="stub" placeholder="Potongan">
                        </div>
                        <div class="form-group">
                            <label>Sistem Bayar</label>
                            <select name="pay_system" class="form-control">
                                <option value="" disabled>Silahkan Pilih Sistem Bayar...</option>
                                <option value="By.Lgs">By.Lgs</option>
                                <option value="Tr.Rek">Tr.Rek</option>
                                <option value="Pt.Gaji">Pt.Gaji</option>
                            </select>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Pertama</label>
                            <input type="number" class="form-control" name="month_1" placeholder="Bulan 1">
                        </div>
                        <div class="form-group">
                            <label>Bulan Kedua</label>
                            <input type="number" class="form-control" name="month_2" placeholder="Bulan 2">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Ketiga</label>
                            <input type="number" class="form-control" name="month_3" placeholder="Bulan 3">
                        </div>
                        <div class="form-group">
                            <label>Bulan Keempat</label>
                            <input type="number" class="form-control" name="month_4" placeholder="Bulan 4">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kelima</label>
                            <input type="number" class="form-control" name="month_5" placeholder="Bulan 5">
                        </div>
                        <div class="form-group">
                            <label>Bulan Keenam</label>
                            <input type="number" class="form-control" name="month_6" placeholder="Bulan 6">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Ketujuh</label>
                            <input type="number" class="form-control" name="month_7" placeholder="Bulan 7">
                        </div>
                        <div class="form-group">
                            <label>Bulan Kedelapan</label>
                            <input type="number" class="form-control" name="month_8" placeholder="Bulan 8">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kesembilan</label>
                            <input type="number" class="form-control" name="month_9" placeholder="Bulan 9">
                        </div>
                        <div class="form-group">
                            <label>Bulan Kesepuluh</label>
                            <input type="number" class="form-control" name="month_10" placeholder="Bulan 10">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kesebelas</label>
                            <input type="number" class="form-control" name="month_11" placeholder="Bulan 11">
                        </div>
                        <div class="form-group">
                            <label>Bulan Keduabelas</label>
                            <input type="number" class="form-control" name="month_12" placeholder="Bulan 12">
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
                            <input type="number" class="form-control stub" name="stub" placeholder="Potongan">
                        </div>
                        <div class="form-group">
                            <label>Sistem Bayar</label>
                            <select name="pay_system" class="form-control pay_system">
                                <option value="" disabled>Silahkan Pilih Sistem Bayar...</option>
                                <option value="By.Lgs">By.Lgs</option>
                                <option value="Tr.Rek">Tr.Rek</option>
                                <option value="Pt.Gaji">Pt.Gaji</option>
                            </select>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Pertama</label>
                            <input type="number" class="form-control month_1" name="month_1" placeholder="Bulan 1">
                        </div>
                        <div class="form-group">
                            <label>Bulan Kedua</label>
                            <input type="number" class="form-control month_2" name="month_2" placeholder="Bulan 2">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Ketiga</label>
                            <input type="number" class="form-control month_3" name="month_3" placeholder="Bulan 3">
                        </div>
                        <div class="form-group">
                            <label>Bulan Keempat</label>
                            <input type="number" class="form-control month_4" name="month_4" placeholder="Bulan 4">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kelima</label>
                            <input type="number" class="form-control month_5" name="month_5" placeholder="Bulan 5">
                        </div>
                        <div class="form-group">
                            <label>Bulan Keenam</label>
                            <input type="number" class="form-control month_6" name="month_6" placeholder="Bulan 6">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Ketujuh</label>
                            <input type="number" class="form-control month_7" name="month_7" placeholder="Bulan 7">
                        </div>
                        <div class="form-group">
                            <label>Bulan Kedelapan</label>
                            <input type="number" class="form-control month_8" name="month_8" placeholder="Bulan 8">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kesembilan</label>
                            <input type="number" class="form-control month_9" name="month_9" placeholder="Bulan 9">
                        </div>
                        <div class="form-group">
                            <label>Bulan Kesepuluh</label>
                            <input type="number" class="form-control month_10" name="month_10" placeholder="Bulan 10">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label>Bulan Kesebelas</label>
                            <input type="number" class="form-control month_11" name="month_11" placeholder="Bulan 11">
                        </div>
                        <div class="form-group">
                            <label>Bulan Keduabelas</label>
                            <input type="number" class="form-control month_12" name="month_12" placeholder="Bulan 12">
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
                ajax: "<?= route_to('api_get_iuran') ?>",
                columns: [
                    { data: 'address' },
                    { data: 'name' },
                    { data: 'year' },
                    { data: 'stub' },
                    { data: 'pay_system' },
                    { data: 'month_1' },
                    { data: 'month_2' },
                    { data: 'month_3' },
                    { data: 'month_4' },
                    { data: 'month_5' },
                    { data: 'month_6' },
                    { data: 'month_7' },
                    { data: 'month_8' },
                    { data: 'month_9' },
                    { data: 'month_10' },
                    { data: 'month_11' },
                    { data: 'month_12' },
                    { data: 'month_all' },
                    { data: 'description' },
                    { data: 'actions' },
                ],
                "columnDefs": [
                    {
                        "targets": [0],
                        "render": function (data, type, row) {
                            return "<span style='font-size: 10px'>"+row.address+"</span>"
                        }
                    },
                    {
                        "targets": [1],
                        "render": function (data, type, row) {
                            return "<span style='font-size: 10px'>"+row.name+"</span>"
                        }
                    },
                    {
                        "targets": [2],
                        "render": function (data, type, row) {
                            return "<span style='font-size: 10px'>"+row.year+"</span>"
                        }
                    },
                    {
                        "targets": [3],
                        "render": function (data, type, row) {
                            return "<span style='font-size: 10px'>"+formatRupiah(row.stub, "Rp. ")+"</span>"
                        }
                    },
                    {
                        "targets": [4],
                        "render": function (data, type, row) {
                            return "<span style='font-size: 10px'>"+row.pay_system+"</span>"
                        }
                    },
                    {
                        "targets": [5],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_1 != 0){
                                    hasil = (row.month_1 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_1, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_1, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [6],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_2 != 0){
                                    hasil = (row.month_2 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_2, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_2, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [7],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_3 != 0){
                                    hasil = (row.month_3 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_3, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_3, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [8],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_4 != 0){
                                    hasil = (row.month_4 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_4, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_4, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [9],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_5 != 0){
                                    hasil = (row.month_5 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_5, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_5, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [10],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_6 != 0){
                                    hasil = (row.month_6 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_6, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_6, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [11],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_7 != 0){
                                    hasil = (row.month_7 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_7, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_7, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [12],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_8 != 0){
                                    hasil = (row.month_8 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_8, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_8, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [13],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_9 != 0){
                                    hasil = (row.month_9 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_9, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_9, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [14],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_10 != 0){
                                    hasil = (row.month_10 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_10, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_10, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [15],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_11 != 0){
                                    hasil = (row.month_11 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_11, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_11, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [16],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                if(row.month_12 != 0){
                                    hasil = (row.month_12 / row.stub) * 100
                                    if(hasil == 100){
                                        return "<span style='font-size: 10px' class='badge bg-success'>Sudah Bayar (100%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_12, 'Rp. ')+"</span>"
                                    }else{
                                        return "<span style='font-size: 10px' class='badge bg-warning'>Belum Lunas ("+hasil+"%)</span><br><span style='font-size: 10px; text-align: center;'>"+formatRupiah(row.month_12, 'Rp. ')+"</span>"
                                    }
                                }else{
                                    return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar</span>"
                                }
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [17],
                        "render": function (data, type, row) {
                            if(row.stub != 0){
                                return "<span style='font-size: 10px'>"+formatRupiah(row.month_all, "Rp. ")+"</span>"
                            }else{
                                return "<span style='font-size: 10px' class='badge bg-danger'>Belum Bayar & Potongan 0</span>"
                            }
                        }
                    },
                    {
                        "targets": [18],
                        "render": function (data, type, row) {
                            if(row.description != null){
                                return "<span style='font-size: 10px'>"+row.description+"</span>"
                            }else{
                                return "<span style='font-size: 10px'>-</span>"
                            }
                        }
                    },
                    {
                        "targets": [19],
                        "render": function (data, type, row) {
                            return `
                                <button id='btn-edit' class="btn btn-sm btn-primary btn-edit mb-2"
                                data-id="`+row.id_contribution+`"
                                data-address="`+row.address+`"
                                data-name="`+row.name+`"
                                data-year="`+row.year+`"
                                data-stub="`+row.stub+`"
                                data-pay-system="`+row.pay_system+`"
                                data-month-1="`+row.month_1+`"
                                data-month-2="`+row.month_2+`"
                                data-month-3="`+row.month_3+`"
                                data-month-4="`+row.month_4+`"
                                data-month-5="`+row.month_5+`"
                                data-month-6="`+row.month_6+`"
                                data-month-7="`+row.month_7+`"
                                data-month-8="`+row.month_8+`"
                                data-month-9="`+row.month_9+`"
                                data-month-10="`+row.month_10+`"
                                data-month-11="`+row.month_11+`"
                                data-month-12="`+row.month_12+`"
                                data-description="`+row.description+`"
                                ><i class='ti ti-edit'></i></button>
                                <button id='btn-delete' class='btn btn-sm btn-danger btn-delete mb-2' data-id='`+row.id_contribution+`'>
                                    <i class='ti ti-trash'></i>
                                </button>
                                `
                        }
                    },
                ],
                dom: 'lBfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });

            $('#example tbody').on('click', '#btn-delete', function () {
                const id = $(this).data('id');
                $('.id_contribution').val(id);
                $('#deleteModal').modal('show');
            });
            $('#example tbody').on('click', '#btn-edit', function () {
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

        });



        new TomSelect("#address",{
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
        
        function formatRupiah(angka, prefix){
            if(angka != 0){
                var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split   		= number_string.split(','),
                sisa     		= split[0].length % 3,
                rupiah     		= split[0].substr(0, sisa),
                ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
                if(ribuan){
                    separator = sisa ? '.' : '';
                    rupiah += separator + ribuan.join('.');
                }
                rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
            }else{
                return "Rp. 0";
            }
		}
    </script>
    <?= $this->endSection() ?>