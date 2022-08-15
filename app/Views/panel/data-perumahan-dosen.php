<?= $this->extend('layouts/page-layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Data Perumahan Dosen</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Data Perumahan Dosen</li>
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



        <div class="row">
            <div class="col-md-12 mt-4">
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
                                    <th>No</th>
                                    <th>Alamat</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Unit Kerja</th>
                                    <th>Luas Rumah</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                
                                foreach ($data as $key => $value) { ?>
                                <tr>
                                    <td><?= ++$key?></td>
                                    <td><?= $value->address?></td>
                                    <td><?= $value->name?></td>
                                    <td><?= $value->nip?></td>
                                    <td><?= $value->work_unit?></td>
                                    <td><?= $value->large_temporary?></td>
                                    <td><?= $value->description?></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary btn-edit mb-2"
                                            data-id="<?= $value->id_lecturer_housing ?>"
                                            data-address="<?= $value->address ?>"
                                            data-name="<?= $value->name ?>"
                                            data-nip="<?= $value->nip ?>"
                                            data-work-unit="<?= $value->work_unit ?>"
                                            data-large-temporary="<?= $value->large_temporary ?>"
                                            data-description="<?= $value->description ?>"
                                            >
                                            <i class="ti ti-edit"></i></button>
                                        <button class="btn btn-sm btn-danger btn-delete"
                                            data-id="<?= $value->id_lecturer_housing ?>"><i
                                                class="ti ti-trash"></i></button>
                                    </td>
                                </tr>
                                <?php }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Alamat</th>
                                    <th>Nama</th>
                                    <th>NIP</th>
                                    <th>Unit Kerja</th>
                                    <th>Luas Rumah</th>
                                    <th>Keterangan</th>
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


    <!-- Modal Add Data Perumahan Dosen-->
    <form action="<?= route_to('data_perumahan_dosen_save') ?>" method="post">
        <?= csrf_field()?>
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Perumahan Dosen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="address" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="nip" placeholder="NIP">
                        </div>
                        <div class="form-group">
                            <label>Unit Kerja</label>
                            <input type="text" class="form-control" name="work_unit" placeholder="Unit Kerja">
                        </div>
                        <div class="form-group">
                            <label>Luas(M2) Rumah Sementara</label>
                            <input type="text" class="form-control" name="large_temporary"
                                placeholder="Luas Rumah Sementara">
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
    <!-- End Modal Add Data Perumahan Dosen-->

    <!-- Modal Edit Data Perumahan Dosen-->
    <form action="<?= route_to('data_perumahan_dosen_update') ?>" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Perumahan Dosen</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control address" name="address" placeholder="Alamat">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control name" name="name" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control nip" name="nip" placeholder="NIP">
                        </div>
                        <div class="form-group">
                            <label>Unit Kerja</label>
                            <input type="text" class="form-control work_unit" name="work_unit" placeholder="Unit Kerja">
                        </div>
                        <div class="form-group">
                            <label>Luas(M2) Rumah Sementara</label>
                            <input type="text" class="form-control large_temporary" name="large_temporary"
                                placeholder="Luas Rumah Sementara">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" class="form-control description" name="description" placeholder="Keterangan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_lecturer_housing" class="id_lecturer_housing">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Edit Data Perumahan Dosen-->

    <!-- Modal Delete Data Perumahan Dosen-->
    <form action="<?= route_to('data_perumahan_dosen_delete') ?>" method="post">
        <?= csrf_field() ?>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Perumahan Dosen Ini ?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <h4>Apakah Kamu Ingin Data Perumahan Dosen Ini?</h4>

                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_lecturer_housing" class="id_lecturer_housing">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Delete Data Perumahan Dosen-->

    <?= $this->endSection() ?>

    <?= $this->section('javascript') ?>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

        $('.btn-edit').on('click', function () {
            const id = $(this).data('id');
            const address = $(this).data('address');
            const name = $(this).data('name');
            const nip = $(this).data('nip');
            const work_unit = $(this).data('work-unit');
            const large_temporary = $(this).data('large-temporary');
            const description = $(this).data('description');
            $('.id_lecturer_housing').val(id);
            $('.address').val(address);
            $('.name').val(name);
            $('.nip').val(nip);
            $('.work_unit').val(work_unit);
            $('.large_temporary').val(large_temporary);
            $('.description').val(description);
            $('#editModal').modal('show');
        });

        $('.btn-delete').click(function (e) {
            e.preventDefault();
            const id = $(this).data('id');
            $('.id_lecturer_housing').val(id);
            $('#deleteModal').modal('show');
        });
    </script>
    <?= $this->endSection() ?>