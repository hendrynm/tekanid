<?= $this->extend("_layout/master_beranda") ?>

<?= $this->section("title") ?>
Beranda
<?= $this->endSection() ?>

<?= $this->section("konten") ?>

<section class="pt-4 pt-md-11">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2">
                <img src="<?= base_url("img/beranda1-min.jpg") ?>" class="img-fluid mw-md-110 mb-6 mb-md-0" alt="ilustrasi" data-aos="fade-up" data-aos-delay="100">
            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">
                <h1 class="display-3 text-center text-md-start">
                    Rencanakan acaramu bersama <img src="<?= base_url("img/tekanid-logo.png") ?>" class="mx-n1 mt-n1" alt="ilustrasi" width="200">
                </h1>

                <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
                    Layanan prima untuk segala kebutuhan acara daringmu, kini hadir di Surabaya.
                </p>

                <div class="text-center text-md-start">
                    <a href="/masuk" class="btn btn-primary shadow lift me-1">
                        Jadwalkan Acara <i class="fe fe-calendar d-none d-md-inline ms-3"></i>
                    </a>
                    <a href="/produk" class="btn btn-primary-soft lift">
                        Lihat Produk
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="position-relative mt-10">
    <div class="shape shape-bottom shape-fluid-x text-gray-200">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
    </div>
</div>

<section class="py-8 py-md-11 bg-gray-200">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 col-lg-5" data-aos="fade-up">
                <span class="badge rounded-pill bg-primary-soft mb-3">
                    <span class="h6 text-uppercase">Keuntungan</span>
                </span>

                <h2 class="fw-bold">
                    Buat acaramu dengan <br>
                    <span class="text-primary">fitur berlimpah</span>.
                </h2>

                <p class="fs-lg text-gray-700">
                    Menggunakan platform TekanID, semua acara kini bisa kamu lakukan dengan harga yang terjangkau dengan mudah dan cepat. Tidak perlu konfigurasi yang rumit, cukup klik dan nikmati.
                </p>
            </div>

            <div class="col-12 col-md-6 col-lg-6 offset-lg-1">
                <div class="card card-border border-primary shadow-lg mb-5" data-aos="fade-up">
                    <div class="card-body">
                        <div class="list-group list-group-flush">
                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-auto">
                                    <p class="fw-bold mb-1">
                                        Cloud Recording <span class="text-primary">Unlimited Selamanya</span>
                                    </p>

                                    <p class="fs-sm text-muted mb-0">
                                        Akses mudah dan cepat lewat 1 klik saja.
                                    </p>
                                </div>
                                <div class="badge badge-rounded-circle bg-primary-soft ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>

                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-auto">
                                    <p class="fw-bold mb-1">
                                        Buat <span class="text-primary">Polling atau Quiz</span> dengan Cepat
                                    </p>

                                    <p class="fs-sm text-muted mb-0">
                                        Hingga 50 polling untuk setiap meeting.
                                    </p>
                                </div>
                                <div class="badge badge-rounded-circle bg-primary-soft ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>

                            <div class="list-group-item d-flex align-items-center">
                                <div class="me-auto">
                                    <p class="fw-bold mb-1">
                                        Rekap Peserta <span class="text-primary">Otomatis</span>
                                    </p>

                                    <p class="fs-sm text-muted mb-0">
                                        Langsung keluar setelah meeting berakhir.
                                    </p>
                                </div>
                                <div class="badge badge-rounded-circle bg-primary-soft ms-4">
                                    <i class="fe fe-check"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="fs-sm text-center text-gray-500 mb-0">
                    * fitur mungkin berbeda sesuai paket yang diambil
                </p>
            </div>
        </div>
    </div>
</section>

<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-white">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>
    </div>
</div>

<section class="py-8 py-md-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center" data-aos="fade-up">
                <span class="badge rounded-pill bg-primary-soft mb-3">
                    <span class="h6 text-uppercase">Harga Terbaik</span>
                </span>

                <h2 class="mb-5 mb-md-5">
                    Dapatkan harga yang <span class="text-primary">lebih murah</span> untuk setiap durasi meeting yang lebih lama hingga
                </h2>

                <div class="d-flex text-center justify-content-center">
                    <span class="display-2 mb-0 fw-bolder">
                        <span class="text-primary-desat">
                            Rp<span data-countup='{"startVal":"5000","separator":".","duration":3}' data-to="300" data-aos data-aos-id="countup:in">
                                Rp5000</span>
                        </span>
                        / jam
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-dark">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 48h2880V0h-720C1442.5 52 720 0 720 0H0v48z" fill="currentColor"/></svg>      </div>
</div>

<section class="py-8 py-md-11 bg-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 text-center">
                <span class="badge rounded-pill bg-gray-700-soft mb-4">
                    <span class="h6 fw-bold text-uppercase text-white">Dapatkan Sekarang</span>
                </span>

                <h1 class="display-4 text-white">
                    Daftar <span class="fw-bolder">TekanID</span> Sekarang!
                </h1>

                <p class="fs-lg text-muted mb-6 mb-md-8">
                    Hentikan membuang-buang waktu dan uang yang berharga hanya untuk mengadakan acara. Selesaikan pendaftaran akunmu sekarang dan segera nikmati layanan kami.
                </p>

                <a class="btn btn-sm btn-primary-desat lift" data-bs-toggle="modal" href="<?=base_url("/")?>#modal-daftar">
                    Daftar Sekarang <i class="fe fe-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
