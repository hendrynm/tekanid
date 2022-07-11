<?= $this->extend("_layout/master_beranda") ?>

<?= $this->section("title") ?>
Beranda
<?= $this->endSection() ?>

<?= $this->section("konten") ?>

<section class="pt-8 pb-11 pt-md-9 pb-md-12 bg-gray-200">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7 text-center">
                <h1 class="display-4 fw-bold">
                    Ringkaskan Tautanmu
                </h1>

                <p class="fs-lg text-muted mb-6 mb-md-8">
                    Lupakan tautan panjang, bertele-tele, dan sulit diingat.
                </p>

                <form action="<?= base_url("/ringkas")?>" method="post">
                    <input type="hidden" name="id_pengguna" value="<?= session()->get('id_pengguna') ?? "0" ?>">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group form-floating">
                                <input type="text" class="form-control" id="panjang" name="panjang" placeholder="Masukkan Tautan Panjang" required>
                                <label for="panjang">Masukkan Tautan Panjang</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group">
                                <div class="input-group-text fw-bolder"><span class="text-black">tekan</span><span style="color:#F90104;">.id</span>/</div>
                                <input type="text" class="form-control" id="pendek" name="pendek" placeholder="custom-link" required>
                                <button type="submit" class="btn btn-primary btn-sm">Ringkas</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
