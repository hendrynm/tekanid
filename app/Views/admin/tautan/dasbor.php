<?= $this->extend("_layout/master_admin") ?>

<?= $this->section("title") ?>
Dasbor - Tautan
<?= $this->endSection() ?>

<?= $this->section("judul") ?>
Dasbor Tautan
<?= $this->endSection() ?>

<?= $this->section("deskripsi") ?>
Manajemen tautan pendek yang sudah pernah dibuat
<?= $this->endSection() ?>

<?= $this->section("konten") ?>

<div class="row">
<?php foreach($data1 as $d1): ?>
    <div class="col-12 col-md-6">
        <div class="card card-bleed mb-5">
            <div class="card-body py-4 px-5">
                <span class="fw-bolder" style="font-size:24px;">
                    <a href="https://tekan.id/<?= $d1->pendek ?>" target="_blank">
                        <span class="text-black">tekan</span><span style="color:#F90104;">.id</span>/<?= $d1->pendek ?>
                    </a>
                </span>
                <br>

                <a href="<?= $d1->panjang ?>" class="d-block d-xl-none text-gray-600" target="_blank">
                    <?= strlen($d1->panjang) > 35 ? (substr($d1->panjang,0,35) . "...") : $d1->panjang ?>
                </a>
                <a href="<?= $d1->panjang ?>" class="d-none d-xl-block text-gray-600" target="_blank">
                    <?= strlen($d1->panjang) > 50 ? (substr($d1->panjang,0,50) . "...") : $d1->panjang ?>
                </a>
                <hr class="bg-gray-300">

                <div style="font-size:14px;">
                    <span class="text-gray-500">
                        <i class="fe fe-clock"></i>
                        <?php setlocale(LC_ALL,'id_ID.utf8', 'id-ID'); echo strftime("%d %B %Y",strtotime($d1->waktu)) .
                            " " . date_format(date_create($d1->waktu),"H:i:s")?>
                    </span>
                    <span class="float-end">
                        <a class="btn btn-xs btn-primary-soft" href="https://tekan.id/<?= $d1->pendek ?>" target="_blank" style="font-size:12px;">
                            <i class="fe fe-external-link"></i> Buka
                        </a>
                        <a class="btn btn-xs btn-dark-soft" href="<?= base_url("/admin/tautan/ubah/$d1->id_tautan") ?>" style="font-size:12px;">
                            <i class="fe fe-edit-2"></i> Ubah
                        </a>
                        <a class="btn btn-xs btn-danger-soft" href="<?= base_url("/admin/tautan/hapus/$d1->id_tautan") ?>" style="font-size:12px;">
                            <i class="fe fe-trash-2"></i> Hapus
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
</div>

<?= $this->endSection() ?>
