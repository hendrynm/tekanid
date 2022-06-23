<?= $this->extend("_layout/master_beranda") ?>

<?= $this->section("title") ?>
Produk
<?= $this->endSection() ?>

<?= $this->section("konten") ?>

<section class="pt-8 pt-md-12 pb-10 pb-md-12 pb-lg-13">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-6">
                <div class="img-skewed img-skewed-end mb-10 mb-md-0">
                    <img src="https://explore.zoom.us/media/img-modernizemeeting_69f1e3a.png" alt="ilustrasi" class="img-fluid" data-aos="fade-up">
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-5">
                <h2>
                    Layanan Telekonferensi<br>
                    <span class="text-primary fw-bolder">Zoom Meeting</span>
                </h2>

                <p class="fs-lg text-gray-700 mb-6">
                    Paling sering digunakan selama masa pandemi COVID-19 dengan pengguna lebih dari 500.000 orang di seluruh Indonesia.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x text-gray-200">
        <svg viewBox="0 0 2880 480" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2160 0C1440 240 720 240 720 240H0v240h2880V0h-720z" fill="currentColor"/></svg>
    </div>
</div>

<section class="pt-8 pt-md-5 pb-10 pb-md-12 pb-lg-13 bg-gray-200">
    <div class="container">
        <div class="row align-items-center justify-content-between mt-10">
            <div class="col-12 col-md-6 col-lg-5">
                <h2>
                    Layanan Peringkas Tautan<br>
                    <img src="<?= base_url("img/tekanid-logo.png") ?>" class="mx-n1" alt="ilustrasi" width="150">
                </h2>

                <p class="fs-lg text-gray-700 mb-6">
                    Tautan yang sederhana akan memudahkan calon pengguna untuk mengetik atau mengklik tautan secara mandiri tanpa perlu mengingat tautan panjang.
                </p>
            </div>

            <div class="col-12 col-md-6">
                <div class="img-skewed img-skewed-end mb-10 mb-md-0">
                    <img src="<?= base_url("img/tekanid-home.png")?>" alt="ilustrasi" class="img-fluid" data-aos="fade-up">
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
