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
                    <a class="nav-link" href="<?= base_url("/produk") ?>" aria-haspopup="true" aria-expanded="false">Produk</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?= base_url("/biaya") ?>" aria-haspopup="true" aria-expanded="false">Biaya</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?= base_url("/testimoni") ?>" aria-haspopup="true" aria-expanded="false">Testimoni</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="<?= base_url("/kontak") ?>" aria-haspopup="true" aria-expanded="false">Kontak</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown mx-sm-0 mx-md-3">
                    <a class="navbar-btn btn btn-sm btn-pill btn-primary lift ms-auto" href="<?= base_url("/daftar") ?>">Daftar</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="navbar-btn btn btn-sm btn-pill btn-primary-soft lift ms-auto" href="<?= base_url("/masuk") ?>">Masuk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>