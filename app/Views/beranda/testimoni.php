<?= $this->extend("_layout/master_beranda") ?>

<?= $this->section("title") ?>
Testimoni
<?= $this->endSection() ?>

<?= $this->section("konten") ?>

<section class="py-8 py-md-11">
    <div class="container">
        <div class="row align-items-stretch">
            <div class="col-12 col-md-5">
                <blockquote class="blockquote text-center">

                    <div class="img-fluid mb-5 mb-md-7 mx-auto">

                    </div>

                    <p class="mb-5 mb-md-7">
                        "Semua diproses dengan baik, cepat, dan gratis."
                    </p>

                    <footer class="blockquote-footer mb-8 mb-md-0">
                        <div class="avatar me-3">
                            <img src="#" class="avatar-img rounded-circle" alt="...">
                        </div> <span class="h6 text-uppercase">Hendry</span>
                    </footer>
                </blockquote>
            </div>

            <div class="col-12 col-md-1 border-end my-n8 my-md-n11 d-none d-md-block"></div>

            <div class="col-12 col-md-5 offset-md-1">
                <blockquote class="blockquote text-center">
                    <div class="img-fluid mb-5 mb-md-7 mx-auto">
                    </div>

                    <p class="mb-5 mb-md-7">
                        "Pengalaman yang luar biasa"
                    </p>

                    <footer class="blockquote-footer mb-0">
                        <div class="avatar me-3">
                            <img src="#" class="avatar-img rounded-circle" alt="...">
                        </div> <span class="h6 text-uppercase">Naufal</span>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
