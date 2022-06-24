<?= $this->extend("_layout/master_beranda") ?>

<?= $this->section("title") ?>
Biaya
<?= $this->endSection() ?>

<?= $this->section("konten") ?>

<section class="pt-8 pt-md-11 pb-10 pb-md-15 bg-primary">
    <div class="shape shape-blur-3 text-white">
        <svg viewBox="0 0 1738 487" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h1420.92s713.43 457.505 0 485.868C707.502 514.231 0 0 0 0z" fill="url(#paint0_linear)"/><defs><linearGradient id="paint0_linear" x1="0" y1="0" x2="1049.98" y2="912.68" gradientUnits="userSpaceOnUse"><stop stop-color="currentColor" stop-opacity=".075"/><stop offset="1" stop-color="currentColor" stop-opacity="0"/></linearGradient></defs></svg>      </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <h1 class="display-2 text-white">
                    Daftar Harga
                </h1>

                <p class="lead text-white-80 mb-4 mb-md-5">
                    Semua orang memiliki kebutuhan masing-masing. Sesuaikan pilihanmu berdasarkan durasi dan fitur yang ditawarkan.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
</div>

<section class="mt-n8 mt-md-n14 mb-10">
    <div class="container">
        <div class="row gx-4">
            <div class="col-12 col-md-4">
                <div class="card shadow-lg mb-6 mb-md-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <span class="badge rounded-pill bg-primary-soft">
                                <span class="h6 text-uppercase">Gratis</span>
                            </span>
                        </div>

                        <div class="d-flex justify-content-center">
                            <span class="h2 mb-0 mt-2">Rp</span>
                            <span class="price display-2 mb-0">0</span>
                        </div>

                        <p class="text-center text-muted mb-5">
                            per meeting
                        </p>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Durasi 120 menit
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Host dan CoHost
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Breakoutroom
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-danger mt-1 me-4">
                                <i class="fe fe-x"></i>
                            </div>
                            <p>
                                Polling dan Quiz
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-warning mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Local Recording
                            </p>
                        </div>

                        <a href="<?= base_url("/pesan?paket=1") ?>" class="btn w-100 btn-primary-soft">
                            Mulai Gratis <i class="fe fe-arrow-right ms-3"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card shadow-lg mb-6 mb-md-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <span class="badge rounded-pill bg-primary-soft">
                                <span class="h6 text-uppercase">Sederhana</span>
                            </span>
                        </div>

                        <div class="d-flex justify-content-center">
                            <span class="h2 mb-0 mt-2">Rp</span>
                            <span class="price display-2 mb-0">4.900</span>
                        </div>

                        <p class="text-center text-muted mb-5">
                            per meeting
                        </p>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Durasi 360 menit
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Host dan CoHost
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Breakoutroom
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-danger mt-1 me-4">
                                <i class="fe fe-x"></i>
                            </div>
                            <p>
                                Polling dan Quiz
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-warning mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Local Recording
                            </p>
                        </div>

                        <a href="<?= base_url("/pesan?paket=2") ?>" class="btn w-100 btn-primary-soft">
                            Daftar Sederhana <i class="fe fe-arrow-right ms-3"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card shadow-lg mb-6 mb-md-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <span class="badge rounded-pill bg-primary-soft">
                                <span class="h6 text-uppercase">Lumayan</span>
                            </span>
                        </div>

                        <div class="d-flex justify-content-center">
                            <span class="h2 mb-0 mt-2">Rp</span>
                            <span class="price display-2 mb-0">9.900</span>
                        </div>

                        <p class="text-center text-muted mb-5">
                            per 3 meeting
                        </p>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Durasi total 1.000 menit
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Host dan CoHost
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Breakoutroom
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Polling dan Quiz
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Cloud Recording 7 hari
                            </p>
                        </div>

                        <a href="<?= base_url("/pesan?paket=3") ?>" class="btn w-100 btn-primary">
                            Daftar Lumayan <i class="fe fe-arrow-right ms-3"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mt-lg-5">
                <div class="card shadow-lg mb-6 mb-md-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <span class="badge rounded-pill bg-primary-soft">
                                <span class="h6 text-uppercase">Makmur</span>
                            </span>
                        </div>

                        <div class="d-flex justify-content-center">
                            <span class="h2 mb-0 mt-2">Rp</span>
                            <span class="price display-2 mb-0">24.900</span>
                        </div>

                        <p class="text-center text-muted mb-5">
                            per 7 hari
                        </p>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Durasi total 2.500 menit
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Host dan CoHost
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Breakoutroom
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Polling dan Quiz
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Cloud Recording 14 hari
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Rekap peserta otomatis
                            </p>
                        </div>

                        <a href="<?= base_url("/pesan?paket=4") ?>" class="btn w-100 btn-primary-soft">
                            Daftar Makmur <i class="fe fe-arrow-right ms-3"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mt-lg-5">
                <div class="card shadow-lg mb-6 mb-md-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <span class="badge rounded-pill bg-primary-soft">
                                <span class="h6 text-uppercase">Sultan</span>
                            </span>
                        </div>

                        <div class="d-flex justify-content-center">
                            <span class="h2 mb-0 mt-2">Rp</span>
                            <span class="price display-2 mb-0">49.900</span>
                        </div>

                        <p class="text-center text-muted mb-5">
                            per 14 hari
                        </p>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Durasi total 6.000 menit
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Host dan CoHost
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Breakoutroom
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Polling dan Quiz
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Cloud Recording 30 hari
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Rekap peserta otomatis
                            </p>
                        </div>

                        <a href="<?= base_url("/pesan?paket=5") ?>" class="btn w-100 btn-primary-soft">
                            Daftar Sultan <i class="fe fe-arrow-right ms-3"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 mt-lg-5">
                <div class="card shadow-lg mb-6 mb-md-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <span class="badge rounded-pill bg-primary-soft">
                                <span class="h6 text-uppercase">Saudagar Kaya</span>
                            </span>
                        </div>

                        <div class="d-flex justify-content-center">
                            <span class="h2 mb-0 mt-2">Rp</span>
                            <span class="price display-2 mb-0">71.900</span>
                        </div>

                        <p class="text-center text-muted mb-5">
                            per 30 hari
                        </p>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Durasi total 11000 menit
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Host dan CoHost
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Breakoutroom
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Polling dan Quiz
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Cloud Recording Selamanya
                            </p>
                        </div>

                        <div class="d-flex">
                            <div class="badge badge-rounded-circle bg-primary-soft mt-1 me-4">
                                <i class="fe fe-check"></i>
                            </div>
                            <p>
                                Rekap peserta otomatis
                            </p>
                        </div>

                        <a href="<?= base_url("/pesan?paket=6") ?>" class="btn w-100 btn-primary-soft">
                            Daftar Saudagar Kaya <i class="fe fe-arrow-right ms-3"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 py-md-8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <p class="fs-sm text-muted mb-7 mb-md-9">
                    * Seluruh harga paket yang dicantumkan belum termasuk biaya administrasi dan pajak <br>
                    ** Semua paket berbayar berhak mendapatkan sesi ujicoba / trial selama satu jam <br>
                    *** Penggunaan yang tidak sesuai paket akan mendapatkan denda sebesar Rp5.000
                </p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
