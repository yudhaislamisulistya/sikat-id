<?= $this->extend('layouts/page-layout') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center mb-3">
            <h5 class="mb-0">Cek Iuran</h5>

            <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Cek Iuran</li>
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
                        <h6 class="fw-bold mb-0">Cek</h6>
                    </div>
                    <div class="card-body shadow rounded-bottom">
                        <form action="<?= route_to('check_iuran_detail') ?>" method="post">
                            <div class="form-group mb-10">
                                <label>Data Perdos</label>
                                <select name="data_perdos" id="data_perdos">
                                    <option value="">Silahkan Pilih Data Perdos...</option>
                                    <?php foreach (getDataPerdos() as $key => $value) { ?>
                                        <option value="<?= $value->address ?>"><?= $value->address ?> - <?= $value->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Cek</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end container-->
    <?= $this->endSection() ?>

    <?= $this->section('javascript') ?>
    <script>
            new TomSelect("#data_perdos",{
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
    </script>
    <?= $this->endSection() ?>

