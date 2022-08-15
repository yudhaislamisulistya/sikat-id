

<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8" />
        <title>Lecturer - Check Address - SIKAT.ID</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v4.3.0" />

        <!-- favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>/assets-new/images/favicon.ico" />
        <!-- Css -->
        <link href="<?= base_url() ?>/assets-new/libs/simplebar/simplebar.min.css" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link href="<?= base_url() ?>/assets-new/css/bootstrap.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url() ?>/assets-new/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>/assets-new/libs/@iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <!-- Style Css-->
        <link href="<?= base_url() ?>/assets-new/css/style.min.css" class="theme-opt" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/css/tom-select.css" rel="stylesheet">

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Hero Start -->
        <section class="bg-home bg-light d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-primary rounded-circle mx-auto" style="height: 90px; width:90px;">
                                <img class="rounded-circle" src="<?=session()->get("LoggedUserData")['profile_img'];  ?>" alt="">
                            </div>
                            <h1 class="my-4 fw-bold"><?=session()->get("LoggedUserData")['name'];  ?></h1>
                            <p class="text-muted para-desc mx-auto">Selamat Datang di Sikat.id - Sistem keamanan Terpadu Perumahan Dosen Unhas Tamalanrea <b>Sebelum Masuk ke Sistem, Silahkan Pilih Blok Perumahan Dosen Anda! Thanks :)</b></p>
                            <form action="<?= route_to('check_address_save') ?>" method="post">
                                <div class="form-group mb-10">
                                    <label>Data Perdos</label>
                                    <select name="address" id="address" required>
                                        <option value="">Silahkan Pilih Data Perdos...</option>
                                        <?php foreach (getDataPerdos() as $key => $value) { ?>
                                            <option value="<?= $value->address ?>"><?= $value->address ?> - <?= $value->name  ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-soft-primary mt-3">Save</button>
                            </form>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
        
        <!-- javascript -->
        <!-- JAVASCRIPT -->
        <script src="<?= base_url() ?>/assets-new/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>/assets-new/libs/feather-icons/feather.min.js"></script>
        <script src="<?= base_url() ?>/assets-new/libs/simplebar/simplebar.min.js"></script>
        <!-- Main Js -->
        <script src="<?= base_url() ?>/assets-new/js/plugins.init.js"></script>
        <script src="<?= base_url() ?>/assets-new/js/app.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tom-select@2.1.0/dist/js/tom-select.complete.min.js"></script>
        <script>
            new TomSelect("#address",{
                create: true,
                sortField: {
                    field: "text",
                    direction: "asc"
                }
            });
        </script>
        
    </body>
    

</html>
