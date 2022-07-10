<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">

        <a class="navbar-brand" href="<?= base_url("/") ?>">
            <img src="<?= base_url("img/tekanid-logo.png") ?>" class="navbar-brand-img" alt="tekanid logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fe fe-x"></i>
            </button>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link <?= ((current_url(true)->getSegment(2)) === "produk") ? "active fw-bolder" : "" ?>"
                       href="<?= base_url("/produk") ?>">Produk</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link <?= ((current_url(true)->getSegment(2)) === "biaya") ? "active fw-bolder" : "" ?>"
                       href="<?= base_url("/biaya") ?>">Biaya</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link <?= ((current_url(true)->getSegment(2)) === "testimoni") ? "active fw-bolder" : "" ?>"
                       href="<?= base_url("/testimoni") ?>">Testimoni</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link <?= ((current_url(true)->getSegment(2)) === "kontak") ? "active fw-bolder" : "" ?>"
                       href="<?= base_url("/kontak") ?>">Kontak</a>
                </li>
            </ul>

            <?php if(session()->has("id_pengguna")): ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown mx-sm-0 mx-md-3">
                        <a class="navbar-btn btn btn-sm btn-primary lift ms-auto" href="<?= base_url("/admin/beranda") ?>">Kelola Akun</a>
                    </li>
                    <li class="nav-item dropdown mx-sm-0 mx-md-3">
                        <a class="navbar-btn btn btn-sm btn-danger lift ms-auto" href="<?= base_url("/keluar") ?>">Keluar</a>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown mx-sm-0 mx-md-3">
                        <button class="navbar-btn btn btn-sm btn-primary lift ms-auto" data-bs-toggle="modal" data-bs-target="#modal-daftar">Daftar</button>
                    </li>
                    <li class="nav-item dropdown">
                        <button class="navbar-btn btn btn-sm btn-primary-soft lift ms-auto" data-bs-toggle="modal" data-bs-target="#modal-masuk">Masuk</button>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>