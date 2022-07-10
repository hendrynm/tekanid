<?= $this->extend("_layout/master_admin") ?>

<?= $this->section("title") ?>
Beranda
<?= $this->endSection() ?>

<?= $this->section("konten") ?>

<h1 class="mb-1" id="alerts">Beranda</h1>

<p class="fs-lg text-gray-700">
    Selamat Datang <b><?= $data1->nama ?></b> 👋
</p>

<hr class="bg-gray-300 my-6">

<?= $this->endSection() ?>
