<?= $this->extend("_layout/master_admin") ?>

<?= $this->section("title") ?>
Dasbor - Tautan
<?= $this->endSection() ?>

<?= $this->section("konten") ?>

<h1 class="mb-1" id="alerts">Dasbor Tautan</h1>

<p class="fs-lg text-gray-700">
    Manajemen tautan pendek yang sudah pernah dibuat
</p>

<hr class="bg-gray-300 my-6">

<?php foreach($data1 as $d1): ?>
<div class="col-12 col-md-6">
    <div class="card card-bleed">
        <div class="card-body py-4 px-5">
            <span class="fw-bolder" style="font-size:28px;">
                <a href="https://tekan.id/<?= $d1->pendek ?>" target="_blank">
                    <span class="text-black">tekan</span><span style="color:#F90104;">.id</span>/<?= $d1->pendek ?>
                </a>
            </span>
            <br>

            <a href="https://tekan.id/<?= $d1->panjang ?>" class="text-gray-600" target="_blank">
                <?= $d1->panjang ?>
            </a>
            <hr class="bg-gray-300">

            <div style="font-size:14px;">
                <span class="text-gray-500"><i class="fe fe-clock"></i> <?= $d1->waktu ?></span>
                <span class="float-end">
                    <a class="btn btn-xs btn-primary-soft" href="https://tekan.id/<?= $d1->pendek ?>" target="_blank" style="font-size:12px;">
                        <i class="fe fe-external-link"></i> Buka
                    </a>
                    <a class="btn btn-xs btn-dark-soft" href="<?= base_url("/admin/tautan/ubah/$d1->id_pengguna") ?>" style="font-size:12px;">
                        <i class="fe fe-edit-2"></i> Ubah
                    </a>
                    <a class="btn btn-xs btn-danger-soft" href="<?= base_url("/admin/tautan/hapus/$d1->id_pengguna") ?>" style="font-size:12px;">
                        <i class="fe fe-trash-2"></i> Hapus
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<?= $this->endSection() ?>
