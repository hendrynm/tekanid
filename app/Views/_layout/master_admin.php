<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="<?= base_url("img/tekanid-favicon.png") ?>" type="image/png" sizes="16x16"/>

    <?php if((current_url(true)->getSegment(2)) !== ""): ?>
        <link rel="stylesheet" href="<?= base_url("core/assets/css/libs.bundle.css") ?>" />
    <?php endif; ?>

    <link rel="stylesheet" href="<?= base_url("core/assets/css/theme.bundle.css") ?>" />

    <title><?= $this->renderSection("title") ?> - Admin TekanID</title>
</head>
<body class="bg-gray-200">

<?= $this->include("_partial/topbar_big") ?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-3 col-xl-2 px-lg-0 border-bottom border-bottom-lg-0 border-end-lg border-gray-300 sidenav sidenav-start">
                <div class="collapse d-lg-block" id="sidenavCollapse">
                    <div class="py-7 py-lg-8 px-lg-7">
                        <ul class="list mb-6">
                            <li class="list-item">
                                <a class="list-link" href="<?= base_url("/admin/beranda") ?>">Beranda</a>
                            </li>
                        </ul>

                        <h6 class="text-uppercase fw-bolder">
                            Peringkas Tautan
                        </h6>
                        <ul class="list mb-6">
                            <li class="list-item">
                                <a class="list-link" href="<?= base_url("/admin/tautan/dasbor") ?>">Dasbor Tautan</a>
                            </li>
                            <li class="list-item d-flex">
                                <a class="list-link" href="<?= base_url("/admin/tautan/buat") ?>">Buat Tautan Baru</a>
                            </li>
                        </ul>

                        <h6 class="text-uppercase fw-bolder">
                            Zoom Meeting
                        </h6>
                        <ul class="list mb-6">
                            <li class="list-item">
                                <a class="list-link" href="<?= base_url("/admin/zoom/dasbor") ?>">Dasbor Zoom</a>
                            </li>
                            <li class="list-item d-flex">
                                <a class="list-link" href="<?= base_url("/admin/zoom/beli") ?>">Beli Paket</a>
                            </li>
                        </ul>

                        <h6 class="text-uppercase fw-bolder">
                            Manajemen Akun
                        </h6>
                        <ul class="list mb-6">
                            <li class="list-item">
                                <a class="list-link" href="<?= base_url("/keluar") ?>">Keluar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-9 offset-lg-3 offset-xl-2 py-5 py-lg-12">
                <h1 class="mb-1" id="alerts">
                    <?= $this->renderSection("judul") ?>
                </h1>

                <p class="fs-lg text-gray-700">
                    <?= $this->renderSection("deskripsi") ?>
                </p>

                <hr class="bg-gray-300 my-6">

                <?= $this->renderSection("konten") ?>

            </div>

            <div class="col-12 col-lg-3 col-xl-2 d-none d-lg-block px-lg-0 sidenav sidenav-end"></div>
        </div>
    </div>
</section>

<script src="<?= base_url("core/assets/js/vendor.bundle.js") ?>"></script>
<script src="<?= base_url("core/assets/js/theme.bundle.js") ?>"></script>

<?= $this->renderSection("js") ?>
</body>
</html>
