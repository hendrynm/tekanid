<?= $this->extend("_layout/master_admin") ?>

<?= $this->section("title") ?>
Buat - Tautan
<?= $this->endSection() ?>

<?= $this->section("judul") ?>
Buat Tautan Baru
<?= $this->endSection() ?>

<?= $this->section("deskripsi") ?>
Membuat peringkas tautan baru
<?= $this->endSection() ?>

<?= $this->section("konten") ?>

<div class="row">
    <div class="col-12 col-lg-8">
        <form action="<?= base_url("/admin/tautan/buat")?>" method="post">
            <input type="hidden" name="id_pengguna" value="<?= session()->get('id_pengguna') ?>">
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

<?= $this->endSection() ?>
