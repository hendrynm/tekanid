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

    <title><?= $this->renderSection("title") ?> - TekanID</title>
</head>
<body>

<?= $this->include("_partial/topbar_small") ?>

<?php if(session()->has("sukses") || session()->has("gagal")): ?>
    <div class="container">
        <div class="row">
            <div class="alert alert-<?= (session()->has("sukses")) ? "success" : "danger" ?> alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata("sukses") ?? session()->getFlashdata("gagal") ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
<?php endif; ?>

<?= $this->renderSection("konten") ?>

<?php if((current_url(true)->getSegment(2)) !== ""): ?>
    <div class="position-relative">
        <div class="shape shape-bottom shape-fluid-x text-gray-300">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
        </div>
    </div>

    <footer class="py-8 py-md-11 bg-gray-300">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <img src="<?= base_url("img/tekanid-logo.png") ?>" alt="tekanid logo" class="footer-brand img-fluid mx-n2 ">
                    <p class="text-gray-700 mb-2 fw-bold">Cukup tekan di sini aja!</p>

                    <p class="text-gray-600 mb-10 mb-lg-0" style="font-size:12px;">
                        Copyright (c) 2022 - <?= date("Y") ?> by TekanID <br>
                        <a href="http://www.freepik.com" class="text-reset" style="font-size:12px;">
                            Ilustration by <b>Freepik</b>
                        </a>
                    </p>
                </div>

                <div class="col-6 col-lg-3 ms-10">
                    <h6 class="fw-bolder text-uppercase text-gray-700">
                        Hubungan Investor
                    </h6>

                    <ul class="list-unstyled text-muted mb-0">
                        <li class="mb-3">
                            <a href="#!" class="text-reset">
                                Sponsor
                            </a>
                        </li>
                        <li class="mb-3">
                            <a href="#!" class="text-reset">
                                Skema
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="text-reset">
                                Kontak
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>

<?= $this->include("_partial/modal_daftar") ?>
<?= $this->include("_partial/modal_masuk") ?>

<script src="<?= base_url("core/assets/js/vendor.bundle.js") ?>"></script>
<script src="<?= base_url("core/assets/js/theme.bundle.js") ?>"></script>

<?= $this->renderSection("js") ?>
</body>
</html>
