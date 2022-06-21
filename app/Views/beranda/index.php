<?= $this->extend("_layout/master_beranda") ?>

<?= $this->section("konten") ?>

<section class="pt-4 pt-md-11">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2">
                <img src="<?= base_url("img/beranda1-min.jpg") ?>" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0" alt="ilustrasi" data-aos="fade-up" data-aos-delay="100">
            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1" data-aos="fade-up">
                <h1 class="display-3 text-center text-md-start">
                    Selamat Datang di <img src="<?= base_url("img/tekanid-logo.png") ?>" class="mx-n1" alt="ilustrasi" width="200">
                </h1>

                <p class="lead text-center text-md-start text-muted mb-6 mb-lg-8">
                    Layanan prima untuk segala kebutuhan acara daringmu, kini hadir di Indonesia.
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

<?= $this->endSection() ?>
